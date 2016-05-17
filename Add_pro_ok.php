<?php
error_reporting(0);
session_start();
$newpwd=$_POST[pwd];
$newuser=$_POST[name];
include("conn/conn.php");
$query3=mysql_query("select * from user where username = '$newuser'");
$info3=mysql_fetch_array($query3);
if(Null==$info3){
$sql=mysql_query("insert into user(username,password,fullname,email,roles,groupId)values('$newuser','$_POST[pwd]','$_POST[fullname]','$_POST[email]','Administrator','1')");
echo "<script language='javascript'>alert('Success create new pro!');window.location.href='index.php';</script>;";
} else {
echo "<script language='javascript'>alert('User name is existing!');window.location.href='Add_pro.php';</script>;";
}
?>
		
