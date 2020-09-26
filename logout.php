<?php
session_start();
require 'class/sysconnect.php';
	if(isset($_SESSION['ses_sysobj'])){
				$obj_=unserialize($_SESSION['ses_sysobj']);
				$obj_->setlogin_stat(false,"unknown");
				$obj_->setSessionObj($obj_);
				unset($_SESSION['ses_sysobj']);
	}
session_destroy();

header("Location: http://localhost/myweb/index.php");
?>