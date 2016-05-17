<?php 
session_start();
error_reporting(0);
include("Conn/conn.php");
$operator=$_SESSION[admin_name];
$name=$_POST[CS_Name];

$description=$_POST[CS_Description];

//$inTime=date("Y-m-d");
$sql=mysql_query("update case_study set name='$name', description='$description' where id='$_SESSION[current_modifying_cs_id]'");
echo "<script language='javascript'>alert('Success to Modify the Case Study! \\n \\n Return to the Index');
window.location='index.php';</script>";

?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

