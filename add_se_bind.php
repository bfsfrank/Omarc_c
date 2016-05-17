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
<table width="100%"  align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td>
	<?php include("navigation.php");?>
	</td>
  </tr>
	<td>
    <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">
   <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
   <script src="javascripts/jquery-2.1.1.min.js"></script>
   <script src="javascripts/bootstrap.min.js"></script>
   <script src="javascripts/ion.sound.js"></script>
   <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css" /> 
<script src="javascripts/bootstrap.min.js"></script>
<script src="javascripts/jquery-2.1.1.min.js"></script> 

<?php

 
	$sel_sounds= array();
	//$sel_sounds=split ('[-]',  $_POST[test]); 用来获得add se sounds select的sound id，之前版本的，在全部声音显示后，此处逻辑删除
	$sql=mysql_query("select * from sounds order by soundId");
	$info=mysql_fetch_array($sql);
	$session_sounds_num=0;
	$i=1;
	do{
		$sel_sounds[$i] =$info[soundId];
		$i=$i+1;
	}while($info=mysql_fetch_array($sql));



	
	for( $i=0;$i<=count($sel_sounds);$i++)
   {
	   if($sel_sounds[$i])
	   {  
			$session_sounds[$session_sounds_num]= $sel_sounds[$i];
			$session_sounds_num++;
	   }
   }

			//get selected sounds info for drag			
			$allinfo = array();
            for ($i =0; $i < count($session_sounds); $i++)
            {
				$tmp = $session_sounds[$i];
				$sql=mysql_query("select * from sounds where soundId = '$tmp'");
            	$info=mysql_fetch_array($sql);
				$allinfo[$i][soundId] =$info[soundId];
				$allinfo[$i][soundName] =$info[soundName];
				$allinfo[$i][soundDescription] =$info[soundDescription];
				$allinfo[$i][file] = $info[file];
			 }


		   
?>


<script language="javascript">

    function check_description(form){
		
		// get the sounds path in every boxes
		var array_path = new Array;;
		for (var i=1;i<=26;i++){
			var path = "path"+i;
			if(document.getElementById(path)){
				var aa = document.getElementById(path).innerHTML;
				array_path[i-1] = aa;
			} else { 
				array_path[i-1] = null;}
		}
	
		var _list = {};
		for (var i = 0; i < array_path.length; i++) {  
    		_list["selectedIDs[" + i + "]"] = array_path[i];  
		} 
		//alert(_list.);
		
		// add sounds to the database
		$.ajax({ 
		  url: 'create_scenario_and_pair_sounds.php',
		  type: 'POST',
		  success: function (data) {
			  alert(""+data);
		  },
		   data:{"steps[]":array_path} , 
		   traditional: true, 
	  	});
		window.location.href='add_se.php';
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

<div class="container" align="center" width="75%" >
   <h4 align="center">Add Scenario</h4>
   <div align="center" class="row" >

      <div align="center" width="75%" >
         <h5>Drag sounds to the right positions.</h5>
    <p>

    <table align="center" width="70%" height="60%"  > 
    <form   name= "kk" method="post" enctype="multipart/form-data"  >  

	<label for="name">If the sounds' descriptions are needed, please hover over the sound block in the left sounds list.<br></label>
    <h7><br>Current Case Study Name: <?php echo $_SESSION[current_cs_name];?><br>
    <h7>Current Scenario Name: <?php echo $_SESSION[Scenario_Name];?><br>
 
  <link rel="stylesheet" href="javascripts/jquery-ui-1.11.4/jquery-ui.min.css">
  <script src="javascripts/jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jqueryui/style.css">
  <style>
   #menu {left:0; top:0; width:100%; position:fixed; padding:10px; text-align:center; font-weight:bold; background:#ccc;}
  #gallery { float: left; width: 90%; min-height: 12em; }
  .gallery.custom-state-active { background: #eee; }
  .gallery li { float: left; width: 110px; padding: 0.4em; margin: 0 0.4em 0.4em 0; text-align: center; }
  .gallery li h5 { margin: 0 0 0.4em; cursor: move; }
  .gallery li a { float: right; }
  .gallery li a.ui-icon-zoomin { float: left; }
  .gallery li img { width: 100%; cursor: move; }
  	#position { float: left; margin:10px 10px 0 180px; width: 30%; min-height: 20px;  padding: 1px; }
  #position h4 { line-height: 16px;  }
  #position h4 .ui-icon { float: left; }
  #position .gallery h5 { display: none; }
  	#position2 { float: left; margin:10px 0 0 60px;width: 30%; min-height: 20px;  padding: 1px; }
  #position2 h4 { line-height: 16px;  }
  #position2 h4 .ui-icon { float: left; }
  #position2 .gallery h5 { display: none; }
  	#position3 {  float: left; margin:0px 0 10px 180px;width: 30%; min-height: 20px;   padding: 1px; }
  #position3 h4 { line-height: 16px;  }
  #position3 h4 .ui-icon { float: left; }
  #position3 .gallery h5 { display: none; }
  	#position4 { float: left; margin:0 0 10px 60px; width: 30%; min-height: 20px;   padding: 1px; }
  #position4 h4 { line-height: 16px;  }
  #position4 h4 .ui-icon { float: left; }
  #position4 .gallery h5 { display: none; }
    #position5 { float: left; margin:10px 0 0 160px;  width: 30%; min-height: 20px;   padding: 1px; }
  #position5 h4 { line-height: 16px;  }
  #position5 h4 .ui-icon { float: left; }
  #position5 .gallery h5 { display: none; }
    #position6 { float: left;  margin:10px 0 0 70px; width: 30%; min-height: 20px;   padding: 1px; }
  #position6 h4 { line-height: 16px;  }
  #position6 h4 .ui-icon { float: left; }
  #position6 .gallery h5 { display: none; }
    #position7 {float: left; margin:2px 0 10px 140px; width: 30%; min-height: 20px;   padding: 1px; }
  #position7 h4 { line-height: 16px;  }
  #position7 h4 .ui-icon { float: left; }
  #position7 .gallery h5 { display: none; }
    #position8 { float: left;  margin:2px 0 10px 80px; width: 30%; min-height: 20px;   padding: 1px; }
  #position8 h4 { line-height: 16px;  }
  #position8 h4 .ui-icon { float: left; }
  #position8 .gallery h5 { display: none; }
    #position9 { float: left; margin:30px 0 100px 120px; width: 30%; min-height: 20px;   padding: 1px; }
  #position9 h4 { line-height: 16px;  }
  #position9 h4 .ui-icon { float: left; }
  #position9 .gallery h5 { display: none; }
    #position10 { float: left;  margin:30px 0 100px 100px; width: 30%; min-height: 20px;   padding: 1px; }
  #position10 h4 { line-height: 16px;  }
  #position10 h4 .ui-icon { float: left; }
  #position10 .gallery h5 { display: none; }
    #position11 { float: left; margin:10px 0 0 160px; width: 30%; min-height: 20px;   padding: 1px; }
  #position11 h4 { line-height: 16px;  }
  #position11 h4 .ui-icon { float: left; }
  #position11 .gallery h5 { display: none; }
    #position12 { float: left; margin:10px 0 0 100px; width: 30%; min-height: 20px;   padding: 1px; }
  #position12 h4 { line-height: 16px;  }
  #position12 h4 .ui-icon { float: left; }
  #position12 .gallery h5 { display: none; }
    #position13 { float: left; margin:0px 0 5px 180px; width: 30%; min-height: 20px;   padding: 1px; }
  #position13 h4 { line-height: 16px;  }
  #position13 h4 .ui-icon { float: left; }
  #position13 .gallery h5 { display: none; }
    #position14 { float: left; margin:0px 0 5px 60px; width: 30%; min-height: 20px;   padding: 1px; }
  #position14 h4 { line-height: 16px;  }
  #position14 h4 .ui-icon { float: left; }
  #position14 .gallery h5 { display: none; }
    #position15 { float: left; margin:0 0 0 180px; width: 30%; min-height: 20px;   padding: 1px; }
  #position15 h4 { line-height: 16px;  }
  #position15 h4 .ui-icon { float: left; }
  #position15 .gallery h5 { display: none; }
    #position16 { float: left; margin:0px 0 5px 60px; width: 30%; min-height: 20px;   padding: 1px; }
  #position16 h4 { line-height: 16px;  }
  #position16 h4 .ui-icon { float: left; }
  #position16 .gallery h5 { display: none; }
    #position17 { float: left; margin:0px 0 0 265px; width: 15%; min-height: 20px;   padding: 1px; }
  #position17 h4 { line-height: 16px;  }
  #position17 h4 .ui-icon { float: left; }
  #position17 .gallery h5 { display: none; }
    #position18 {float: left; margin:0px 0 0 265px; width: 15%; min-height: 20px;   padding: 1px; }
  #position18 h4 { line-height: 16px;  }
  #position18 h4 .ui-icon { float: left; }
  #position18 .gallery h5 { display: none; }
    #position19 { float: left; margin:2px 0 0 180px; width: 30%; min-height: 20px;   padding: 1px; }
  #position19 h4 { line-height: 16px;  }
  #position19 h4 .ui-icon { float: left; }
  #position19 .gallery h5 { display: none; }
    #position20 { float: left; margin:2px 0 2px 60px; width: 30%; min-height: 20px;   padding: 1px; }
  #position20 h4 { line-height: 16px;  }
  #position20 h4 .ui-icon { float: left; }
  #position20 .gallery h5 { display: none; }
    #position21 { float: left; margin:2px 0 5px 180px; width: 30%; min-height: 20px;   padding: 1px; }
  #position21 h4 { line-height: 16px;  }
  #position21 h4 .ui-icon { float: left; }
  #position21 .gallery h5 { display: none; }
    #position22 { float: left; margin:2px 0 5px 60px; width: 30%; min-height: 20px;   padding: 1px; }
  #position22 h4 { line-height: 16px;  }
  #position22 h4 .ui-icon { float: left; }
  #position22 .gallery h5 { display: none; }
    #position23 { float: left; margin:2px 0 0 180px; width: 30%; min-height: 20px;   padding: 1px; }
  #position23 h4 { line-height: 16px;  }
  #position23 h4 .ui-icon { float: left; }
  #position23 .gallery h5 { display: none; }
    #position24 { float: left; margin:2px 0 2px 60px; width: 30%; min-height: 20px;   padding: 1px; }
  #position24 h4 { line-height: 16px;  }
  #position24 h4 .ui-icon { float: left; }
  #position24 .gallery h5 { display: none; }
    #position25 {float: left; margin:15px 0 130px 180px; width: 30%; min-height: 20px;   padding: 1px; }
  #position25 h4 { line-height: 16px;  }
  #position25 h4 .ui-icon { float: left; }
  #position25 .gallery h5 { display: none; }
    #position26 { float: left; margin:15px 0 130px 60px; width: 30%; min-height: 20px;   padding: 1px; }
  #position26 h4 { line-height: 16px;  }
  #position26 h4 .ui-icon { float: left; }
  #position26 .gallery h5 { display: none; }

  </style>
  <script>
  
  $(function() {
    // sounds and positions
    var $gallery = $( "#gallery" ),
      $position = $( "#position" );
	  $position2 = $( "#position2" );
	  $position3 = $( "#position3" );
	  $position4 = $( "#position4" );
	  $position5 = $( "#position5" );
	  $position6 = $( "#position6" );
	  $position7 = $( "#position7" );
	  $position8 = $( "#position8" );
	  $position9 = $( "#position9" );
	  $position10 = $( "#position10" );
	  $position11 = $( "#position11" );
	  $position12 = $( "#position12" );
	  $position13 = $( "#position13" );
      $position14 = $( "#position14" );
      $position15 = $( "#position15" );
      $position16 = $( "#position16" );
      $position17 = $( "#position17" );
      $position18 = $( "#position18" );
      $position19 = $( "#position19" );
      $position20 = $( "#position20" );
      $position21 = $( "#position21" );
      $position22 = $( "#position22" );
      $position23 = $( "#position23" );
      $position24 = $( "#position24" );
      $position25 = $( "#position25" );
      $position26 = $( "#position26" );
 
    // make sounds can be dragged
    $( "li", $gallery ).draggable({
	  scroll: true,
	  scrollSensitivity: 100,
      cancel: "a.ui-icon", //no drag when just click
      revert: "valid", // no drop, return to orignal position
      containment: "document",
      helper: "clone",
	  opacity: 0.40,
      cursor: "crosshair",
	  cursorAt: { top: 56, left: 56 } 
    });
	
	
    // Item can be dropped to those boxes
    $position.droppable({
      accept: "#gallery > li",
      //activeClass: "ui-state-highlight",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			//alert($(ui.draggable).text());
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_f_1' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P1  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path1' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position2.droppable({
      accept: "#gallery > li",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_f_2' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P2  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path2' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position3.droppable({
      accept: "#gallery > li",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_f_3' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P3  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path3' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position4.droppable({
      accept: "#gallery > li",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_f_4' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P4  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path4' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    }); 
    $position5.droppable({
      accept: "#gallery > li",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_f_5' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P5  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path5' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    }); 
    $position6.droppable({
      accept: "#gallery > li",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_f_6' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P6  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path6' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    }); 
    $position7.droppable({
      accept: "#gallery > li",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_f_7' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P7  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path7' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    }); 
    $position8.droppable({
      accept: "#gallery > li",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_f_8' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P8  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path8' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    }); 
    $position9.droppable({
      accept: "#gallery > li",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_f_9' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P9  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path9' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    }); 
    $position10.droppable({
      accept: "#gallery > li",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_f_10' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P10  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path10' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    }); 
    $position11.droppable({
      accept: "#gallery > li",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_11' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P11  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path11' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    }); 
    $position12.droppable({
      accept: "#gallery > li",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_12' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P12  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path12' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    }); 
    $position13.droppable({
      accept: "#gallery > li",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_13' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P13  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path13' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    }); 
    $position14.droppable({
      accept: "#gallery > li",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_14' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P14  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path14' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    }); 
    $position15.droppable({
      accept: "#gallery > li",
      //activeClass: "ui-state-highlight",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			//alert($(ui.draggable).text());
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_15' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P15  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path15' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position16.droppable({
      accept: "#gallery > li",
      //activeClass: "ui-state-highlight",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			//alert($(ui.draggable).text());
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_16' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P16  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path16' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position17.droppable({
      accept: "#gallery > li",
      //activeClass: "ui-state-highlight",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			//alert($(ui.draggable).text());
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_17' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P17  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path17' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position18.droppable({
      accept: "#gallery > li",
      //activeClass: "ui-state-highlight",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			//alert($(ui.draggable).text());
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_18' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P18  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path18' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position19.droppable({
      accept: "#gallery > li",
      //activeClass: "ui-state-highlight",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			//alert($(ui.draggable).text());
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_19' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P19  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path19' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position20.droppable({
      accept: "#gallery > li",
      //activeClass: "ui-state-highlight",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			//alert($(ui.draggable).text());
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_20' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P20  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path20' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position21.droppable({
      accept: "#gallery > li",
      //activeClass: "ui-state-highlight",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			//alert($(ui.draggable).text());
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_21' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P21  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path21' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position22.droppable({
      accept: "#gallery > li",
      //activeClass: "ui-state-highlight",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			//alert($(ui.draggable).text());
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_22' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P22  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path22' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position23.droppable({
      accept: "#gallery > li",
      //activeClass: "ui-state-highlight",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			//alert($(ui.draggable).text());
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_23' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P23  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path23' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position24.droppable({
      accept: "#gallery > li",
      //activeClass: "ui-state-highlight",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			//alert($(ui.draggable).text());
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_24' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P24  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path24' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position25.droppable({
      accept: "#gallery > li",
      //activeClass: "ui-state-highlight",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			//alert($(ui.draggable).text());
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_25' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P25  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path25' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
    $position26.droppable({
      accept: "#gallery > li",
      //activeClass: "ui-state-highlight",
	  hoverClass: "ui-state-highlight",
      drop: function( event, ui ) {
			//alert($(ui.draggable).text());
			var s_name = $(ui.draggable).text();
			var sound_id_in_this_screen = ""+s_name.split("Sound Name:")[0]; 
    		var str_after = s_name.split("@!#-m-#$@")[1]; 
			var real_sound_id = str_after.split("&*@#-h-#$%#@")[0]; // real sound ID for further operation
			var sound_path = str_after.split("&*@#-h-#$%#@")[1];
			sound_path = sound_path.split("^&*!@#")[0];
			//alert(sound_path);
			sound_id_in_this_screen ="<h6 id='p_b_26' style='float:right;' title='click to unlink' <button type='button' class='btn btn-default btn-xs' onClick='$(this).parent().parent().find(  &#39; h6  &#39; ).html(  &#39; P26  &#39; );'><span class='ui-icon ui-icon-close'></span> <h7 id='path26' hidden>"+sound_path+" </button></h6>"+sound_id_in_this_screen;
		  $( this )
          .addClass( "ui-state-default" )
          .find( "h6" )
          .html( sound_id_in_this_screen );
      }
    });
 

    // sounds events listener
    $( "ul.gallery > li" ).click(function( event ) {
      var $item = $( this ),
        $target = $( event.target );

	  return false;
    });
  });
  </script>
 


 <div id="menu" align="right" style="width:150px; height:98%; overflow: scroll; overflow-x: hidden; solid #000000;"> <!-- side sounds layout stroller -->
<ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
<?php for ($j = 0; $j < count($session_sounds); $j++){?>
  <li title="Description: <?php echo $allinfo[$j][soundDescription] ?>" class="ui-widget-content ui-corner-tr" >
  	<S_name = <?php echo $j+1 ?> >
    <h5 title="Description: <?php echo $allinfo[$j][soundDescription] ?>" class="ui-widget-header"> Sound <?php echo $j+1 ?> </h5>
    <h6 title="Description: <?php echo $allinfo[$j][soundDescription] ?>" class="ui-widget-content">Sound Name:  <?php echo $allinfo[$j][soundName] ?> </h6>
    <h7 name="ID" hidden> @!#-m-#$@<?php echo $allinfo[$j][soundId] ?> </h7>
    <h8 name="sounds path" hidden> &*@#-h-#$%#@ <?php echo $allinfo[$j][file] ?> ^&*!@# </h8>
    <audio id="audio<?php echo $j+1 ?>" controls>
  <source src="<?php echo $allinfo[$j][file] ?>" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
		<div id="controls">
			<!--div id="progressBar"><span id="progress"></span></div-->
			<button id="playpause<?php echo $j+1 ?>" title="play<?php echo $j+1 ?>" onClick="togglePlayPause(this.id)">Play</button>
		</div>

		<!-- Custom Controls -->
		<script>
			// Grab a handle to the audio (used throughout the functions)
			var audio = document.getElementById("audio<?php echo $j+1 ?>");
			// Turn off the default controls
			audio.controls = false;
			
			// Event Listening
			// Listens for the 'timeupdate' event to be raised by the audio, and calls the updateProgress() function to update the progress bar
			//audio.addEventListener("timeupdate", updateProgress, false);
			// Listens for the 'play' event to be raised and changes the play/pause button's text to 'pause'
			audio.addEventListener('play', function() {
				var playpause = document.getElementById("playpause<?php echo $j+1 ?>");
				playpause.title = "pause";
				playpause.innerHTML = "Pause";
			}, false);
			// Listens for the 'pause' event to be raised and changes the play/pause button's text to 'play'
			audio.addEventListener('pause', function() {
				var playpause = document.getElementById("playpause<?php echo $j+1 ?>");
				playpause.title = "play";
				playpause.innerHTML = "Play";
			}, false);
			// Listens for the 'ended' event to be raised and pauses the audio (which has the effect of updating the play/pause button's text to 'play')
			audio.addEventListener("ended", function() { this.pause(); }, false);			
			
			// Functions
			// togglePlayPause - toggles the play/pause button
			function togglePlayPause(id) {
				// Grab a handle to the play/pause button
				//alert(id);
				// for the dynamic audio id
				var playpause = document.getElementById(id);
				var audio_sound=id.split("playpause")[1];
				//alert(audio_sound);
				var audio = document.getElementById("audio"+audio_sound);
				// If the audio is currently paused or has ended
				if (audio.paused || audio.ended) {
					// Change the title and the text of the button to "pause"
					playpause.title = "pause";
					playpause.innerHTML = "pause";
					// Start playing the audio
					audio.play();
				}
				// Otherwise it must currently be playing
				else {
					// Change the title and the text of the button to "play"
					playpause.title = "play";
					playpause.innerHTML = "play";
					// Pause the audio
					audio.pause();
				}
			}
		</script>
    
  </li>
 <?php } ?>
</ul>
</div>

</ul>
<table id="table1" width="1290" height="630" align="center"  background="M3V2_0000s_0011_Front.jpg" border="0" >
    <colgroup>

    </colgroup>
	<tr height=100px>
        <td width="25%" colspan = " 2 "><div id="position17" class="ui-widget-content ui-state-default">
  			<h6 > P17</h6>
			</div></td>
        <td width="25%" colspan = " 2 "><div id="position18" class="ui-widget-content ui-state-default">
  			<h6 > P18</h6>
			</div></td>
    </tr>

    <tr>
        <td width="25%"><div id="position"  class="ui-widget-content ui-state-default">
  			<h6 >P1</h6>
			</div></td>
        <td width="25%"><div id="position2" class="ui-widget-content ui-state-default">
  			<h6 >P2</h6>
			</div></td>
        <td width="25%"><div id="position11" class="ui-widget-content ui-state-default">
  			<h6 > P11</h6>
			</div></td>
        <td width="25%"><div id="position12" class="ui-widget-content ui-state-default">
  			<h6 > P12</h6>
			</div></td>    </tr>
    <tr>
        <td width="25%"></td>
        <td width="25%"></td>
        <td width="25%"><div id="position13" class="ui-widget-content ui-state-default">
  			<h6 >P13</h6>
			</div></td>
        <td width="25%"><div id="position14" class="ui-widget-content ui-state-default">
  			<h6 > P14</h6>
			</div></td>    </tr>
    <tr height=15px>
        <td width="25%"><div id="position3" class="ui-widget-content ui-state-default">
  			<h6 > P3</h6>
			</div></td>
        <td width="25%"><div id="position4" class="ui-widget-content ui-state-default">
  			<h6 >P4</h6>
			</div></td>
        <td width="25%"><div id="position15" class="ui-widget-content ui-state-default">
  			<h6 > P15</h6>
			</div></td>
        <td width="25%"><div id="position16" class="ui-widget-content ui-state-default">
  			<h6 > P16</h6>
			</div></td>

    </tr>
    <tr height=15px>
        <td width="25%"><div id="position5" class="ui-widget-content ui-state-default">
  			<h6 > P5</h6>
			</div></td>
        <td width="25%"><div id="position6" class="ui-widget-content ui-state-default">
  			<h6 > P6</h6>
			</div></td>
        <td width="25%"><div id="position19" class="ui-widget-content ui-state-default">
  			<h6 > P19</h6>
			</div></td>
        <td width="25%"><div id="position20" class="ui-widget-content ui-state-default">
  			<h6 > P20</h6>
			</div></td>
    </tr>
    <tr height=15px>
        <td width="25%"></td>
        <td width="25%"></td>
        <td width="25%"><div id="position21" class="ui-widget-content ui-state-default">
  			<h6 > P21</h6>
			</div></td>
        <td width="25%"><div id="position22" class="ui-widget-content ui-state-default">
  			<h6 > P22</h6>
			</div></td>    </tr>
    <tr>
    <tr height=15px>
        <td width="25%"><div id="position7" class="ui-widget-content ui-state-default">
  			<h6 > P7</h6>
			</div></td>
        <td width="25%"><div id="position8" class="ui-widget-content ui-state-default">
  			<h6 > P8</h6>
			</div></td>
        <td width="25%"><div id="position23" class="ui-widget-content ui-state-default">
  			<h6 > P23</h6>
			</div></td>
        <td width="25%"><div id="position24" class="ui-widget-content ui-state-default">
  			<h6 > P24</h6>
			</div></td>    </tr>
    <tr>
    <tr>
        <td width="25%"><div id="position9" class="ui-widget-content ui-state-default">
  			<h6 > P9</h6>
			</div></td>
        <td width="25%"><div id="position10" class="ui-widget-content ui-state-default">
  			<h6 > P10</h6>
			</div></td>
        <td width="25%"><div id="position25" class="ui-widget-content ui-state-default">
  			<h6 > P25</h6>
			</div></td>
        <td width="25%"><div id="position26" class="ui-widget-content ui-state-default">
  			<h6 > P26</h6>
			</div></td>    </tr>
    <tr>
    
</table>
</div>    

    <center><input type="button" value="Confirm Sounds for this Scenario" name="upload" class="btn btn-primary" onClick="return check_description(kk);"/>
<!--	<input name="Submit2" type="button" class="btn btn-primary" value="Back, Re-select Sounds" onClick="window.location.href='add_se_sounds_select.php'"/> !-->
    <input name="Submit2" type="button" class="btn btn-primary" value="Cancel, Return to Index" onClick="window.location.href='index.php'"/>
    </form> 
    
    
    <tr>
    <table width="400" > 
    <center><a class="btn btn-default" href="upload_Sounds_mu.PHP">If you need more sounds to upload, click here!</a>
    </tr>
    </p> 
	</div>

</div>
