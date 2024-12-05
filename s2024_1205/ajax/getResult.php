<?php
// echo "getSum ok";

$input = $_GET;
$num1 = $input['num1'];
$num2 = $input['num2'];
$opt = $input['opt'];

// + - * /
$result = 0;
switch ($opt) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        $result = $num1 / $num2;
        break;

    default:
        # code...
        break;
}




$data = [
    'num1' => $num1,
    'num2' => $num2,
    'opt' => $opt,
    'result' => $result
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