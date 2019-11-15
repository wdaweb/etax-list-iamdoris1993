<?php

include "connect.php";

$data['year'] = $_POST['year'];
$data['month'] = $_POST['month'];
$data['number'] = $_POST['number'];
$data['cost'] = $_POST['cost'];

if(insert("receipt",$data)){
    header("location:index.php?s=1");
}else{
    header("location:index.php?err=1");
}



?>