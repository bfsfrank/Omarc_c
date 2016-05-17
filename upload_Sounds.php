<?php session_start();error_reporting(0);?>
<html>
<head>
<title>Nursing Training System</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" 

class="tableBorder">
  <tr>
    <td>
	<?php include("navigation.php");?>
	</td>
  </tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  

border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" 

class="tableBorder_gray">
	  <tr>
		<td height="510" align="center" valign="top" style="padding:5px;"><table 

width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td height="22" valign="top" class="word_orange">Add a visit: &gt </td>
		  </tr>
              <td align="center" valign="top">
<?php
 header("Content-Type:text/html; ;");
 if(isset($_POST['set'])) $number=$_POST['number'];
 else $number=5;

 $max_size=5200000;

 if(! is_dir("./temp/"))
 { 
 mkdir("./temp/");
 @chmod("./temp/",777);
 }
 $location="./temp/";

?> 



<form method="post" enctype="multipart/form-data" action="">
    <table width="400" > 
     
    <tr> 
    <center><table border="0" width="100%" cellpadding="4">
	Select Sound File
	<input type="file" name="upload" accept="audio/mpeg"  size=25 required ="required">
    <input type="hidden" name="MAX_FILE_SIZE" size="5200000"> 
    </tr> <tr> 
	<left><input type="submit" value="Upload Sound File" name="upload" class="btn_grey" /></tr>
    </table> 
</form> 

If your sounds are already uploaded, please add scenarios directly!

    <input type="button" class="btn_grey" value="Add Scenarios" onClick="window.location.href='add_se.php'" />
	<input name="Submit2" type="button" class="btn_grey" value="Cancel" onClick="window.location.href='index.php'"/>

			<?php
			 $event="success"; 
			 if(!$_FILES['upload']['name']==""){ 
			 	if($_FILES['upload']['size']<$max_size){ 
					$file_name_by_time = md5(uniqid(microtime())); /* for unique name of upload files */
			 		move_uploaded_file($_FILES['upload']['tmp_name'],$location.$file_name_by_time."__".$_FILES['upload']['name']) or $event="Failure";
				 	$_SESSION['sounds_files_name'] = $location.$file_name_by_time."__".$_FILES['upload']['name'];
					$_SESSION['sounds_original'] = $_FILES['upload']['name'];
					//print_r($_SESSION['sounds_files_name']);
					echo "<script language='javascript'>alert('Success to Upload one Sound!');
							window.location='upload_Sounds_2.php';</script>";

					} else{ 
			 		$event="File too large"; 
			 	} 
			 } 

			?>





<?php include("copyright.php");?>
