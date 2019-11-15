<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    * {
        font-family: "Microsoft JhengHei", Arial, Helvetica, sans-serif;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    table {
        border-collapse: collapse;
        margin: 30px auto;
        padding: 0;
    }
    
    td {
        padding: 10px;
        border: 1px solid #ccc;
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

    #main {
        width: 800px;
        height: 750px;
        margin: 50px auto;
        text-align: center;
        padding:10px;
    }

    input[type="submit"],
    input[type="reset"] {
        padding: 5px 15px; 
        color: black;
        border: 0 none;
        cursor: pointer;
        border-radius: 5px;
        box-shadow: 1px 1px 3px black;
    }

</style>
<body>
    <form action="rewards_api.php" method="post">
    <div id="main">
    <a href="index.php">回首頁</a>
    <a href="rewards-list.php">各期獎號</a><br><br>
    年份：<input type="text" name="year" id="year" placeholder="請輸入西元年" maxlength="4">
    月份：<input type="text" name="month_group" id="month_group" placeholder="請輸入期別 例:3-4" maxlength="5">

    <table>
        <tr>
            <td>獎別</td>
            <td>中獎號碼</td>
        </tr>
        <tr>
            <td>特別獎</td>
            <td>
                <input type="text" name="super_special" id="super_special" maxlength="8"><br>
                同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元
            </td>
        </tr>
        <tr>
            <td>特獎</td>
            <td>
                <input type="text" name="special" id="special" maxlength="8"><br>
                同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元
            </td>
        </tr>
        <tr>
            <td>頭獎</td>
            <td>
                <input type="text" name="grand1" id="grand1" maxlength="8"><br>
                <input type="text" name="grand2" id="grand2" maxlength="8"><br>
                <input type="text" name="grand3" id="grand3" maxlength="8"><br>
                同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元
            </td>
        </tr>
        <tr>
            <td>二獎</td>
            <td>同期統一發票收執聯末7位數號碼與頭獎中獎號碼末7位相同者各得獎金4萬元</td>
        </tr>
        <tr>
            <td>三獎</td>
            <td>同期統一發票收執聯末6位數號碼與頭獎中獎號碼末6位相同者各得獎金1萬元</td>
        </tr>
        <tr>
            <td>四獎</td>
            <td>同期統一發票收執聯末5位數號碼與頭獎中獎號碼末5位相同者各得獎金4千元</td>
        </tr>
        <tr>
            <td>五獎</td>
            <td>同期統一發票收執聯末4位數號碼與頭獎中獎號碼末4位相同者各得獎金1千元</td>
        </tr>
        <tr>
            <td>六獎</td>
            <td>同期統一發票收執聯末3位數號碼與頭獎中獎號碼末3位相同者各得獎金2百元</td>
        </tr>
        <tr>
            <td>增開六獎</td>
            <td>
                <input type="text" name="others1" id="others1" maxlength="3"><br>
                <input type="text" name="others2" id="others2" maxlength="3"><br>
                <input type="text" name="others3" id="others3" maxlength="3"><br>
                同期統一發票收執聯末3位數號碼與增開六獎號碼相同者各得獎金2百元
            </td>
        </tr>
        <tr>
            <td colspan="2">
            <input type="submit" value="送出">  
            <input type="reset" value="重置"> 
            </td>
        </tr>
    </table> 
    
    </form>
    </div>
</body>
</html>