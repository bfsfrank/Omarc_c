<?php 
session_start();
error_reporting(0);
include("Conn/conn.php");
$operator=$_SESSION[admin_name];
  

$ak1 = $_POST[steps][0];
$ak2 = $_POST[steps][1];
$ak3 = $_POST[steps][2];
$ak4 = $_POST[steps][3];
$ak5 = $_POST[steps][4];
$ak6 = $_POST[steps][5];
$ak7 = $_POST[steps][6];
$ak8 = $_POST[steps][7];
$ak9 = $_POST[steps][8];
$ak10 = $_POST[steps][9];
$ak11 = $_POST[steps][10];
$ak12 = $_POST[steps][11];
$ak13 = $_POST[steps][12];
$ak14 = $_POST[steps][13];
$ak15 = $_POST[steps][14];
$ak16 = $_POST[steps][15];
$ak17 = $_POST[steps][16];
$ak18 = $_POST[steps][17];
$ak19 = $_POST[steps][18];
$ak20 = $_POST[steps][19];
$ak21 = $_POST[steps][20];
$ak22 = $_POST[steps][21];
$ak23 = $_POST[steps][22];
$ak24 = $_POST[steps][23];
$ak25 = $_POST[steps][24];
$ak26 = $_POST[steps][25];

//$inTime=date("Y-m-d");
// insert the scenario
$sql=mysql_query("insert into scenarios(scenarios_name,scenarios_description,posteriorLeft1, posteriorLeft2,posteriorLeft3,posteriorLeft4,posteriorLeft5,posteriorLeft6,posteriorLeft7,posteriorLeft8,posteriorRight1,posteriorRight2,posteriorRight3,posteriorRight4,posteriorRight5,posteriorRight6,posteriorRight7,posteriorRight8,anteriorLeft1,anteriorLeft2,anteriorLeft3,anteriorLeft4,anteriorLeft5,anteriorRight1,anteriorRight2,anteriorRight3,anteriorRight4,anteriorRight5)values('$_SESSION[Scenario_Name]','$_SESSION[Scenario_Des]','$ak11','$ak13','$ak15','$ak17','$ak19','$ak21','$ak23','$ak25','$ak12','$ak14','$ak16','$ak18','$ak20','$ak22','$ak24','$ak26','$ak1','$ak3','$ak5','$ak7','$ak9','$ak2','$ak4','$ak6','$ak8','$ak10')");

// get the scenario id
$sql=mysql_query("select scenariosId from scenarios where scenarios_name = '$_SESSION[Scenario_Name]' and scenarios_description = '$_SESSION[Scenario_Des]' and posteriorLeft1 = '$ak11' and anteriorRight5 = '$ak10' and posteriorRight6 = '$ak22' and anteriorRight3='$ak6' and anteriorLeft1 = '$ak1' and anteriorLeft3 = '$ak5' and anteriorRight2 = '$ak4' and posteriorLeft5 = '$ak19'");
$info=mysql_fetch_array($sql);
$_SESSION[current_sc_id]=$info[scenariosId];

// get the case study id
$sql=mysql_query("select id from case_study where name = '$_SESSION[current_cs_name]' and description = '$_SESSION[current_cs_Description]'");
$info=mysql_fetch_array($sql);
$_SESSION[current_cs_id]=$info[id];

// create the link of cs & sc
$sql=mysql_query("insert into case_study_details(cs_id,scenario_id,title,description)values('$_SESSION[current_cs_id]','$_SESSION[current_sc_id]','$_SESSION[Scenario_Name]','$_SESSION[Scenario_Des]')");
$sql=mysql_query("update case_study_details set sequence =case_study_scenario_link_id where scenario_id ='$_SESSION[current_sc_id]'");
			
echo "Succes to add scenario and pair sounds! \n Transfer to Add Scenario page to add more scenarios to implement the process of add case study, if need! \n";

?>
