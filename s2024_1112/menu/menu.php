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
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-right: 20px;
        }

        .menu-item label {
            font-size: 1.2rem;
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

        .total-section {
            text-align: center;
            margin-top: 20px;
        }

        .total-section p {
            font-size: 1.5rem;
            font-weight: bold;
        }

        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            font-size: 1.1rem;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>線上點餐系統</h1>
        <form action="process_order.php" method="POST">
            <div class="menu-item">
                <img src="https://opentour.com.hk/wp-content/uploads/2021/05/%E6%8A%B9%E8%8C%B6%E5%91%B3.jpg"
                    alt="經典小山園抹茶">
                <label for="matcha">經典小山園抹茶 (每杯 $50)</label>
                <input type="number" id="matcha" name="matcha" value="0" min="0">
            </div>

            <div class="menu-item">
                <img src="https://article-image.travel.navitime.jp/img/NTJnews0075-zh-tw/mat0397_7.jpg" alt="濃密哈密瓜">
                <label for="melon">濃密哈密瓜 (每杯 $45)</label>
                <input type="number" id="melon" name="melon" value="0" min="0">
            </div>

            <div class="menu-item">
                <img src="https://img.ltn.com.tw/Upload/playing/page/2020/06/15/200615-19579-5-p88KM.jpg"
                    alt="巧克力草莓鯛魚燒">
                <label for="taiyaki">巧克力草莓鯛魚燒 (每個 $60)</label>
                <input type="number" id="taiyaki" name="taiyaki" value="0" min="0">
            </div>

            <div class="menu-item">
                <img src="https://cdn2.ettoday.net/images/2702/d2702959.jpg" alt="綜合水果">
                <label for="fruit">綜合水果 (每份 $40)</label>
                <input type="number" id="fruit" name="fruit" value="0" min="0">
            </div>

            <div class="menu-item">
                <img src="https://api.elle.com.hk/var/site/storage/images/_aliases/img_776_w/9/5/4/9/38459459-1-chi-HK/3.jpg"
                    alt="黑糖燕麥奶">
                <label for="brown-sugar">黑糖燕麥奶 (每杯 $55)</label>
                <input type="number" id="brown-sugar" name="brown-sugar" value="0" min="0">
            </div>


            <div class="total-section">
                <button type="submit">結帳</button>
            </div>
        </form>
    </div>

</body>

</html>