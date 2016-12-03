<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="style.css">
    <title>CS:GO Jackpott</title>
	<meta charset="utf-8" />
	<script src="script.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
	<div id="winnerdata">
	<?php
		echo file_get_contents('data.txt')
	?>
	</div>
	<div id="sidebar">
		<img id="logo" src="logo.png">
		<div class="sidebar_text">
			0%
		</div>
		<div class="sidebar_text">
			0€
		</div>
		<div class="sidebar_text" id="timer">
		</div>
	</div>
	<div id="main">
		<div id="deposit" onclick="location.href='https://steamcommunity.com/tradeoffer/new/?partner=310772513&token=3wPKT6zV';">
			DEPOSIT
		</div>
		<div id="winner">
		</div>
		<div id="log">
		</div>	
	</div>
</body>
</html>