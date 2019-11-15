<?php

include "connect.php";

$data['year'] = $_POST['year'];
$data['month_group'] = $_POST['month_group'];
$data['super_special'] = $_POST['super_special'];
$data['special'] = $_POST['special'];
$data['grand1'] = $_POST['grand1'];
$data['grand2'] = $_POST['grand2'];
$data['grand3'] = $_POST['grand3'];
$data['others1'] = $_POST['others1'];
$data['others2'] = $_POST['others2'];

if(!empty($_POST['others3'])){
    $data['others3'] = $_POST['others3'];
}

if(insert("rewards",$data)){
    header("location:rewards-list.php");
}

?>