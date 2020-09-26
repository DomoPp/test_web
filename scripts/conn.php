<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "webdb";

$link = mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($link));
mysqli_query($link,"SET NAMES utf8");

// var_dump($link);