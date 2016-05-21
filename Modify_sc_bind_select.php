<?php 
include ("check_login.php"); 
include("conn/conn.php");
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<head>
<title>Nursing Training System</title>
<link href="CSS/style.css" rel="stylesheet">
<link href="CSS/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css" /> 
<script src="javascripts/bootstrap.min.js"></script>
<script src="javascripts/jquery-2.1.1.min.js"></script> 
</head>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td><?php include("navigation.php"); ?></td>
  </tr>
	<td bgcolor="#FFFFFF">
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="100%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td align="center" valign="top" style="padding:5px;"><table width="738"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="148" valign="top"><table width="738"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="753" height="44" background="Images/Modify_sc_sound_bind.jpg">&nbsp; </td>
          </tr>
          <tr>
    <table align="center" width="100%" border="bordered" > 
    <form   name= "kk" method="post" enctype="multipart/form-data" action="Modify_sc_bind_change.php" >      
    <tr align="center">
    <?php
	if(0==$_SESSION[gid]){ // for super_user
	?>
        <td width="10">Num.</td>
        <td width="20%">Case Study Name </td>
        <td width="20%">Visit Name </td>
        <td width="70%">Visit Description</td>
        <td width="10">User ID</td>
        <td width="10">User Name</td>
      </tr>
      <?php
            $sql=mysql_query("select * from scenarios as a INNER JOIN case_study_details as b on a.scenariosId=b.scenario_id INNER JOIN case_study as c on c.id=b.cs_id INNER JOIN user as d on c.owner = d.userId");
            $info=mysql_fetch_array($sql);
            $i=1;
            do{
            ?>
      <tr>
        <td height="25" align="center"><?php echo $i;?></td>
        <td height="25" align="center"><?php echo $info[name];?></td>
        <td style="padding:5px;"align="center"><label><a name="aa" title="Click to select this Scenario" style="cursor:pointer" onClick="return Check_Submit(kk,<?php echo $info[scenariosId];?>)" ><?php echo $info[scenarios_name];?></label>
        <td style="padding:5px;">&nbsp;<?php echo $info[scenarios_description];?></td>
        <td height="25" align="center"><?php echo $info[owner];?></td>
        <td height="25" align="center"><?php echo $info[username];?></td>
      </tr>
      <?php 
         $i=$i+1;
         }while($info=mysql_fetch_array($sql));
        ?>
        </td>
  </tr>

    <?php
	} else {// for regular user
	?>    
        <td width="10">Num.</td>
        <td width="20%">Case Study Name </td>
        <td width="20%">Visit Name </td>
        <td width="70%">Visit Description</td>
      </tr>
      <?php
            $sql=mysql_query("select * from scenarios as a INNER JOIN case_study_details as b on a.scenariosId=b.scenario_id INNER JOIN case_study as c on c.id=b.cs_id where c.owner='$_SESSION[uid]'");
            $info=mysql_fetch_array($sql);
            $i=1;
            do{
            ?>
      <tr>
        <td height="25" align="center"><?php echo $i;?></td>
        <td height="25" align="center"><?php echo $info[name];?></td>
        <td style="padding:5px;" align="center"><label><a name="aa" title="Click to select this Visit" style="cursor:pointer" onClick="return Check_Submit(kk,<?php echo $info[scenariosId];?>)" ><?php echo $info[scenarios_name];?></label>
        <td style="padding:5px;">&nbsp;<?php echo $info[scenarios_description];?></td>
      </tr>
      <?php 
         $i=$i+1;
         }while($info=mysql_fetch_array($sql));
        ?>
        </td>
  </tr>
<?php }?>
</table> 
<script language="javascript">
    function Check_Submit(form,num){
		document.getElementById("test").value = num;
		form.submit();
	}
</script>

	<input type="hidden" id="test" name="test"/>
    <center><input name="Submit2" type="button" class="btn btn-danger" value="Return to Index" onClick="window.location.href='index.php'"/>
    </form> 
    </table>
      <p>&nbsp;</p></td>
  </tr>
</table></td>
  </tr>
</table>

<?php include("copyright.php"); ?></td>
  </tr>
</table>
</html>