<?php?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="style.css">
    <title>Winner Manager</title>
	<meta charset="utf-8" />
	<script src="script.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body id="winmanager" onload="winnerchoose()">
<form action="php.php" method="post">
<input type="submit" name="reset" value="RESET">
</form>
<form action="php.php" method="post">
    <?php
        echo file_get_contents('names.txt')
    ?>
    <input type="submit" name="submit">
    <?php
        if(isset($_POST['reset'])) {
            file_put_contents('data.txt', '', LOCK_EX);
        };
        if(isset($_POST['submit'])) {
            $data = '';
            file_put_contents('data.txt', $data, LOCK_EX);
        };
        if(isset($_POST['box1'])) {
            $data = '<a class="winnerchoose">ataly-cs.money</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box2'])) {
            $data = '<a class="winnerchoose">bedogo_kickback.com</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box3'])) {
            $data = '<a class="winnerchoose">condorlona</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box4'])) {
            $data = '<a class="winnerchoose">dj_bartek_108</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box5'])) {
            $data = '<a class="winnerchoose">DTX_Menso</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box6'])) {
            $data = '<a class="winnerchoose">foxi44</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box7'])) {
            $data = '<a class="winnerchoose">gateswang007</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box8'])) {
            $data = '<a class="winnerchoose">jacky</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box9'])) {
            $data = '<a class="winnerchoose">jasseri</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box10'])) {
            $data = '<a class="winnerchoose">jurzcyx</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box11'])) {
            $data = '<a class="winnerchoose">kasper</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box12'])) {
            $data = '<a class="winnerchoose">lolx76</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box13'])) {
            $data = '<a class="winnerchoose">mascotbw</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box14'])) {
            $data = '<a class="winnerchoose">moe17</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box15'])) {
            $data = '<a class="winnerchoose">mystic</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box16'])) {
            $data = '<a class="winnerchoose">navicis</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box17'])) {
            $data = '<a class="winnerchoose">nexshot</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box18'])) {
            $data = '<a class="winnerchoose">zsandinio</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box19'])) {
            $data = '<a class="winnerchoose">shifty</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box20'])) {
            $data = '<a class="winnerchoose">spinarrow5</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box21'])) {
            $data = '<a class="winnerchoose">valario</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box22'])) {
            $data = '<a class="winnerchoose">xdentox</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box23'])) {
            $data = '<a class="winnerchoose">gabe</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box24'])) {
            $data = '<a class="winnerchoose">xHyFly</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box25'])) {
            $data = '<a class="winnerchoose">programer21</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['box26'])) {
            $data = '<a class="winnerchoose">sandinio</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['0'])) {
            $data = '<a class="winnerno">0</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['1'])) {
            $data = '<a class="winnerno">1</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['2'])) {
            $data = '<a class="winnerno">2</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['3'])) {
            $data = '<a class="winnerno">3</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['4'])) {
            $data = '<a class="winnerno">4</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['5'])) {
            $data = '<a class="winnerno">5</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['6'])) {
            $data = '<a class="winnerno">6</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['7'])) {
            $data = '<a class="winnerno">7</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['8'])) {
            $data = '<a class="winnerno">8</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['9'])) {
            $data = '<a class="winnerno">9</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['10'])) {
            $data = '<a class="winnerno">10</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['11'])) {
            $data = '<a class="winnerno">11</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['12'])) {
            $data = '<a class="winnerno">12</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['13'])) {
            $data = '<a class="winnerno">13</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['14'])) {
            $data = '<a class="winnerno">14</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['15'])) {
            $data = '<a class="winnerno">15</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['16'])) {
            $data = '<a class="winnerno">16</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['17'])) {
            $data = '<a class="winnerno">17</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['18'])) {
            $data = '<a class="winnerno">18</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['19'])) {
            $data = '<a class="winnerno">19</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['20'])) {
            $data = '<a class="winnerno">20</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['21'])) {
            $data = '<a class="winnerno">21</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['22'])) {
            $data = '<a class="winnerno">22</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['23'])) {
            $data = '<a class="winnerno">23</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['24'])) {
            $data = '<a class="winnerno">24</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
        if(isset($_POST['25'])) {
            $data = '<a class="winnerno">25</a>';
            file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        };
    ?>
</form>
<form action="php.php" method="post" id="winnerform">
<?php
    echo file_get_contents('data.txt')
?>
</form>
</body>
</html>