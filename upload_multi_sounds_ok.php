<?php 
include ("check_login.php"); 
include("conn/conn.php");

 $allowed = array("mp3");
 $GoodToUpload = 1; 
 if(!empty($_FILES['file'])){
	 foreach($_FILES['file']['name'] as $key => $name){
	 	$sound_name="";
		$sound_des="";
		$real = $key+1;
		//var_dump( $_POST['Sounds_Name'][$key] );
		$sound_name = $_POST['Sounds_Name'][$key];
		$sound_des = $_POST['Sounds_Description'][$key];
		if($sound_name === ""){echo "Failed! The $real sound has problem!  \r Please Input Sound Name Before Upload, try again!  \r - Please make sure every sound has Sound Name and Sound Descripiton. \r - No blank line is allowed in your sound list! \r\r"; $GoodToUpload = 0;break;}
		else if($sound_des === ""){echo "Failed! The $real sound has problem!  \r Please Input Sound Description Before Upload, try again!  \r - Please make sure every sound has Sound Name and Sound Descripiton. \r - No blank line is allowed in your sound list! \r\r"; $GoodToUpload = 0;break;}
		}
  if( 1==$GoodToUpload ) {
	foreach($_FILES['file']['name'] as $key => $name){
		$perfix="assets/"; 
		$md5f=""; 
		$orgf="";
		$sound_name="";
		$sound_des="";
		$real = $key+1;
		//var_dump( $_POST['Sounds_Name'][$key] );
		$sound_name = $_POST['Sounds_Name'][$key];
		$sound_des = $_POST['Sounds_Description'][$key];

		if($_FILES['file']['error'][$key] === 0){
			$temp = $_FILES['file']['tmp_name'][$key];
			$ext = explode('.',$name);
			$ext = strtolower(end($ext)); 
			$orgfile = $_FILES['file']['name'][$key];
			$md5file = md5(uniqid(microtime())).rand().'.' . $ext;
			if($_FILES["file"]["size"][$key]<= 2048000) {
				if(in_array($ext,$allowed)) {
					if(move_uploaded_file($temp,"assets/{$md5file}")) {
					$orgf .= $perfix . $orgfile; 
					$md5f .= $perfix . $md5file; 
					$perfix =",";
					} else{ 
						echo "There was an error uploading the file, please try again!\r";
					} 
				}else{ 
				  echo "file Extension is not valid \r ".$ext;
				}
			} else { 
				echo "Failed! File size is greater then 2 MB \r".$ext; 
			}
		}
		if($orgf!="" && $md5f!=""){ 
			$sql=mysql_query("insert into sounds( file,soundName,soundDescription )values('".$md5f."','".$sound_name."','".$sound_des."')");
			echo "The $real sound has been uploaded successfully! \r";
		} 
	}}
}

?>
