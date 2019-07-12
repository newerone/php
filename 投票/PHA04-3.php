<?php
   //進行COOKIE讀取判斷
include("PHA04-2.php");
   
   //取得票選花朵，為該項票數加一；網頁導回至首頁顯示最終得票結果	 
mysql_pconnect("localhost","root","takming");
mysql_select_db("vote");

$CHOICE=$_GET["vote"];
$sql="UPDATE voted SET $CHOICE=$CHOICE+1";
mysql_query($sql);
header("Location:PHA04-1.PHP");
?>