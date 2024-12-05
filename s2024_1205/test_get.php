<?php
// 取得 JSON 資料
$data = json_decode(file_get_contents('php://input'), true);

// 取得資料
$name = $data['name'];
$age = $data['age'];

// 回傳 JSON 格式的資料
echo json_encode(array("name" => $name, "age" => $age));
?>
