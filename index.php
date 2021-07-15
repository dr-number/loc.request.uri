<?php

    function parseRequestUri($request_uri){
        parse_str($request_uri,  $output);

        foreach($output as $key=>$value) {
            $key = str_replace("/?", "", $key);
            echo "<span>".$key."</span> : <b>".$value."</b><br>";
        }
    }


$host = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http');

	$request_uri =  $_SERVER['REQUEST_URI'];

    //$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'].'<br>';
    $url = 'https://ec-d.ru';

    //$request_uri = str_replace("/?", "?", $request_uri);
    $url = $url.$request_uri;

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	curl_setopt($ch, CURLOPT_HEADER, false);
	$html = curl_exec($ch);

    	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	http_response_code(200);

	echo $url.'<br>';

	$parse_url = parse_url($url);
	
	//echo 'protocol '.$parse_url['scheme'].'<br>';
    echo 'protocol: '.$host.'<br>';
    echo 'host: '.$parse_url['host'].'<br>';

    //echo 'user '.$parse_url['user'].'<br>';
    //echo 'pass '.$parse_url['pass'].'<br>';

    echo 'path: '.$parse_url['path'].'<br>';

    //echo 'query '.$parse_url['query'].'<br>';
    //echo 'fragment '.$parse_url['fragment'].'<br>';

    echo '<br>params: ';

    echo '<pre>';
    print_r($request_uri);
    echo '</pre>';

    parse_str($request_uri,  $output);
    print_r($output);

    echo "<br>";

    //header('Location: /prelends/proipoteka.ru/');

    parseRequestUri($request_uri);

?>