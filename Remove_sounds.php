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
            <td width="753" height="44" style="font-size:24px">&nbsp; Remove Sounds</td>
          </tr>
          <tr>
    <table align="center" width="100%" border="bordered" > 
    <form   name= "kk" method="post" enctype="multipart/form-data" action="Remove_sounds_ok.php" >      
    <tr align="center">
        <td width="5%">Num.</td>
        <td width="20%">Sound Name </td>
        <td width="50%">Sound Description</td>
      </tr>
      <?php
            $sql=mysql_query("select * from sounds order by soundId");
            $info=mysql_fetch_array($sql);
            $i=1;
            do{
            ?>
      <tr>
        <td height="25" align="center"><?php echo $i;?>
  </td>
        <td style="padding:5px;"><label><input name="sel_sc" type="checkbox" value="<?php echo $info[soundId];?>" onClick="">&nbsp;&nbsp;<?php echo $info[soundName];?>
        <td style="padding:5px;">&nbsp;<?php echo $info[soundDescription];?> <br> 
        <audio controls width="50">
   <source src="<?php echo $info[file];?>" type="audio/mpeg">
   Your browser does not support this audio format.
 </audio></td>

      </tr>
      <?php 
         $i=$i+1;
         }while($info=mysql_fetch_array($sql));
        ?>
        </td>
  </tr>

</table> 
<script language="javascript">
    function Check_Submit(form, a){
		
		   var session_scenario = new Array;
		   var session_scenario_num = 0;
           for(var i=0;i<form.sel_sc.length;i++)
           {
               if(form.sel_sc[i].checked==true)
               {  
                	session_scenario[session_scenario_num]= form.sel_sc[i].value;
					session_scenario_num++;
               }
           }
		   
		   string_for_transmit = session_scenario.join("-"); 
		   var qq = string_for_transmit;
		   //alert( qq ); // the selected sounds
		   document.getElementById("test").value = qq;


		if(session_scenario.length ==0){ 
            alert("Please select at least one sound!");
			return false;
//        }else if(session_casestudy.length > 1){ 
//            alert("Please no more 1 casestudy!");
//			window.location='append_se_to_CaseStudy.php';
//			return false;
        } else { 
				if (1 == a){
					document.getElementById("realEl").value = 10;
					var flag =confirm("Do you want to remove these sounds? \n This operation will remove sounds from the Database AND the file system.");
						if (flag == true){ form.submit();} else return false;
				}else{
					document.getElementById("realEl").value = 0;
					var flag =confirm("Do you want to remove these sounds? \n This operation will remove sounds from the Database only, sounds will remain in the file system.");
						if (flag == true){ form.submit();} else return false;
				}
		}
	}
</script>

	<input type="hidden" id="test" name="test"/>
    <input type="hidden" id="realEl" name="realEl"/>
    <center><input type="button" value="Remove Sounds from Database" name="upload" class="btn btn-success" onClick="return Check_Submit(kk,0)"/>
    <input type="button" value="Remove Sounds from Database and File System" name="upload1" class="btn btn-success" onClick="return Check_Submit(kk,1)"/>
	<input name="Submit2" type="button" class="btn btn-danger" value="Return to Index" onClick="window.location.href='index.php'"/>
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