<?PHP
      //判斷COOKIE是否已存在，如果己投過票，則跳脫不能投票，否則記錄COOKIE，期限一天
    $voted=$_COOKIE["voted"];
	if (isset($voted))
		die("<center><h1>您已經投過票了!</h1></center>");
	else
		setcookie("voted",true,time()+60*60*24);
?>