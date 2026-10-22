<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>船隻靠泊時間計算</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            font-weight: bold;
        }

        .long-berth {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .normal-berth {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>船隻靠泊時間系統</h2>

        <!-- 表單提交回同一個網頁 -->
        <form method="POST" action="">
            <div class="form-group">
                <label for="hours">請輸入靠泊時間（小時）：</label>
                <input type="number" id="hours" name="hours" min="0" step="any" required
                    value="<?php echo isset($_POST['hours']) ? htmlspecialchars($_POST['hours']) : ''; ?>">
            </div>
            <button type="submit">送出查詢</button>
        </form>

        <?php
        // 檢查是否有收到表單提交的資料
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // 取得輸入值並轉換為浮點數（支援小數，如 19.5 小時）
            $hours = floatval($_POST['hours']);

            // 判斷靠泊時間是否滿 20 小時
            if ($hours >= 20) {
                echo '<div class="result long-berth">靠泊狀態：長時間靠泊 (' . $hours . ' 小時)</div>';
            } else {
                echo '<div class="result normal-berth">靠泊狀態：一般靠泊 (' . $hours . ' 小時)</div>';
            }
        }
        ?>
    </div>

</body>

</html>