<?php
// PHP 檔案回傳資料
$data = [
    'name' => 'Rory',
    'mobile' => '0911-222-333',
    'sentence' => 'The only way to do great work is to love what you do. -Steve Jobs',
];
echo json_encode($data); // 回傳 JSON 格式的資料
?>
