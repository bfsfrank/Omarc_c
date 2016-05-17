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

   <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
   <script src="javascripts/jquery-2.1.1.min.js"></script>
   <script src="javascripts/bootstrap.min.js"></script>

<script language="javascript">
    function check_description(form){
		   var session_sounds = new Array;
		   var session_sounds_num = 0;
           for(var i=0;i<form.sel_sounds.length;i++)
           {
               if(form.sel_sounds[i].checked==true)
               {  
                	session_sounds[session_sounds_num]= form.sel_sounds[i].value;
					session_sounds_num++;
               }
           }
		   
		   string_for_transmit = session_sounds.join("-"); 
		   var qq = string_for_transmit;
		   //alert( qq ); // the selected sounds
		   document.getElementById("test").value = qq;


		if(!session_sounds[0]){ 
            alert("Please select sounds!");
			window.location='add_se_sounds_select.php';
			return false;
        }else if(session_sounds.length > 26){ 
            alert("Please no more 26 sounds!");
			window.location='add_se_sounds_select.php';
			return false;
        } else { 
			form.submit();   
		}
}

	var val = 0;
	function calc_sounds(){ 
			val = 0;
           var check_array=document.getElementsByName("sel_sounds");
           for(var i=0;i<check_array.length;i++)
           {
               if(check_array[i].checked==true)
               {         
                  val= val +1;
               }
           }
		 document.getElementById('total').value = val;
}
</script>

<div class="container" align="center" width="75%">
   <h3 align="center">Add Scenario</h3>

   <div align="center" class="row" >

      <div align="center" width="75%"  style="background-color: #dedef8;box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
         <h4>Select Sounds</h4> 
    <p>
    <table align="center" width="70%" border="bordered" > 
    <form   name= "kk" method="post" enctype="multipart/form-data" action="add_se_bind.php" >      
	<label for="name">Sounds List</label>
    You have selected <input id="total" type="text" name="total"> sounds.
    <tr align="center">
        <td width="20">Num.</td>
        <td width="20%">Sound Name</td>
        <td width="70%">Sound Description</td>
      </tr>
      <?php
            $sql=mysql_query("select * from sounds order by soundId");
            $info=mysql_fetch_array($sql);
            $i=1;
            do{
            ?>
      <tr>
        <td height="25" align="center"><?php echo $i;?></td>
        <td style="padding:5px;"><label><input name="sel_sounds" type="checkbox" value="<?php echo $info[soundId];?>" onClick="calc_sounds()"><?php echo $info[soundName];?></label>
        <td style="padding:5px;">&nbsp;<?php echo $info[soundDescription];?></td>
      </tr>
      <?php 
         $i=$i+1;
         }while($info=mysql_fetch_array($sql));
        ?>
        </td>
  </tr>

</table> 
	<input type="hidden" id="test" name="test"/>
    <center><input type="submit" value="Select These Sounds to Scenario" name="upload" class="btn btn-primary" onClick="return check_description(kk)"/>
	<input name="Submit2" type="button" class="btn btn-primary" value="Cancel, Return to Index" onClick="window.location.href='index.php'"/>
    </form> 
    
    
    <tr>
    <table width="400" > 
    <center><a class="btn btn-default" href="upload_Sounds_mu.PHP">If you need more sounds to upload, click here!</a>
    </tr>
    </p> 
	</div>

</div>
