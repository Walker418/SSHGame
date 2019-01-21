<html>
	<head>
		<title>○× Game</title>
		<style>
		#select{
			text-align: center
		}
		#numbuttom{
			height:64px;
			width:64px;
			font-size: 32pt;
		}
		</style>
	</head>
	<body>
	
		<?php $numbers= array(
			"0",
			"1",
			"2",
			"3",
			"4",
			"5",
			"6",
			"7",
			"8",
			"9",
			);
	 	?>
		
	<?php
	$fp = fopen("date.txt","r");
	
	/*○×交互に出す*/
	while(($buff=fgets($fp))!= false)
	{
		$a++;
		if($a%2==1)
		{
		$line = explode("\n",$buff);
		echo $line[0];
		$maru = array($line[0]=>"○");
		$numbers = array_replace($numbers,$maru);
		}
		else
		{
		$line = explode("\n",$buff);
		echo $line[0];
		$batu = array($line[0]=>"×");
		$numbers = array_replace($numbers,$batu);
		}
	}
	fclose($fp);
	
	
	if(
	$numbers["1"]=="○"&&$numbers["2"]=="○"&&$numbers["3"]=="○"||
	$numbers["4"]=="○"&&$numbers["5"]=="○"&&$numbers["6"]=="○"||
	$numbers["7"]=="○"&&$numbers["8"]=="○"&&$numbers["9"]=="○"||
	$numbers["1"]=="○"&&$numbers["4"]=="○"&&$numbers["7"]=="○"||
	$numbers["2"]=="○"&&$numbers["5"]=="○"&&$numbers["8"]=="○"||
	$numbers["3"]=="○"&&$numbers["6"]=="○"&&$numbers["9"]=="○"||
	$numbers["1"]=="○"&&$numbers["5"]=="○"&&$numbers["9"]=="○"||
	$numbers["3"]=="○"&&$numbers["5"]=="○"&&$numbers["7"]=="○"
	)
	{
		echo "<br>○の勝利";
	}
	
	if(
	$numbers["1"]=="×"&&$numbers["2"]=="×"&&$numbers["3"]=="×"||
	$numbers["4"]=="×"&&$numbers["5"]=="×"&&$numbers["6"]=="×"||
	$numbers["7"]=="×"&&$numbers["8"]=="×"&&$numbers["9"]=="×"||
	$numbers["1"]=="×"&&$numbers["4"]=="×"&&$numbers["7"]=="×"||
	$numbers["2"]=="×"&&$numbers["5"]=="×"&&$numbers["8"]=="×"||
	$numbers["3"]=="×"&&$numbers["6"]=="×"&&$numbers["9"]=="×"||
	$numbers["1"]=="×"&&$numbers["5"]=="×"&&$numbers["9"]=="×"||
	$numbers["3"]=="×"&&$numbers["5"]=="×"&&$numbers["7"]=="×"
	)
	{
		echo "<br>×の勝利";
	}
	
	?>
		
		<form action="get.php" id="select">
			<button type="submit" name="uint" value="1" id="numbuttom"><?php echo $numbers["1"]; ?></button>
			<button type="submit" name="uint" value="2" id="numbuttom"><?php echo $numbers["2"]; ?></button>
			<button type="submit" name="uint" value="3" id="numbuttom"><?php echo $numbers["3"]; ?></button><br>
			<button type="submit" name="uint" value="4" id="numbuttom"><?php echo $numbers["4"]; ?></button>
			<button type="submit" name="uint" value="5" id="numbuttom"><?php echo $numbers["5"]; ?></button>
			<button type="submit" name="uint" value="6" id="numbuttom"><?php echo $numbers["6"]; ?></button><br>
			<button type="submit" name="uint" value="7" id="numbuttom"><?php echo $numbers["7"]; ?></button>
			<button type="submit" name="uint" value="8" id="numbuttom"><?php echo $numbers["8"]; ?></button>
			<button type="submit" name="uint" value="9" id="numbuttom"><?php echo $numbers["9"]; ?></button><br>
		</form>
		
		<reset>
		リセットする時は 下のリセットボタンを押すこと
		<form action="reset.php">
		<button>リセット</button>
		</form>
		</reset>
	</body>
</html>
