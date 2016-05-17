<?php
error_reporting(0);
session_start();
$newpwd=$_POST[pwd];
include("conn/conn.php");
$sql=mysql_query("update user set password='$newpwd' where username='$_SESSION[admin_name]'");
?>
<script language="javascript">alert("Success changing password!");window.location.href="pwd_modify.php";</script>		
