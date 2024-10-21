<?php

function dd($data){
    print('<pre>');
    print_r($data);
    print('</pre>');
}
    // $_GET form 傳過來的資料
    $data = $_GET;

    // $data = [
    //     's1' => 'amy',
    //     's2' => 'amy',
    //     's3' => 'amy'
    // ];
     dd($data);




?>


<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // 獲取提交的資料
    $myName = $_GET['myName'];
    $myNumber = $_GET['myNumber'];
    $myPrice = $_GET['myPrice'];
    $myBirthday = $_GET['myBirthday'];

    // 顯示資料
    echo "提交的名字是: $myName<br>";
    echo "提交的電話是: $myNumber<br>";
    echo "提交的價格是: $myPrice<br>";
    echo "提交的生日是: $myBirthday<br>";
}
?> -->
