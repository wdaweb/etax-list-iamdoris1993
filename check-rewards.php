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
            margin: auto;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #ccc;
            padding: 10px;
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

    <p>中獎發票結果</p>
    <div id="main">
    <div id="topbar">
        <a class="color" href="check-rewards.php?period=1">1-2月</a>
        <a class="color" href="check-rewards.php?period=2">3-4月</a>
        <a class="color" href="check-rewards.php?period=3">5-6月</a>
        <a class="color" href="check-rewards.php?period=4">7-8月</a>
        <a class="color" href="check-rewards.php?period=5">9-10月</a>
        <a class="color" href="check-rewards.php?period=6">11-12月</a>
    </div><br>
    
    <div id="listbg">
        <div id="list">
        <table>
    <?php

    include "connect.php";

    if(!empty($_GET['period'])){

        //lookup the rewards in this month group
        $row1 = findGP("rewards",$_GET['period']);
        $superspecialnum = $row1['super_special'];
        $specialnum = $row1['special'];
        $grandnum1 = $row1['grand1'];
        $grandnum2 = $row1['grand2'];
        $grandnum3 = $row1['grand3'];
        $othersnum1 = $row1['others1'];
        $othersnum2 = $row1['others2'];
        $othersnum3 = $row1['others3'];

        //lookup all the receipt in this month group
        $row2 = find("receipt",$_GET['period']);

        $total = 0;
        foreach($row2 as $reward){
            $num = substr($reward['number'],2);

            if($num == $superspecialnum){
                echo "<tr><td>恭喜中獎金1,000萬元</td>";
                echo "<td>".$num."</td><tr>";
                $total = $total + 10000000;
            }else if($num == $specialnum){
                echo "<tr><td>恭喜中獎金200萬元</td>";
                echo "<td>".$num."</td><tr>";
                $total = $total + 2000000;
            }

            $total = $total + checked($num, $grandnum1);
            $total = $total + checked($num, $grandnum2);
            $total = $total + checked($num, $grandnum3);
            $total = $total + checkOthers($num, $othersnum1);
            $total = $total + checkOthers($num, $othersnum2);
            $total = $total + checkOthers($num, $othersnum3);
        }
    ?>
        <tr>
            <td>中獎金額</td>
            <td><?=$total;?></td>
        </tr>
    <?php
    }
    ?>
        </table>
        </div>
    </div>
        <div id="index"><a class="indexbtncolor" href="index.php">回首頁</a></div>
    </div>
    

</body>
</html>