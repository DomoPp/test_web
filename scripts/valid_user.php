<?php
session_start();
require '../class/sysconnect.php';
require 'sys_register.php';
$conn_ = $obj_->conn_();
$obj_->valid_user($conn_, $_POST);
$obj_->setSessionObj($obj_);
// header("Location: /index.php");
