<?php

    $data = "";
    include_once "metrik/constants.php";

    function includeMetrik(){
        print('
            <script src="/metrik/js/counter.js"></script>
            <script src="/metrik/js/goal.js"></script>
        
            <script src="/metrik/js/counters_info.js"></script>
            <script src="/metrik/js/test.js"></script>
        
            <script src="/metrik/auto_count_goal/request.js"></script>
        ');
    }

    function parseRequestUri($request_uri){

        $result = array();
        parse_str($request_uri,  $output);

        foreach($output as $key=>$value) {
            $key = str_replace("/?", "", $key);
            $result += [$key=>$value];

           // echo "<span>".$key."</span> : <b>".$value."</b><br>";
        }


        return $result;
    }

    function setJsGlobalPathLend(){
        print ('
            <script>
              window.CURRNET_HOST = location.protocol + "//" + location.host + location.pathname;
              window.METRIK_JSON = window.CURRNET_HOST + "/json/metrik/";
            </script>
            ');
    }


function goToUrl($url){
        //header('Location: /prelends/'.$url.'/index.php');

        include_once "./metrik/metric-api.php";
        //include_once ".metrik/metric-api.php";

        global $PATH_PRELANDING;
        $PATH_PRELANDING = 'prelends/'.$url.'/';

        global $data;
        $data = json_decode(file_get_contents($PATH_PRELANDING.'data.json'));
        include_once $PATH_PRELANDING.'index.php';

        //include_once "prelends/proipoteka.ru/index.php";
    }


    $host = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http');

	$request_uri =  $_SERVER['REQUEST_URI'];

    //$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'].'<br>';

    //$url = 'https://ec-d.ru';

    //$request_uri = str_replace("/?", "?", $request_uri);
    //$url = $url.$request_uri;

    /*
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	curl_setopt($ch, CURLOPT_HEADER, false);
	$html = curl_exec($ch);

    	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	http_response_code(200);
    */

	//echo $url.'<br>';

	//$parse_url = parse_url($url);
	
	//echo 'protocol '.$parse_url['scheme'].'<br>';

    //echo 'protocol: '.$host.'<br>';
    //echo 'host: '.$parse_url['host'].'<br>';

    //echo 'user '.$parse_url['user'].'<br>';
    //echo 'pass '.$parse_url['pass'].'<br>';

   // echo 'path: '.$parse_url['path'].'<br>';

    //echo 'query '.$parse_url['query'].'<br>';
    //echo 'fragment '.$parse_url['fragment'].'<br>';

/*
    echo '<br>params: ';

    echo '<pre>';
    print_r($request_uri);
    echo '</pre>';
*/

    parse_str($request_uri,  $output);

    //print_r($output);
    //echo "<br>";

    $output = parseRequestUri($request_uri);
    $url = $output['url'];

    $data = json_decode(file_get_contents('./settings.json'));

    $projects = $data->projects;
    foreach ($projects as $id=>$item){
        if($item->name == $url || $item->url == $url) {
            goToUrl($item->url);
            break;
        }
    }

    //echo $url;
    //header('Location: /prelends/proipoteka.ru/');


?>