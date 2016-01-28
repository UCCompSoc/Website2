<?php

function fetch_url($url){

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    // You may need to add the line below
    // curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

    $feed_data = curl_exec($ch);
    curl_close($ch);

    return $feed_data;

}

$timestamp = time() - 86400*150;// - 86400*110;
$query = "UcCompSoc/events?since={$timestamp}&fields=name%2Cstart_time%2Ccover%2Cid";

//App Info, needed for Auth
$app_id = "1668979946675179";
$app_secret = "4c3b90244b2be30c31a1ab406c8df8cd";

//Retrieve auth token
$auth_token = fetch_url("https://graph.facebook.com/oauth/access_token?grant_type=client_credentials&client_id={$app_id}&client_secret={$app_secret}");

$json_object = fetch_url("https://graph.facebook.com/v2.5/{$query}&{$auth_token}");

print($json_object);

?>
