<?php
$data = [
    's1' => 'amy',
    's2' => 'bob',
    's3' => 'cat',
];

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// dd($data); 取消才會是json可以回傳

$myJSON = json_encode($data);

echo $myJSON;