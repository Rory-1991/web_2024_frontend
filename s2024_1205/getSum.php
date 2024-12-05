<?php
// echo "getSum ok";

$input = $_GET;
$num1 = $input['num1'];
$num2 = $input['num2'];

$sum = $num1 + $num2;


$data = [
    'num1' => $num1,
    'num2' => $num2,
    'sum' => $sum
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