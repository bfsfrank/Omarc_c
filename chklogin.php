<?php
session_start();
error_reporting(0);
$A_name=$_POST["name"];          //get user name
$A_pwd=$_POST["pwd"];            //get pwd


class chkinput{
   var $name; 
   var $pwd;

   function chkinput($x,$y){
     $this->name=$x;
     $this->pwd=$y;
    }

   function checkinput(){
     include("conn/conn.php");   		  //connection    

     $sql=mysql_query("select * from user where username='".$this->name."' and password='".$this->pwd."'",$conn);
	 
     $info=mysql_fetch_array($sql);       //check the correction of the combination of user name and pwd
     if($info==false){                    //when false combination, caution 
          echo "<script language='javascript'>alert('Your user name or password is not correct.');history.back();</script>";
          exit;
       }
      else{                              //success 
          echo "<script>window.location='index.php';</script>";
		 $_SESSION[admin_name]=$info[username];
		 $_SESSION[uid]=$info[userId];
		 $_SESSION[gid]=$info[groupId];
		 $_SESSION[pwd]=$info[password];
   }
 }
}
    $obj=new chkinput(trim($A_name),trim($A_pwd));      //create instance 
    $obj->checkinput();          				    //call instance
?>
