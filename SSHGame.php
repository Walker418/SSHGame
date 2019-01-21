<html>
	<head>
		<title>○× Game</title>
		<style>
		#select{
			text-align: center
		}
		button{
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
	?>
		
		<form action="get.php" id="select">
			<button type="submit" name="uint" value="1"><?php echo $numbers["1"]; ?></button>
			<button type="submit" name="uint" value="2"><?php echo $numbers["2"]; ?></button>
			<button type="submit" name="uint" value="3"><?php echo $numbers["3"]; ?></button><br>
			<button type="submit" name="uint" value="4"><?php echo $numbers["4"]; ?></button>
			<button type="submit" name="uint" value="5"><?php echo $numbers["5"]; ?></button>
			<button type="submit" name="uint" value="6"><?php echo $numbers["6"]; ?></button><br>
			<button type="submit" name="uint" value="7"><?php echo $numbers["7"]; ?></button>
			<button type="submit" name="uint" value="8"><?php echo $numbers["8"]; ?></button>
			<button type="submit" name="uint" value="9"><?php echo $numbers["9"]; ?></button><br>
		</form>
		
		<reset>
		リセットする時は date.txtを空にしてから リロードすること
		</reset>
	</body>
</html>
