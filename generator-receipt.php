<?php

include "connect.php";

function randMonth(){
    return rand(1, 12);
}

function randomLetter($except){

    do{
        $letter = chr(rand(65, 90));
    }while($letter == $except);

    return $letter;
}

function randCost(){
    return rand(1, 20000);
}

function generateReceiptNumber(){

    $firstLetter = randomLetter("");
    $secondLetter = randomLetter($firstLetter);

    return
        $firstLetter .
        $secondLetter . 
        rand(0, 9) .
        rand(0, 9) .
        rand(0, 9) .
        rand(0, 9) .
        rand(0, 9) .
        rand(0, 9) .
        rand(0, 9) .
        rand(0, 9);
}

$quantity = 1000;
for($i=1; $i<$quantity; $i++){

    $year = 2019;
    $month = randMonth();
    $number = generateReceiptNumber();
    $cost = randCost();

    $sql = "insert into receipt(`year`,`month`,`number`,`cost`) values('$year','$month','$number','$cost')";
    $pdo->exec($sql);
}

if($pdo->exec($sql)){
    echo "新增" . $quantity . "筆資料成功";
}

?>