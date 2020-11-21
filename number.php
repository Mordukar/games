<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = 3;
    var user = "User1"

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){
			console.log("cnnn")
			tryCount++;


        var userAnswer = readInt(); //22

        if (userAnswer == "q") {
          return; 
        } else if (userAnswer > answer) { 
          write(user + "  \nВаше число больше загаданного"); 
        } else if (userAnswer < answer) { 
          write(user + "  \nВаше число меньше загаданного"); 
        } else if (userAnswer == answer) {  
          write(user + "  \nВы угадали! Было загадано число: " + answer); 
          return; 
        } else if (userAnswer != "q") { 
          write(user + "  \nНеобходимо ввести число"); 
        }
        
          user = (user == "User1") ? "User2" : "User1";
      
	
		}

	</script>
</head>
<body>

<div class="content">
<div class="header">
	<a href="index.php">Главная</a>
	<a href="puzzle.php">Загадки</a>
	<a href="guess.php">Угадайка</a>
	<a href="#">Угадайка на 2 игрока</a>
	<a href="password.php">Генератор пароля</a>
</div>

<div class="contentWrap">
	<div class="content">
			<div class="center">

		<h1>Игра угадайка на 2 игрока</h1>

		<div class="box">

			<p id="info">Угадайте число от 0 до 100</p>
			<input type="text" id="userAnswer">
			<br>
			<a href="#" onClick="guess();" id="button">Начать</a>				
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