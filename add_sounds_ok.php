<?php 
session_start();
error_reporting(0);
include("Conn/conn.php");
$operator=$_SESSION[admin_name];
  
$sounds_file_name=$_SESSION['sounds_files_name'];
$_SESSION['sounds_files_name'] = 0;
$sounds_given_name=$_POST[Sounds_Name];
$Sounds_Description=$_POST[Sounds_Description];

//$inTime=date("Y-m-d");
$sql=mysql_query("insert into sounds(soundName,soundDescription,file )values('$sounds_given_name','$Sounds_Description','$sounds_file_name')");
echo "<script language='javascript'>alert('Success to Add Sound! If want to add scenario, please click add scenario button!');
window.location='upload_Sounds.php';</script>";

?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

