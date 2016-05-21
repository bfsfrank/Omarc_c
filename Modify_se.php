<?php session_start();error_reporting(0);?>
<?php 
include ("check_login.php"); 
include("conn/conn.php");
?>
<html>
<head>
<title>Nursing Training System</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
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

<script language="javascript">
    function check_se_description(form){

		if(form.Scenario_Name.value==""){ 
            alert("Please input visit Name!");
			return false;
        }else if(form.Scenario_Description.value==""){ 
            alert("Please input visit Description!");
			return false;
        } else { 
			form.submit();   

		}
}
</script>

<div class="container" align="center" width="75%">
   <h3 align="center">Add visit</h3>
   <br><h5 align="center" valign="top" style="color:#039; text-emphasis:accent"> Current Case Study Name: <?php echo $_SESSION[current_cs_name];?> </h5>
   <div align="center" class="row" >
      <div align="center" width="75%"  style="background-color: #dedef8;">
    <p>
    <table align="center" width="80%" > 
    <form  draggable="true" name= "kk" method="post" enctype="multipart/form-data" action="add_se_ok.php">      
    <tr> 
    <table border="0" width="60%" cellpadding="4">
    <td align="center" width="30%" ><h4>visit Name</td> 
    <td align="center" width=10%>
    <td align="center" width="50%" ><h4>visit Description</td> 
    </tr>
        <tr> 
        <td align="center" width=25%><input type="text" name="Scenario_Name" size=20>
        <td align="center" width=10%>
        <td align="center" width=50%><textarea name="Scenario_Description" cols="80" rows="5" id="Sounds_Description"></textarea>
		</tr>
    </table> 
    <center><input type="submit"  title="In next page, the sounds of this visit will be placed!" value="Add Sounds to this visit"  name="upload" class="btn btn-success" onClick="return check_se_description(kk)"/>
	<input name="Submit2" title="No more visits are needed to add, go back to index page!" type="button" class="btn btn-danger" value="Back to Index" onClick="window.location.href='index.php'"/>
    </form> 
    <tr>
    <table width="400" > 
    <center><a href="upload_Sounds_mu.PHP">If you need more sounds to upload, click here!</a>
    </tr>
    </p> 
	</div>

</div>
