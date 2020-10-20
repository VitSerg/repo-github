<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var playerNumber = 1;
		var number = 1;
		
		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){
			
			 while (true){
				write("Ходит игрок №" +playerNumber +": Угадайте число от одного до 100")
				var UserAnswer = readInt();
			    if(UserAnswer==answer){
				    write ("Игрок №" +playerNumber +" : Вы угадали");
				    break;				    
			    }
			    else if(UserAnswer < answer){
			    	write("Вы ввели слишком маленькое число");
			    }
			    else if(UserAnswer > answer){
			    	write("Вы ввели слишком большое число");
			    } 
			    if(playerNumber == 1)
			    	playerNumber = 2;
			    else
			    	playerNumber = 2
			    }
			    
			}
		
/*
			write(true);

			if(userAnswer == answer){
				write("<b>Поздравляю, вы угадали!</b>");
				hide("button");
				hide("userAnswer");
			} else if(tryCount >= maxTryCount){
				write("Вы проиграли<br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
			} else if(userAnswer > answer){
				write("Вы ввели слишком большое число<br>Попробуйте еще раз. Введите число от 1 до 100");
			} else if(userAnswer < answer){
				write("Вы ввели слишком маленькое число<br>Попробуйте еще раз. Введите число от 1 до 100");				
			}
		}
*/
	</script>
</head>
<body>

<div class="content">
<?php 
	include "menu.php";
?>	

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра угадайка на двоих</h1>

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
	Copyright &copy; <?php echo date("Y");?> Vitalii Sergeevich
<div>


</body>
</html>