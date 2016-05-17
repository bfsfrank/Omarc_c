<?php
session_start();
include("conn/conn.php");
?>
<link href="stylesheets/bootstrap.min.css" rel="stylesheet">
<script src="javascripts/jquery-2.1.1.min.js"></script>
<script src="javascripts/bootstrap.min.js"></script>
<script src="javascripts/ion.sound.js"></script>
<meta http-equiv="Content-Type" content="text/html; ">
<div class="dropdown">
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" border="1">
  <tr>
    <td height="115" align="right" valign="bottom" background="Images/banner.jpg" bgcolor="#FD9C11"><table border="1" width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="26" align="right">Current User:<?php echo $_SESSION[admin_name];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="33" align="left" bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
<style>
a:hover {
  color: black ;
  background-color: #def ;
}
</style>
      <nav class="navbar navbar-default" role="navigation" width="100%" align="middle">
   <div class="dropdown">
      <ul class="nav navbar-nav" >
         <li ><a href="index.php">Index </a></li>
		<?php 
		 if (0!=$_SESSION[gid]) {
		 ?>
         <li ><a href="Case_Study_add.php">Add Case study </a></li>
         <?php
		 }
		 ?>
         <li ><a href="Case_Study_del.php">Delete Case study </a></li>
         <li  class="dropdown"><a href="#"class="dropdown-toggle" data-toggle="dropdown">Modify Case study 
  <span class="caret"></span>
            <ul class="dropdown-menu">
               <li><a href="Modify_cs_des_select.php">Modify Case Study Description</a></li>
               <?php 
		 if (1==$_SESSION[gid]) {
		 ?>
               <li><a href="Append_sc_2_cs_select.php">Append Scenarios to Case Study</a></li>
               <?php
		 }
		 ?>
               <li><a href="Remove_sc_from_cs_select.php">Remove Scenarios from Case Study</a></li>
               <li><a href="Modify_sc_select.php">Modify Scenario Name/Description</a></li>
               <li><a href="Modify_sc_bind_select.php">Modify Sounds Positions in Scenario</a></li>
            </ul>
         </li>
         <li ><a href="upload_Sounds_mu_only.php">Upload Sounds </a></li>
         <?php 
		 if (0==$_SESSION[gid]) {
		 ?>
         	<li ><a href="Remove_sounds.php">Remove Sounds </a></li>
         	<!-- <li ><a href="Remove_scenarios.php">Remove Scenarios </a></li> -->
            <li ><a href="Add_pro.php">Add a New Professor </a></li>
         <?php
		 } else if (1==$_SESSION[gid]){
		 ?>
         	<li ><a href="Add_student.php">Add a New Student </a></li>
         <?php
		 }
		 ?>
         <li ><a href="pwd_Modify.php">Change Password </a></li>
         <li ><a  style="cursor:pointer" onclick="logoff()">Logout </a></li>
<script language="javascript">
function logoff(){
	var path =window.location.href;
	if ((-1!==path.indexOf("sc_bind_change"))||(-1!==path.indexOf("se_bind")) ){
	  var flag = confirm("Are you sure you want to logout? \n Any unsaved work will be lost.");
	  if ( true ==flag )window.location.href='safequit.php';
	  else {}
	} else{
		window.location.href='safequit.php';
	}
}
</script>
      </ul>
   </div>
</nav>  
      </tr>
    </table></td>
  </tr>
</table>
