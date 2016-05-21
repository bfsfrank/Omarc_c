<?php session_start();error_reporting(0);
include("Conn/conn.php");
$operator=$_SESSION[admin_name];

$sel_sounds= array();
$sel_sounds=split ('[-]',  $_POST[test]);
$_SESSION[current_modifying_sc_id]=$sel_sounds[0];//save the cs id for Modify_cs_ok.php useage
$sql=mysql_query("select * from scenarios where scenariosId = '$_POST[test]'");
$info=mysql_fetch_array($sql);


?>
<html>
<head>
<meta http-equiv="pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css" /> 
<script src="javascripts/bootstrap.min.js"></script>
<script src="javascripts/jquery-2.1.1.min.js"></script>
<title>Nursing Training System</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<script src="ckeditor/ckeditor.js"></script>
<script language="javascript">
function check(form){
	
	if(form.CS_Name.value==""){
		alert("Please input visit Name!");form.CS_Name.focus();return false;
	}
	
	//CKEDITOR.replace('CS_Description'); 
	//var editor = CKEDITOR.replace("CS_Description");
	//alert(CKEDITOR.instances.CS_Description.getData());
	//if(form.CS_Description.isempty()){
		//alert("Please input Description !");form.CS_Description.focus();return false;
	//}

	var flag =confirm("Do you want to save the changes?");
	if (flag == true){
	form.submit();
	}else{
		return false;
	}
}
</script>
<form name="form1" method="post" action="Modify_sc_ok.php">
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
		<td valign="top" bgcolor="#FFFFFF"><table width="99%" height="400"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
	  <tr>
		<td height="400" align="center" valign="top" style="padding:5px;"><table width="98%" height="400"  border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td height="22" valign="top" class="word_green">Modify visit: &gt </td>
		  </tr>
		  <tr>
			<td align="center" valign="top"><table width="100%" height="400"  border="0" cellpadding="0" cellspacing="0">
	  <tr>
    <td align="center" valign="top">

	<table width="600" height="350"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td width="60" align="center">visit Name:</td>
        <td width="200" height="39">
          <input name="CS_Name" type="text" id="CS_Name" value="<?php echo $info[scenarios_name]; ?>"></td>

      </tr>
<tr>
          <td width="60" height="39">       	Current Descripition:
        <td width="200" height="60"><?php echo $info[scenarios_description]; ?>
        </td>
        </tr>
      <tr>
        <td align="center">visit <br> Description:</td>
         <td><textarea name="CS_Description" cols="60" rows="10" class="ckeditor" id="CS_Description" ><?php echo $info[scenarios_description]; ?></textarea>
      </tr>
      <tr>
        <td  align="center">&nbsp;</td>
        <td><input name="Submit" type="submit" title="" class="btn btn-success" value="Save" onClick="return check(form1)">&nbsp;
			<input name="Submit2" title="Back" type="button" class="btn btn-danger" value="Back" onClick="history.back();"></td>
      </tr>
    </table>
	</form>
    <tr align="center" valign="middle" bgcolor="#FFFFFF" >
    <td height="22" class="word_orange" hidden="1" >
    If you just need to upload more sounds, please upload sounds directly! &nbsp;
      <input type="button" class="btn btn-primary" value="Add New Sounds" onClick="window.location.href='upload_Sounds_mu.php'" />
    </tr>
    <tr align="center" height="22" class="word_orange"  hidden="1">
            <td height="22" class="word_orange" >If your sounds are already uploaded, please add visits directly!
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="button"  align="right" class="btn btn-primary" value="Add visits" onClick="window.location.href='add_se.php'" />
	</tr>
	</td>
  </tr>
</table></td>
      </tr>
    </table></td>
  </tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
