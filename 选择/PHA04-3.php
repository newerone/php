<?PHP 
     ini_set("error_reporting","E_ALL & ~E_NOTICE");
     mysql_connect("127.0.0.1","root","takming");  
     mysql_select_db("research");
     mysql_query("SET NAMES utf8");
     $sql="select * from option";
     $result=mysql_query($sql);
	 $rows=mysql_num_rows($result);
     $total=mysql_result($result,0,5)+mysql_result($result,0,6)+mysql_result($result,0,7);
?><head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>顯示問卷結果</title>
<style type="text/css">
<!--
body {
	background-color: #FFFF66;
}
.hr {
	border: medium double #FF0000;
}
.style3 {font-size: 30px}
.style7 {
	font-size: 16px;
	color: #000000;
	font-weight: bold;
}
.style9 {color: #0000FF}
.style10 {color: #FF0000}
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
   <p align="center" class="style7 style9"><span class="style3">PHP5研討會滿意度調查結果：
   <input name="Submit" type="submit" onclick="MM_goToURL('parent','PHA04-1.php');return document.MM_returnValue" value="填寫問卷" />
   </span><br />
   <br />
   有效問卷總數：
   <span class="style10">
   <?php 
      echo $total;
   	 ?>
   </span>   </p>
   <hr class="hr" />
     <?php	 
	 echo"<table border=0 align=center>";
     for($i=0;$i<$rows;$i++){
   	   $p1=round(mysql_result($result,$i,5)/$total*100,1);
       $p2=round(mysql_result($result,$i,6)/$total*100,1);
	   $p3=round(mysql_result($result,$i,7)/$total*100,1);
	   echo "<tr><td bgcolor=#00ffff><B><font size=4>".($i+1).mysql_result($result,$i,1)."</font></B></td></tr>";  
	 
   echo"<TR><TD>";
   echo"<table border=2>";
   
	   echo "<tr>";
	   echo"<td>".mysql_result($result,$i,2);
	   echo "<td><img src=images/line.gif height=10 width=$p1> ";
	   printf("0.lf",$p1);
	   echo "%";
	   echo "</tr>";
	   
	    echo "<tr>";
	   echo"<td>".mysql_result($result,$i,3);
	   echo "<td><img src=images/line.gif height=10 width=$p2> ";
	   printf("0.lf",$p2);
	   echo "%";
	   echo "</tr>";
	   
	    echo "<tr>";
	   echo"<td>".mysql_result($result,$i,4);
	   echo "<td><img src=images/line.gif height=10 width=$p3> ";
	   printf("0.lf",$p3);
	   echo "%";
	   echo "</tr>";
  	 
   echo"</table><p>";
  
	 }
   </table> 