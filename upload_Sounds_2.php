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
			<td height="22" valign="top" class="word_orange">Add Case Study: &gt </td>
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

<script language="javascript">
    function check_description(form){

		if(form.Sounds_Description.value==""){ 
            alert("Please input Sound Description!");
			return false;
        }else if(form.Sounds_Name.value==""){ 
            alert("Please input Sounds Name!");
			return false;
        } else { 
			form.submit();   

		}
}
</script>


    <form name= "kk" method="post" enctype="multipart/form-data" action="add_sounds_ok.php" > 
    <table width="400" > 
     
    <tr> 
    <td width="50%" ><table border="0" width="100%" cellpadding="4">
    <center><tr> <?php print_r($_SESSION['sounds_original']); ?> has been uploaded. Please input some information for it.</tr>
    <td width="25%" >Sounds Name</td> 
    <td width="25%" >Sounds Description</td> 
    </tr>
    <input type="hidden" name="MAX_FILE_SIZE" size="5200000"> 
        <tr> 
        <td width=25%><input type="text" name="Sounds_Name" size=17>
        <td width=25%><textarea name="Sounds_Description" cols="60" rows="3" id="Sounds_Description"></textarea>
		</tr>
    </table> 
    
    <center><input type="submit" value="Add Sound" name="upload" class="btn_grey" onClick="return check_description(kk)"/>
	<input name="Submit2" type="button" class="btn_grey" value="Cancel" onClick="window.location.href='index.php'"/>
    
    </form> 

    






<?php include("copyright.php");?>
