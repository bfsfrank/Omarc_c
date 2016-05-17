<?php 
session_start();
error_reporting(0);
include("Conn/conn.php");
$operator=$_SESSION[admin_name];
$_SESSION[current_cs_id]=$_POST[test];
$sql=mysql_query("select * from case_study where id = '$_SESSION[current_cs_id]'");
$info=mysql_fetch_array($sql);
$_SESSION[current_cs_name]=$info[name];
$_SESSION[current_cs_Description]=$info[description];
//$inTime=date("Y-m-d");
echo "<script language='javascript'>window.location='add_se.php';</script>";

?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

