<?php
// 開啟錯誤顯示
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 檢查是否為 POST 請求
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 取得表單數據
    $matcha = isset($_POST['matcha']) ? (int)$_POST['matcha'] : 0;
    $melon = isset($_POST['melon']) ? (int)$_POST['melon'] : 0;
    $taiyaki = isset($_POST['taiyaki']) ? (int)$_POST['taiyaki'] : 0;
    $fruit = isset($_POST['fruit']) ? (int)$_POST['fruit'] : 0;
    $brown_sugar = isset($_POST['brown-sugar']) ? (int)$_POST['brown-sugar'] : 0;

    // 設定價格
    $prices = [
        'matcha' => 50,
        'melon' => 45,
        'taiyaki' => 60,
        'fruit' => 40,
        'brown_sugar' => 55
    ];

    // 計算總金額
    $total = ($matcha * $prices['matcha']) + 
             ($melon * $prices['melon']) + 
             ($taiyaki * $prices['taiyaki']) + 
             ($fruit * $prices['fruit']) + 
             ($brown_sugar * $prices['brown_sugar']);

    // 顯示訂單結果
    echo "<h1>您的訂單已提交</h1>";
    echo "<p>總金額: $" . $total . "</p>";
    echo "<p><a href='menu.php'>返回點餐頁面</a></p>";
} else {
    echo "請通過表單提交訂單。";
}
?>
