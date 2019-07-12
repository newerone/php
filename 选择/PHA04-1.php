<?php 
  mysql_connect("127.0.0.1","root","takming");  
  mysql_select_db("research");
  mysql_query("SET NAMES utf8");
  $sql="select no,title,op1,op2,op3 from option";
  $result=mysql_query($sql);
  $rows=mysql_num_rows($result);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>研討會滿意度調查</title>
<style type="text/css">
<!--
.style1 {
	font-family: "標楷體";
	font-size: 36px;
}
body {
	background-color: #99FFFF;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
</head>

<body>
<p class="style1">PHP5研討會滿意度調查
  <input name="Submit" type="submit" onClick="MM_goToURL('parent','PHA04-3.php');return document.MM_returnValue" value="瀏覽問卷結果">
</p>
<hr />
<?
   for($i=0;$i<=$rows;$i++)
   {
 echo "<form name=form1 method=post action="PHA04-3.php">";
 echo "<Font color=#0000FF size=4><B>".($i+1).mysql_result($result,1,$i)."</B></Font>";
 echo "<table b=0 width=60%>";
 echo "<tr>";
 echo "<td><input type=radio name=op$i value=sum1 checked>".mysql_result($result,$i,2);
 echo "<td><input type=radio name=op$i value=sum2>".mysql_result($result,$i,3);
 echo "<td><input type=radio name=op$i value=sum3>".mysql_result($result,$i,4);
 echo "</table><p>";
 }?>
<input type=submit value=送出 />  <input type=reset value=重置 />
</form>
<body>
</body>
</html>