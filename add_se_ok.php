<?php 
session_start();
error_reporting(0);
include("Conn/conn.php");
$operator=$_SESSION[admin_name];
  

$Scenario_Name=$_POST[Scenario_Name];
$_SESSION[Scenario_Name]=$Scenario_Name;
$Scenario_Description=$_POST[Scenario_Description];
$_SESSION[Scenario_Des]=$Scenario_Description; // we add scenario after pair sounds

//$inTime=date("Y-m-d");

echo "<script>   alert('Please proceed to add sounds to scenario');
window.location='add_se_bind.php';</script>";

?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

