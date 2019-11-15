<?php

include "connect.php";

function generateRewardNumber(){
    return
        rand(0, 9) .
        rand(0, 9) .
        rand(0, 9) .
        rand(0, 9) .
        rand(0, 9) .
        rand(0, 9) .
        rand(0, 9) .
        rand(0, 9);
}

function generateMiniRewardNumber(){
    return
        rand(0, 9) .
        rand(0, 9) .
        rand(0, 9);
}

$year = 2019;
$startMonth = 9;
$endMonth = $startMonth + 1;
$monthGroup = $startMonth."-".$endMonth;
$rewardNumber1 = generateRewardNumber();
$rewardNumber2 = generateRewardNumber();
$rewardNumber3 = generateRewardNumber();
$rewardNumber4 = generateRewardNumber();
$rewardNumber5 = generateRewardNumber();
$rewardMiniNumber1 = generateMiniRewardNumber();
$rewardMiniNumber2 = generateMiniRewardNumber();
$rewardMiniNumber3 = generateMiniRewardNumber();

$sql = "insert into 
rewards(`year`,`month_group`,`super_special`,`special`,`grand1`,`grand2`,`grand3`,`others1`,`others2`,`others3`) 
values('$year','$monthGroup','$rewardNumber1','$rewardNumber2','$rewardNumber3','$rewardNumber4','$rewardNumber5','$rewardMiniNumber1','$rewardMiniNumber2','$rewardMiniNumber3')";
$pdo->exec($sql);


?>