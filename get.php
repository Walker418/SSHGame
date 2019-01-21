<?php
 $uint =$_GET['uint'];
	
$fp = fopen("date.txt","a");
flock($fp,LOCK_EX);
fwrite($fp,$uint."\n");
flock($fp,LOCK_UN);
fclose($fp);

header("Location:SSHGame.php");

?>
<!--	
先攻後攻を	サーバーがランダムに決めて送る その際に先攻に合図する	  先攻が○？
先攻が		ボタンを押して送る
サーバーが	押された場所が既に押されたか調べて
			押されてなかったらその場所を ○と場所を両者に送った後に 後攻に合図する
			押されていたら	すでに押されていますなどと言う風にもう一度押してもらうように先攻に送る

</html>


			
