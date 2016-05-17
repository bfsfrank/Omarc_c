<?php 
session_start();
error_reporting(0);
include("Conn/conn.php");
$operator=$_SESSION[admin_name];
$name=$_POST[CS_Name];
$_SESSION[current_cs_name]=$name;
$description=$_POST[CS_Description];
$_SESSION[current_cs_Description]=$description;
//$inTime=date("Y-m-d");
if (0==$_SESSION[gid])
$sql=mysql_query("insert into case_study(name,description,owner)values('$name','$description','$_SESSION[uid]')");
else $sql=mysql_query("insert into case_study(name,description,owner)values('$name','$description','$_SESSION[uid]')");
echo "<script language='javascript'>alert('Success to Add a visit! \\n \\n In next stages, sounds may be uploaded, and scenarios are added to this Visit!');
window.location='upload_Sounds_mu.php';</script>";

?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

