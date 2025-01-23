<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data = [
    's1' => 'amy',
    's2' => 'bob',
    's3' => 'cat'
];

header('Access-Control-Allow-Origin: http://127.0.0.1:5501');
// header('Access-Control-Allow-Origin: *');


// dd($data);

echo json_encode($data);