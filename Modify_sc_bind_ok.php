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

// get the scenario id
$_SESSION[current_sc_id]=$_SESSION[current_modifying_sc_id];

// update sc
$sql=mysql_query("update scenarios set posteriorLeft1 ='$ak11',posteriorLeft2 ='$ak13',posteriorLeft3 ='$ak15',posteriorLeft4 ='$ak17',posteriorLeft5 ='$ak19',posteriorLeft6 ='$ak21',posteriorLeft7 ='$ak23',posteriorLeft8 ='$ak25', posteriorRight1='$ak12', posteriorRight2='$ak14',posteriorRight3='$ak16',posteriorRight4='$ak18',posteriorRight5='$ak20',posteriorRight6='$ak22',posteriorRight7='$ak24',posteriorRight8='$ak26', anteriorLeft1='$ak1',anteriorLeft2='$ak3',anteriorLeft3='$ak5',anteriorLeft4='$ak7',anteriorLeft5='$ak9',anteriorRight1='$ak2',anteriorRight2='$ak4',anteriorRight3='$ak6',anteriorRight4='$ak8',anteriorRight5='$ak10' where scenariosId='$_SESSION[current_modifying_sc_id]'");
			
echo "Succes to Modify binds of the scenario and the sounds! \n";

?>
