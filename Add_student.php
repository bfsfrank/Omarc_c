<?php session_start();error_reporting(0);?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Nursing Training System</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<script language="javascript">
function checkForm(form){
	if(form.name.value==""){
		alert("Input Name please!");form.name.focus();return false;
	}
	if(form.pwd.value==""){
		alert("Input Password please!");form.pwd.focus();return false;
	}
	if(form.pwd1.value==""){
		alert("Confirm password please!");form.pwd1.focus();return false;
	}	
	if(form.pwd.value!=form.pwd1.value){
		alert("Two passwords are not same, please check!");
		form.pwd.value="";form.pwd1.value="";
		form.pwd.focus();return false;
	}
	<?php 
	
	?>
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
        <td height="22" valign="top" class="word_orange">Add a new student &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="84%">&nbsp;      </td>
</tr>
</table>  <form name="form1" method="post" action="Add_student_ok.php">
  <table width="47%"  border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
<?php
include("Conn/conn.php");
?>
  <tr align="center">
    <td width="27%" align="left" style="padding:5px;">User Name:</td>
    <td width="73%" align="left">
      <input name="name" type="text" id="name" value="" size="30">    </td>
    <tr>
    <td align="left" style="padding:5px;">Password:</td>
    <td align="left"><input name="pwd" type="password" id="pwd" size="30">
    </tr>
    <tr>
      <td align="left" style="padding:5px;">Confirmation Password:</td>
      <td align="left"><input name="pwd1" type="password" id="pwd1" size="30"></td>
    </tr>
        <tr>
      <td align="left" style="padding:5px;">Student Full Name:</td>
      <td align="left"><input name="fullname" type="text" id="fullname" size="30"></td>
    </tr>
        <tr>
      <td align="left" style="padding:5px;">Email:</td>
      <td align="left"><input name="email" type="text" id="fullname" size="30"></td>
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
