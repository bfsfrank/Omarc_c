<?php 
session_start();
error_reporting(0);
include("Conn/conn.php");
$operator=$_SESSION[admin_name];

$sel_sounds= array();
$sel_sounds=split ('[-]',  $_POST[test]);
if(10==$_POST[realEl]){
	for( $i=0;$i<count($sel_sounds);$i++){
		$sql=mysql_query("select * from sounds where soundId='$sel_sounds[$i]' order by soundId");
		$info=mysql_fetch_array($sql);
		unlink($info[file]);
		$query=mysql_query("delete from sounds where soundId='$sel_sounds[$i]'");
	}
}
else{
	for( $i=0;$i<count($sel_sounds);$i++){
		$query=mysql_query("delete from sounds where soundId='$sel_sounds[$i]'");
		if($query){
		}else{
			echo "<script language='javascript'></script>";
		}
	}
}
echo "<script language='javascript'>alert('Sounds have been removed!');</script>";

echo "<script language='javascript'>window.location='Remove_sounds.php';</script>";


?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

