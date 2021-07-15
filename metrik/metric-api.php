<?php
   global $ID_COUNTER_METRIC, $PATH_FILES_METRIK_JSON, $FILE_METRIK, $FILE_GOAL_ORDER, $FILE_COUNTERS_INFO;

    function getContext(){
        global $TOKEN;
        $options = array(
            'http' => array(
                'method' => 'GET',
                'header' => array(
                    'Content-Type: application/x-yametrika+json',
                    "Authorization: OAuth ".$TOKEN
                )
            )
        );
        return stream_context_create($options);
    }

    function createCounter($url_site, $name_counter){

        global $URL_METRIKA_COUNTERS, $TOKEN;

        $code_options = array(
            'clickmap' => '1',
            'visor' => '1'
        );
        $data = array(
            'counter' => array(
                'name' => $name_counter,
                'site2' => array(
                    'site' => $url_site
                )
            )
        );

        $content = json_encode($data);

        $curl = curl_init($URL_METRIKA_COUNTERS);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json",
                  "Authorization: OAuth ".$TOKEN
                ));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

        $json_response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        $result = -1;

        if ( $status != 200 ) {
            echo("Error: call to URL $URL_METRIKA_COUNTERS failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }
        else{
            $result = json_decode($json_response)->counter->id;
        }

        curl_close($curl);
        return $result;
    }

    function saveDataCounters($outputFile){

        global $URL_METRIKA_COUNTERS;
        $url = $URL_METRIKA_COUNTERS;

        $metrikaRequest = file_get_contents($url, false, getContext());

        if (!empty($metrikaRequest)) {
            file_put_contents($outputFile, $metrikaRequest);
        };

        return $metrikaRequest;
    }

    function saveDataMetrik($ID_COUNTER_METRIC, $outputFile)
    {

        $url = "https://api-metrika.yandex.ru/stat/v1/data";
        $parameters = [
            "ids" => $ID_COUNTER_METRIC,                // номер счётчика метрики
            'metrics' => 'ym:pv:pageviews,ym:pv:users', // данные по: страницам и количеству просмотров
            'dimensions' => 'ym:pv:URLHash',               // группировка по URLHash
            "date1" => "2021-07-12",                  // с какой даты получить отчёт
            'accuracy' => 'full',                        // точная статистика (без округления)
            'limit' => '100000',                      // максимальный лимит данных
            'proposed_accuracy' => 'false'                        // без округления данных
        ];

        array_walk($parameters, function (&$key, $value) {
            return $key = "$value=$key";
        });

        $parameters = implode('&', $parameters);

        $url = $url . '?&' . $parameters;

        $metrikaRequest = file_get_contents($url, false, getContext());

        if (!empty($metrikaRequest)) {
            file_put_contents($outputFile, $metrikaRequest);
        };
    }

    function createGoal($counterId,
                        $name,
                        $type,
                        $isRetargeting,
                        $goalSource,
                        $flagMarket,
                        $conditionsType,
                        $conditionsUrl){

        global $TOKEN;
        $URL = "https://api-metrika.yandex.net/management/v1/counter/".$counterId."/goals";

        $data = array(
            "goal" => array(
                "name" => $name,
                "type" => $type,
                "is_retargeting" => $isRetargeting,
                "goal_source" => $goalSource,
                "flag" => $flagMarket,
                "conditions" =>
                    array(
                        array(
                        "type" => $conditionsType,
                        "url" => $conditionsUrl
                        )
                    )
            )
        );

        $content = json_encode($data);

        $curl = curl_init($URL);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json",
                "Authorization: OAuth ".$TOKEN
            ));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

        $json_response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $result = -1;

        if ( $status != 200 ) {
            echo("Error: call to URL $URL failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }
        else{
            $result = json_decode($json_response)->goal->id;
        }

        curl_close($curl);
        return $result;


}


function saveDataGoal($ID_COUNTER_METRIC, $GOAL, $outputFile){

        $url = "https://api-metrika.yandex.net/management/v1/counter/".$ID_COUNTER_METRIC."/goal/".$GOAL;

        $metrikaRequest = file_get_contents($url, false, getContext());

        if (!empty($metrikaRequest)) {
            file_put_contents($outputFile, $metrikaRequest);
        };
    }

    function renderMetrika($arrayIds = null){

        global $PATH_FILES_METRIK_JSON, $FILE_COUNTERS_INFO;
        $counters = json_decode(saveDataCounters($PATH_FILES_METRIK_JSON.$FILE_COUNTERS_INFO));

        $counters = $counters->counters;

        print "<!-- Yandex.Metrika counter -->";

        foreach ($counters as $counter) {
            $id = $counter->id;

            if($arrayIds == null || in_array($id, $arrayIds)) {

                $codeOptions = $counter->code_options;

                $clickmap = json_encode($codeOptions->clickmap == 1);
                $visor = json_encode($codeOptions->visor == 1);

                print (
                    '
                <script type="text/javascript" >
                      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
                
                      ym(' . $id . ', "init", {
                        clickmap: ' . $clickmap . ',
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: ' . $visor . '
                      });
                    </script>
                    <noscript><div>
                        <img src="https://mc.yandex.ru/watch/' . $id . '" style="position:absolute; left:-9999px;" alt="" />
                    </div></noscript>
                    '
                );
            }
        }

        print "<!-- /Yandex.Metrika counter -->";
    }

    //saveDataMetrik($ID_COUNTER_METRIC,  $PATH_FILES_METRIK_JSON.$FILE_METRIK);
    //saveDataGoal($ID_COUNTER_METRIC, "198847033", $PATH_FILES_METRIK_JSON.$FILE_GOAL_ORDER);


    //$counters = saveDataCounters( $PATH_FILES_METRIK_JSON.$FILE_COUNTERS_INFO);

    //createCounter("effeminate-beacon.000webhostapp.com", "counter13");

    //renderMetrika(array(82871641));
    //renderMetrika(array(0000000000));
    //renderMetrika();

    //createGoal(82831150, "Проход по ссылке 10", "url", 0, "user", "", "contain", "#q1");

?>