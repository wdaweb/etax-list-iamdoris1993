<?php

include "connect.php";

$id = $_GET['id'];

deleted("rewards",$id);

header("location:rewards-list.php");

?>