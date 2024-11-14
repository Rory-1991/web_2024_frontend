<?php

$prices = [
    'matcha' => 120,
    'melon' => 140,
    'chocolatte' => 130,
    'brown_sugar' => 110
];

$price = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $matcha = isset($_POST['matcha']) ? (int)$_POST['matcha'] : 0;
    $melon = isset($_POST['melon']) ? (int)$_POST['melon'] : 0;
    $chocolatte = isset($_POST['chocolatte']) ? (int)$_POST['chocolatte'] : 0;
    $brown_sugar = isset($_POST['brown-sugar']) ? (int)$_POST['brown-sugar'] : 0;

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
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
            font-size: 1.2rem;
        }

        td {
            font-size: 1rem;
        }

        td input {
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
            <table>
                <thead>
                    <tr>
                        <th>菜單</th>
                        <th></th>
                        <th>價格</th>
                        <th>數量</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>經典小山園抹茶</td>
                        <td><img src="https://opentour.com.hk/wp-content/uploads/2021/05/%E6%8A%B9%E8%8C%B6%E5%91%B3.jpg" alt="經典小山園抹茶" width="140" height="140"></td>
                        <td>$120</td>
                        <td><input type="number" id="matcha" name="matcha" value="0" min="0"></td>
                    </tr>
                    <tr>
                        <td>濃密哈密瓜</td>
                        <td><img src="https://article-image.travel.navitime.jp/img/NTJnews0075-zh-tw/mat0397_7.jpg" alt="濃密哈密瓜" width="140" height="140"></td>
                        <td>$140</td>
                        <td><input type="number" id="melon" name="melon" value="0" min="0"></td>
                    </tr>
                    <tr>
                        <td>巧克力草莓鯛魚燒</td>
                        <td><img src="https://img.ltn.com.tw/Upload/playing/page/2020/06/15/200615-19579-5-p88KM.jpg" alt="巧克力草莓鯛魚燒" width="140" height="140"></td>
                        <td>$130</td>
                        <td><input type="number" id="chocolatte" name="chocolatte" value="0" min="0"></td>
                    </tr>
                    <tr>
                        <td>黑糖燕麥奶</td>
                        <td><img src="https://api.elle.com.hk/var/site/storage/images/_aliases/img_776_w/9/5/4/9/38459459-1-chi-HK/3.jpg" alt="黑糖燕麥奶" width="140" height="140"></td>
                        <td>$110</td>
                        <td><input type="number" id="brown-sugar" name="brown-sugar" value="0" min="0"></td>
                    </tr>
                </tbody>
            </table>

            <div class="price-section">
                <?php if ($price > 0): ?>
                    <p>總金額: $<?php echo $price; ?></p>
                <?php endif; ?>
                <button type="submit">送出</button>
            </div>
        </form>
    </div>

</body>

</html>
