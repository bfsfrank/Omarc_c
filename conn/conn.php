<?php
     $conn=mysql_connect("localhost","root","") or die("Database Connection Failed!".mysql_error());
     mysql_select_db("auscultation",$conn) or die("Cannot visit the Database!".mysql_error());
     mysql_query("set names gb2312");
?>
