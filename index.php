<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>統一發票紀錄與兌獎系統</title>
    <style>
        * {
            font-family: "Microsoft JhengHei", Arial, Helvetica, sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            list-style-type: none;
            font-size: 28px;
        }

        body {
            background: #ffd954;
        }

        p{
            margin: 30px auto;
            color: #2b90d9;
            font-size: 40px;
        }

        a {
            display: inline-block;
            width: 130px;
            height: 60px;
            border-radius: 15px;
            background: #f7efb8;
            text-decoration: none;
            color: gray;
            padding: 10px;
            box-shadow: 1px 1px 2px black;
            border: 4px solid #4ea1d3;
            font-size: 25px;
        }

        #main {
            width: 1200px;
            height: 800px;
            border-radius: 20px;
            margin:15px auto 0 auto;
            box-shadow: 3px 3px 10px #7C7877;
            position: relative;
        }

        #left {
            width: 60%;
            height: 100%;
            background: #2b90d9;
            border-radius: 20px 0 0 20px;
            position: absolute;
            left: 0;
            padding: 50px;
            text-align: center;
        }

        #right {
            width: 40%;
            height: 100%;
            background: white;
            border-radius: 0 20px 20px 0;
            position: absolute;
            right: 0;
            padding: 130px 60px;
            color: #7C7877;

        }

        #cash {
            width: 450px;
            height: 450px;
            margin: 70px auto;
        }
        
        input[type="text"] {
            padding: 5px 15px;
            margin: 10px;
            background: rgba(0, 0, 0, 0.0375);
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 5px 15px; 
            background: #2b90d9; 
            color: white;
            border: 0 none;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 1px 1px 3px black;
        }

        ::placeholder {
            color: #ccc;
            font-size: 24px;
        }
        
    </style>
</head>
<body>
<?php

?>
    
    <div id="main">
        <div id="left">
            <img id="cash" src="./images/cashregister.png"><br>
            <a href="receipt-list.php">發票紀錄</a>
            <a href="rewards.php">輸入奬號</a>
            <a href="rewards-list.php">各期奬號</a>
            <a href="check-rewards.php">自動兌獎</a>
        </div>

        <form action="index_api.php" method="post">


        <div id="right">
            <p>統一發票紀錄器</p>
		    年份： <input type="text" name="year" id="year" placeholder="請輸入西元年" size=12 maxlength="4"><br>
            月份： <input type="text" name="month" id="month" placeholder="請輸入月份" size=12 maxlength="2"><br>
		    號碼： <input type="text" name="number" id="number" placeholder="AB12345678" size=12 maxlength="10"><br>
		    金額： <input type="text" name="cost" id="cost" placeholder="金額" size=12><br><br>
            <input type="submit" value="送出">
            <input type="reset" value="重填"><br><br>
            <?php
            if(!empty($_GET['s'])){
                echo "輸入完畢，好棒！";
            }
            if(!empty($_GET['err'])){
                echo "輸入有誤，請重新輸入！";
            }
            ?>
        </div>
        
        </form>

    </div>
</body>
</html>