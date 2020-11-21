<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	
</head>
<body>

<div class="content">
<div class="header">
	<a href="index.php">Главная</a>
	<a href="#">Загадки</a>
	<a href="guess.php">Угадайка</a>
	<a href="number.php">Угадайка на 2 игрока</a>
	<a href="password.php">Генератор пароля</a>
</div>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>
			
			<div class="box">

				<?php
					if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){
						
						$userAnswer = $_GET["userAnswer1"];
						$score = 0;
						if($userAnswer == "водопровод"){
							$score++;
						}
						$userAnswer = $_GET["userAnswer2"];
						if($userAnswer == "морковь"){
							$score++;
						}

						$userAnswer = $_GET["userAnswer3"];
						if($userAnswer == "крапива"){
							$score++;
						}

						echo "Вы угадали " . $score . " загадок";

					}
				?>


				<form method="GET">
					<p>Речка спятила с ума — По домам пошла сама</p>
					<input type="text" name="userAnswer1">

					<p>Сидит девица в темнице, коса на улице</p>
					<input type="text" name="userAnswer2">

					<p>Не огонь, а жжётся</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">>
				</form>
			</div>

        </div>
    </div>
</div>
</div>
<div class="footer">
	Copyright &copy; Evgeny Sergeevich
<div>
</body>
</html>


