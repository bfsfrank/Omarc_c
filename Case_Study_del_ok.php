<?php 
session_start();
error_reporting(0);
include("Conn/conn.php");
$operator=$_SESSION[admin_name];

$sel_sounds= array();
$sel_sounds=split ('[-]',  $_POST[test]);
for( $i=0;$i<count($sel_sounds);$i++){
	$query=mysql_query("delete from case_study_details where cs_id='$sel_sounds[$i]'");
	$query=mysql_query("delete from case_study where id='$sel_sounds[$i]'");
	if($query){
	}else{
		echo "<script language='javascript'></script>";
	}
}
echo "<script language='javascript'>alert('Case Study has been deleted!');</script>";

echo "<script language='javascript'>window.location='Case_Study_del.php';</script>";


?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

