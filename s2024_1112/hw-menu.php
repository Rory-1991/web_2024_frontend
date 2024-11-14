<?php
// 設定價格
$prices = [
    'matcha' => 120,
    'melon' => 140,
    'chocolatte' => 130,
    'brown_sugar' => 110
];

// 初始化總金額
$price = 0;

// 檢查表單是否提交
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 從表單獲取數量
    $matcha = isset($_POST['matcha']) ? (int)$_POST['matcha'] : 0;
    $melon = isset($_POST['melon']) ? (int)$_POST['melon'] : 0;
    $chocolatte = isset($_POST['chocolatte']) ? (int)$_POST['chocolatte'] : 0;
    $brown_sugar = isset($_POST['brown-sugar']) ? (int)$_POST['brown-sugar'] : 0;

    // 計算總金額
    $price = ($matcha * $prices['matcha']) + 
             ($melon * $prices['melon']) + 
             ($chocolatte * $prices['chocolatte']) + 
             ($brown_sugar * $prices['brown_sugar']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上點餐系統</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://imgs.699pic.com/images/500/526/266.jpg!list1x.v2');
            background-size: cover;
            background-position: center;
        }

        .container {
            width: 70%;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* 半透明白色背景 */
            border-radius: 12px; /* 圓角 */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* 增加陰影效果 */
            backdrop-filter: blur(10px); /* 背景模糊 */
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .menu-item {
            display: flex;
            align-items: center;
            margin: 15px 0;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .menu-item img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-right: 20px;
        }

        .menu-item label {
            font-size: 1.4rem;
            margin-right: 10px;
            flex: 1;
        }

        .menu-item input {
            width: 60px;
            padding: 5px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .price-section {
            text-align: center;
            margin-top: 20px;
        }

        .price-section p {
            font-size: 1.5rem;
            font-weight: bold;
        }

        button {
            padding: 10px 20px;
            background-color: #c9cbf1;
            color: white;
            border: none;
            font-size: 1.1rem;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #9bade6;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>線上點餐系統</h1>
        <form action="" method="POST">
            <div class="menu-item">
                <img src="https://opentour.com.hk/wp-content/uploads/2021/05/%E6%8A%B9%E8%8C%B6%E5%91%B3.jpg"
                    alt="經典小山園抹茶">
                <label for="matcha">經典小山園抹茶 (每份 $120)</label>
                <input type="number" id="matcha" name="matcha" value="0" min="0">
            </div>

            <div class="menu-item">
                <img src="https://article-image.travel.navitime.jp/img/NTJnews0075-zh-tw/mat0397_7.jpg" alt="濃密哈密瓜">
                <label for="melon">濃密哈密瓜 (每份 $140)</label>
                <input type="number" id="melon" name="melon" value="0" min="0">
            </div>

            <div class="menu-item">
                <img src="https://img.ltn.com.tw/Upload/playing/page/2020/06/15/200615-19579-5-p88KM.jpg"
                    alt="巧克力草莓鯛魚燒">
                <label for="chocolatte">巧克力草莓鯛魚燒 (每份 $130)</label>
                <input type="number" id="chocolatte" name="chocolatte" value="0" min="0">
            </div>


            <div class="menu-item">
                <img src="https://api.elle.com.hk/var/site/storage/images/_aliases/img_776_w/9/5/4/9/38459459-1-chi-HK/3.jpg"
                    alt="黑糖燕麥奶">
                <label for="brown-sugar">黑糖燕麥奶 (每份 $110)</label>
                <input type="number" id="brown-sugar" name="brown-sugar" value="0" min="0">
            </div>

            <div class="price-section">
                <!-- 顯示總金額 -->
                <?php if ($price > 0): ?>
                    <p>總金額: $<?php echo $price; ?></p>
                <?php endif; ?>
                <button type="submit">送出</button>
            </div>
        </form>
    </div>

</body>

</html>
