<html>
	<head>
		<title>Game</title>
		<style>
		</style>
	</head>
	<body>
		<form>
			<?php
				echo $_GET['uint'];
			?>
			<input type="hidden" id="uint" value="<?= $_GET['uint'] ?>">
		</form>
	</body>
</html>
