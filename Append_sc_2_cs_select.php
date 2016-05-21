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
            <td width="753" height="44" background="Images/Append_Scenarios_to_Case Study.jpg">&nbsp; </td>
          </tr>
          <tr>
    <table align="center" width="100%" border="bordered" > 
    <form   name= "kk" method="post" enctype="multipart/form-data" action="append_sc_2_cs_get_cs.php" >      
    <tr align="center">
        <td width="10">Num.</td>
        <td width="20%">Case Study Name </td>
        <td width="70%">Case Study Description</td>
        <?php if (0==$_SESSION[gid]){ ?>
        <td width="3%">UserId</td>
        <?php }?>      </tr>
      <?php
            if (0==$_SESSION[gid])
					$sql=mysql_query("select * from case_study order by id");
			else $sql=mysql_query("select * from case_study where owner='$_SESSION[uid]' order by id");
            $info=mysql_fetch_array($sql);
            $i=1;
            do{
            ?>
      </tr>

      <tr>
        <td height="25" align="center"><?php echo $i;?></td>
        <td style="padding:5px;"><label><a name="aa" title="Click to select this Case Study" style="cursor:pointer" onClick="return Check_Submit(kk,<?php echo $info[id];?>)" ><?php echo $info[name];?></label>
        <td style="padding:5px;">&nbsp;<?php echo $info[description];?></td>
        <?php if (0==$_SESSION[gid]){ ?>
        <td align="center" style="padding:5px; ">&nbsp;<?php echo $info[owner];?></td>
        <?php }?>
      </tr>
      <?php 
         $i=$i+1;
         }while($info=mysql_fetch_array($sql));
        ?>
        </td>
  </tr>

</table> 
<script language="javascript">
    function Check_Submit(form,num){
		document.getElementById("test").value = num;
		form.submit();
	}
</script>

	<input type="hidden" id="test" name="test"/>
    <center><input name="Submit2" type="button" class="btn btn-danger" value="Cancel, Return to Index" onClick="window.location.href='index.php'"/>
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