<?php session_start();error_reporting(0);?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Nursing Training System</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<script language="javascript">
function checkForm(form){
	if(form.oldpwd.value==""){
		alert("Current Password please!");form.oldpwd.focus();return false;
	}
	if(form.oldpwd.value!=form.holdpwd.value){
		alert("Invalid Current Password, input the correct one please!");
		form.oldpwd.value="";
		form.oldpwd.focus();return false;
	}
	if(form.pwd.value==""){
		alert("Input new password!");form.pwd.focus();return false;
	}	
	if(form.pwd1.value==""){
		alert("Confirm New password please!");form.pwd1.focus();return false;
	}	
	if(form.pwd.value!=form.pwd1.value){
		alert("Two new passwords are not same, please check!");
		form.pwd.value="";form.pwd1.value="";
		form.pwd.focus();return false;
	}
}
</script>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
	<?php include("navigation.php");?>
	</td>
	</tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">Change Password &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="84%">&nbsp;      </td>
</tr>
</table>  <form name="form1" method="post" action="pwd_ok.php">
  <table width="47%"  border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
<?php
include("Conn/conn.php");
$query3=mysql_query("select password from user where username='$_SESSION[admin_name]'");
$info3=mysql_fetch_array($query3);
?>
  <tr align="center">
    <td width="27%" align="left" style="padding:5px;">User Name:</td>
    <td width="73%" align="left">
      <input name="name" type="text" id="name" value="<?php echo $_SESSION[admin_name];?>" readonly size="30">    </td>
    <tr>
    <td align="left" style="padding:5px;">Current Password:</td>
    <td align="left"><input name="oldpwd" type="password" id="oldpwd" size="30">
      <input name="holdpwd" type="hidden" id="holdpwd" value="<?php echo $info3[password];?>"></td>
    </tr>
    <tr>
      <td align="left" style="padding:5px;">New Password:</td>
      <td align="left"><input name="pwd" type="password" id="pwd" size="30"></td>
    </tr>
    <tr>
      <td align="left" style="padding:5px;">Confirmation New Password:</td>
      <td align="left"><input name="pwd1" type="password" id="pwd1" size="30"></td>
    </tr>
    <tr>
      <td height="65" align="left" style="padding:5px;">&nbsp;</td>
      <td><input name="Submit" type="submit" class="btn_grey" value=" Save " onClick="return checkForm(form1)">
        &nbsp;
        <input name="Submit2" type="reset" class="btn_grey" value=" Cancel "></td>
    </tr>
</table>
</form></td>
      </tr>
    </table>
</td>
  </tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
