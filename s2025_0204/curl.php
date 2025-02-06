<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// fix cors
header('Access-Control-Allow-Origin: *');

// curl
//init curl
$ch = curl_init();

$url = 'https://publicart.taipei/service/artgetdata.ashx?District_tw=&completeinstallYear=&site_tw=';
//curl_setopt可以設定curl參數
//設定url
curl_setopt($ch , CURLOPT_URL , $url);
// false 顯示
// true 不顯示
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

echo $result;

// $result = curl_exec($ch);
//關閉連線
curl_close($ch);

// dd($result);

// $data = json_decode($result);
// dd($data);

// json_decode json to array
// json_encode array to json