<?php 
include ("check_login.php"); 
include("conn/conn.php");
$_SESSION[current_cs_name]=null;
$_SESSION[current_cs_Description]=null;
$_SESSION[current_sc_id]=null;
$_SESSION[current_cs_id]=null;
$_SESSION[Scenario_Name]=null;
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<head>
<link href="CSS/style.css" rel="stylesheet">
<link href="CSS/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css" /> 
<script src="javascripts/bootstrap.min.js"></script>
<script src="javascripts/jquery-2.1.1.min.js"></script> 
<title>Nursing Training System</title>
<link href="CSS/style.css" rel="stylesheet">
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
            <td width="753" height="44" background="Images/main_booksort.jpg">&nbsp;</td>
          </tr>
          <tr>
            <td height="72" valign="top" background="Images/main_booksort_1.gif"><table width="740"  border="1" cellpadding="0" cellspacing="0" bordercolor="#0" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
              <tr align="center">
				<td width="2%">Num. </td>
                <td width="10%">Visit Name </td>
                <td width="22%">Description</td>
                <?php if (0==$_SESSION[gid]){ ?>
                <td width="3%">UserId</td>
                <td width="3%">User Name</td>
                <?php }?>
                <?php ?>
              </tr>
              <?php
			  		if (0==$_SESSION[gid])
					$sql=mysql_query("select * from case_study as c INNER JOIN user as d on c.owner = d.userId order by id");
					else $sql=mysql_query("select * from case_study where owner='$_SESSION[uid]' order by id");
					$info=mysql_fetch_array($sql);
					$i=1;
					do{
					?>
              <tr>
                <td height="25" align="center"><?php echo $i;?></td>
                <td style="padding:5px;">&nbsp;<?php echo $info[name];?></td>
                <td style="padding:5px;">&nbsp;<?php echo $info[description];?></td>
                <?php if (0==$_SESSION[gid]){ ?>
                <td align="center" style="padding:5px; ">&nbsp;<?php echo $info[owner];?></td>
                <td align="center" style="padding:5px; ">&nbsp;<?php echo $info[username];?></td>
                <?php }?>
              </tr>
              <?php 
				 $i=$i+1;
				 }while($info=mysql_fetch_array($sql));
				?>
            </table></td>
          </tr>
          <tr>
            <td height="19" background="Images/main_booksort_2.gif">&nbsp;</td>
          </tr>
        </table>
          </td>
      </tr>
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