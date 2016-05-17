<?php 
session_start();
error_reporting(0);
include("Conn/conn.php");
$operator=$_SESSION[admin_name];

$sel_sounds= array();
$sel_sounds=split ('[-]',  $_POST[test]);
for( $i=0;$i<count($sel_sounds);$i++){
	$query=mysql_query("delete from case_study_details where scenario_id='$sel_sounds[$i]'");
	$query=mysql_query("delete from scenarios where scenariosId='$sel_sounds[$i]'");
	if($query){
	}else{
		echo "<script language='javascript'></script>";
	}
}
echo "<script language='javascript'>alert('Scenarios have been removed!');</script>";

echo "<script language='javascript'>window.location='Remove_sc_from_cs_select.php';</script>";


?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

