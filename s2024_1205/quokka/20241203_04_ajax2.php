<?php
$data = [
    'name' => 'Hi! Everyone',
    'mobile' => '✿✿✿✿✿',
    'word' => '❆ Merry Christmas ❆',
];

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// dd($data);

$myJSON = json_encode($data);

echo $myJSON;