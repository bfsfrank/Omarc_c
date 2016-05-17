<?php session_start();error_reporting(0);?>
<?php 
include ("check_login.php"); 
include("conn/conn.php");
?>
<html>
<head>
</head> 
<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
	<?php include("navigation.php");?>
	</td>
  </tr> 
	<td>
    <link href="CSS/style.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css" /> 
<script src="javascripts/bootstrap.min.js"></script>
<script src="javascripts/jquery-2.1.1.min.js"></script> 
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css" /> 
<script src="javascripts/bootstrap.min.js"></script>
<script src="javascripts/jquery-2.1.1.min.js"></script> 
<script type="text/javascript">
function addMore() {
var html = '<div class="input-group" style="margin-bottom:10px;"><input type="file" accept="audio/mpeg" required ="required" style="width:200px;" class="form-control btn btn-primary pull-left" name="file[]" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" required ="required" style="width:150px;"  placeholder="Sound Name" name="Sounds_Name[]"> &nbsp;&nbsp;&nbsp; <input type="text" required ="required" style="width:160px;"  placeholder="Sound Description"name="Sounds_Description[]"> &nbsp;&nbsp; <a href="javascript:void(0);" onclick="delfile(this);" style="border-top-left-radius: 0px;border-bottom-left-radius: 0px;" class="btn btn-danger pull-right"> Remove</a></div>'; 
$("#uploaddiv").append(html); 
} 
function delfile(id) { 
$(id).parent().remove(); 
} 
$(document).ready(function(){
$("#upload").click(function(e) {
	e.preventDefault();
	var formData = new FormData($(this).parents('form')[0]);
	$.ajax({ 
		url: 'upload_multi_sounds_ok.php',
		type: 'POST',
		success: function (data) {
			alert(""+data);
		},
		 data: formData, 
		 cache: false,
		 contentType: false,
		 processData: false 
	});
	return false; 
}) 
}); </script> 
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td valign="top" bgcolor="#FFFFFF"><table width="99%" height="400"  border="0" align="center" bgcolor="#FFFFFF" class="tableBorder_gray">
	  <tr>
		<td height="400" align="center" valign="top" style="padding:5px;"><table width="98%" height="400"  border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td height="22" valign="top" class="word_black">Add New Sounds: &gt </td>
		  </tr>
              <td align="center" valign="top" width="95%">
                <label for="upfile">Upload Sounds</label>
  <form enctype="multipart/form-datan">
  <div> 
 
  <table align="left" width="90%" border="0">
    <tr align="top">
    <td width="150" align="center">Sound File</td>
    <td width="110" align="center">Sound Name</td>
    <td width="160" align="center">Sound Description</td>
  </tr>
  <br>
  </table>

  <table align="center" width="97%" border="0">



  <div id="uploaddiv"> 
  <div class="input-group" style="margin-bottom:10px;"> 
    <br>
  <input type="file" accept="audio/mpeg" required ="required" style="width:200px;" class="form-control btn btn-primary pull-left" name="file[]" >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" required ="required" style="width:150px;"  placeholder="Sound Name" name="Sounds_Name[]"> 
  &nbsp;&nbsp;&nbsp;
  <input type="text" required ="required" style="width:160px;"  placeholder="Sound Description"name="Sounds_Description[]">
  &nbsp;&nbsp;
   <a href="javascript:void(0);" onClick="delfile(this);" style="border-top-left-radius: 0px;border-bottom-left-radius: 0px;" class= "btn btn-danger pull-right">Remove</a> </div> </div> 
         <td height="22" style="color:#F00"><table width="15%">
                <tr>
                <br>
                - Please make sure every sound has Sound Name and Sound Descripiton!<br>
                - No blank line is allowed in your sound list!<br>
                - No sounds lager than 2MB can be uploaded!<br>
                </tr>
                </table>

   <tr>
   <button type="button" name="addfile" class="btn btn-sm btn-success" onClick="addMore();" id="addfile" >Add more sounds</button> 
   <input type="button" value="Upload Sounds" id="upload" class="btn btn-sm btn-warning"/> 
   </div> 
   </form> </table> 
</td>
</table>  
    <tr align="center" height="22" class="word_orange">
            <td height="22" class="word_orange" >If your sounds are already uploaded, please add scenarios directly!
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="button"  align="right" class="btn btn-primary" value="Add Scenarios" onClick="window.location.href='add_se.php'" />
		<input name="Submit2" type="button" class="btn btn-danger" value="Back to Index" onClick="window.location.href='index.php'"/> 
<?php include("copyright.php");?>