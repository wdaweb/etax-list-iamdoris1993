<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            font-family: "Microsoft JhengHei", Arial, Helvetica, sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        body {
            background: #ffd954;
        }

        p {
            text-align: center;
            margin: 100px auto 30px auto;
            font-size: 36px;
            color: #5e5958;
        }

        a {
            text-decoration: none;
            display: inline-block;
            width: 85px;
            height: 35px;
            border: 1px solid #ccc;
            border-radius: 2px;
            color: black;
            padding: 3px;
            text-align: center;
            box-shadow: 2px 2px 2px grey;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            margin: 0 auto;
        }

        td {
            width: 50px;
            height: 50px;
            padding: 3px;
        }

        td:not(:first-child) {
            width: 80px;
        }

        #main {
            width: 750px;
            height: 800px;
            margin: 0 auto;
            position: relative;
        }

        #topbar {
            width: 700px;
            height: 148px;
            padding: 15px;
            margin: 0 25px;
            text-align: center;
            justify-content: space-between;
            position: absolute;
            background-image: url(./images/printer.png);
        }

        #listbg {
            width: 600px;
            height: 610px;
            margin: 83px 60px;
            padding: 20px 0 0 0;
            position: absolute;
            background-image: url(./images/invoice.png);
        }

        #list {
            width: 410px;
            height: 500px;
            position: absolute;
            overflow: auto;
            margin: 50px;
        }

        #index {
            width: 110px;
            height: 60px;
            text-align: center;
            margin: 0 250px;
            padding: 10px;
            position: absolute;
            bottom: 10px;

        }

        #sum {
            width: 200px;
            height: 30px;
            margin: 0 200px ;
            position: absolute;
            text-align: center;
            font-size: 22px;
            background: yellow;
        }

        .color {
            background: #a3a1a1;
            box-shadow: 1px 1px 1px #ccc;
        }

        .indexbtncolor {
            background: #65c1ac;
            border: 3px solid #7b7776;
        }
        
    </style>
</head>
<body>
    <p>統一發票清單</p>
    <div id="main">
        <div id="topbar">
        <a class="color" href="receipt-list.php?period=1">1-2月</a>
        <a class="color" href="receipt-list.php?period=2">3-4月</a>
        <a class="color" href="receipt-list.php?period=3">5-6月</a>
        <a class="color" href="receipt-list.php?period=4">7-8月</a>
        <a class="color" href="receipt-list.php?period=5">9-10月</a>
        <a class="color" href="receipt-list.php?period=6">11-12月</a>
        </div><br>
        <div id="listbg">


                <?php

                include "connect.php";

                if(!empty($_GET['period'])){
                ?>
                <div id="list">
                    <table>
                    <tr>
                        <td>月份</td>
                        <td>發票號碼</td>
                        <td>金額</td>
                        <td>操作</td>
                    </tr>
                    <?php
                    $row = find("receipt",$_GET['period']);
                    $sum = 0;
                    foreach($row as $info){
                    ?>
                    <tr>
                        <td><?=$info['month'];?></td>
                        <td><?=$info['number'];?></td>
                        <td><?=$info['cost'];?></td>
                        <td><a href="del_receipt.php?id=<?=$info['id'];?>&period=<?=$_GET['period'];?>">刪除</a></td>
                    </tr>
                    <?php
                    $sum++;
                    }
                    ?>
                    </table>
                </div>
                
                <div id="sum">發票總數：<?=$sum;?></div>
            <?php    
            }
            ?>
        </div>
        <div id="index"><a class="indexbtncolor" href="index.php">回首頁</a></div>
    </div>
</body>
</html>