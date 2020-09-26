<?php 
    require "conn.php";

    $id = $_POST["id"];

    $strSQL = "DELETE FROM user WHERE userid ='$id'";
    mysqli_query($link,$strSQL) or die(mysqli_error($link));


?>