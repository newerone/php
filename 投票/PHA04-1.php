<?php 
mysql_connect("localhost","root","takming");
mysql_select_db("vote");
mysql_query("set names utf8");
$sql="SELECT * FROM voted";
$result = mysql_query($sql);
?>	  
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>拈花惹草票選活動</title>
<style type="text/css">
<!--
body {
	background-color: #FF66FF;
}
.style1 {
	font-family: "標楷體";
	font-size: 36px;
	color: #009900;
}
.style2 {
	font-family: "標楷體";
	font-size: 14px;
	color: #000066;
}
.table {
	border: medium outset #CCFF00;
	background-color: #FFFFCC;
}
-->
</style>
</head>

<body>
<p align="center" class="style1">拈花惹草票選活動</p>
<p align="center" class="style2">每人每天限投一票</p>

  <table width="60%" border="1" align="center" cellpadding="10" cellspacing="0" class="table">
<?PHP
  echo "<tr>";
  for($i=1;$i<=6;$i++)
  {
	  echo "<td align=center><p><img src=images/P$i.JPG width=180 height=135><br>";
      echo "目前票數：".mysql_result($result,0,$i)."票<br>";
	  echo "<a href=PHA04-3.php?vote=CHOICE$i>投我一票</a></p></td>";
	  if ($i==3)
		  echo "</tr><tr>";
  }
  echo "</tr>";
?>	  
  </table>
  <p align="center">&nbsp;</p>
<p>&nbsp; </p>
</body>


</html>
<?php
mysql_free_result($result);
?>
