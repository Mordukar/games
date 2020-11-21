<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/photo.jpg">
		<div class="box_text">
			<p><b>Добрый день!</b>
			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал на языке JS: <br>
			<a href="#">Главная</a>
			<a href="puzzle.ph">Загадки</a>
			<a href="guess.php">Угадайка</a>
			<a href="number.php">Угадайка на 2 игрока</a>
			<a href="password.php">Генератор пароля</a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Evgeny Sergeevich
<div>


</body>
</html>