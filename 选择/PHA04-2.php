<?php 
    mysql_connect("127.0.0.1","root","takming");  
  mysql_select_db("research");
  mysql_query("SET NAMES utf8");
  $sql="select * from option";
  $result=mysql_query($sql);
  $rows=mysql_num_rows($result);  
?>

<head>
<title>加入問卷結果</title>
</head>
<?php
     for($i=0;$i<$rows;$i++)
	 {
       $op=$_POST["op$i"];
	   $sql"update opinion set $op=$op+1 where no=($i+1)"; 
       mysql_query($sql);
	
?>
