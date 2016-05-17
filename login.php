<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<head>
<title>Nursing Training System</title>
<link href="CSS/style.css" rel="stylesheet">
<script language="javascript">
function check(form){
	if (form.name.value==""){
		alert("Please input User Name!");form.name.focus();return false;
	}
	if (form.pwd.value==""){
		alert("Please input Password!");form.pwd.focus();return false;
	}	
}
</script>
</head>
<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="chklogin.php">
  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="30%" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="32%" background="Images/bg.jpg"><table width="600" height="300"  border="0" align="center" cellpadding="0" cellspacing="0" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
        <tr>
          <td width="50%" height="100" align="center">&nbsp;</td>
          <td width="50%">&nbsp;
          </td>
        </tr>
        <tr>
          <td height="90" rowspan="3" align="center">&nbsp;</td>
          <td height="30" valign="top">User Name:
            <input name="name" type="text" class="logininput" id="name3" size="25"></td>
        </tr>
        <tr>
          <td height="30" valign="top">Password:
            <input name="pwd" type="password" class="logininput" id="pwd2" size="25"></td>
        </tr>
        <tr>
          <td height="30" align="center" valign="top"><input name="submit" type="submit" class="btn_grey" value="Login" onClick="return check(form1)">
&nbsp;
<input name="submit3" type="reset" class="btn_grey" value="Reset">
&nbsp;
<input name="submit2" type="button" class="btn_grey" value="Close" onClick="window.close();"></td>
        </tr>
        <tr>
          <td height="53" colspan="2" align="center"></td>
        </tr>
      </table></td>
      <td width="30%" bgcolor="#FFFFFF"><br></td>
    </tr>
  </table>
  <div align="center"><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CopyRight 2015 www.mun.ca  </div>
</form>
</body>
</html>
