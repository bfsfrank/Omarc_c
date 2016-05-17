<?php 
session_start();
error_reporting(0);
include("Conn/conn.php");
$operator=$_SESSION[admin_name];
$name=$_POST[CS_Name];
$description=$_POST[CS_Description];

//$inTime=date("Y-m-d");
$sql=mysql_query("update scenarios set scenarios_name='$name', scenarios_description='$description' where scenariosId='$_SESSION[current_modifying_sc_id]'");
$sql=mysql_query("update case_study_details set title='$name', description='$description' where scenario_id='$_SESSION[current_modifying_sc_id]'");

echo "<script language='javascript'>alert('Success to Modify the Scenario! \\n \\n Return to the Index');
window.location='index.php';</script>";

?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

