<?php
error_reporting(0);
session_start();
if($_SESSION[admin_name]==""){
	echo "<script>alert('Sorry, please login first!');window.location.href='login.php';</script>";
}
?>
