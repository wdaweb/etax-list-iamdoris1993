<?php

include "connect.php";       
        
$row = all("rewards");

?>

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
            padding: 10px;
            text-align: center;
        }

        #main {
            width: 1100px;
            height: 600px;
            border-radius: 20px;
            border: 1px solid #ccc;
            margin: 20px auto;
            padding: 20px;
        }

        #index {
            display: flex;
            width: 110px;
            height: 60px;
            text-align: center;
            margin: 0 auto;
            padding: 10px;
        }
    </style>
</head>
<body>

<div id="main">
    <table>
    <tr style="border-bottom: 2px solid #ccc">
        <td>年份</td>
        <td>月份</td>
        <td>特別獎</td>
        <td>特獎</td>
        <td>頭獎一</td>
        <td>頭獎二</td>
        <td>頭獎三</td>
        <td>增開獎一</td>
        <td>增開獎二</td>
        <td>增開獎三</td>
        <td>操作</td>
    </tr>

<?php
    foreach($row as $info){
?>
    <tr>
        <td><?=$info['year'];?></td>
        <td><?=$info['month_group'];?></td>
        <td><?=$info['super_special'];?></td>
        <td><?=$info['special'];?></td>
        <td><?=$info['grand1'];?></td>
        <td><?=$info['grand2'];?></td>
        <td><?=$info['grand3'];?></td>
        <td><?=$info['others1'];?></td>
        <td><?=$info['others2'];?></td>
        <td><?=$info['others3'];?></td>
        <td><a href="del_rewards.php?id=<?=$info['id'];?>">刪除</a></td>
    </tr>
<?php
    }
?>
    </table>
</div>
    <div id="index"><a href="index.php">回首頁</a></div>
</body>
</html>
