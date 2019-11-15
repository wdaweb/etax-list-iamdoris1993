<?php

include "connect.php";

$id = $_GET['id'];

deleted("receipt",$id);

header("location:receipt-list.php?period=".$_GET['period']);

?>