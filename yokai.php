<?php
include 'inc/data.php';
$yokai=$_GET["yokai"];
$title= $yokais[$yokai]["nom"];
include 'inc/header.tpl.php';
include 'inc/yokai.tpl.php';
?>

