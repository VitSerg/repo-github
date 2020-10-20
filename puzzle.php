<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var score = 0;

		function checkAnswer(inputId, answers){
			var userAnswer = document.getElementById(inputId).value;
			userAnswer = userAnswer.toLowerCase();
			for(var i = 0; i < answers.length; i++){
				if(userAnswer == answers[i]){
					score++;
					break;
				}
			}
		}
		
		function checkAnswers() {

			checkAnswer("userAnswer1", ["речка","река"]);
			checkAnswer("userAnswer2", ["воздух","воздуха"]);
			checkAnswer("userAnswer3", ["снег"]);

			alert("Вы отгадали " + score + " загадок");

		}

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

			<h1>Игра в загадки</h1>

			<div class="box">

				<p>Течет-течет — не вытечет; бежит-бежит — не вы­бежит.</p>
				<input type="text" id="userAnswer1">

				<p>Рыба не может жить без воды, а человек без чего?</p>
				<input type="text" id="userAnswer2">

				<p>"Зимой лежал, весной побежал."</p>
				<input type="text" id="userAnswer3">

				<br>
				<a href="#" onClick="checkAnswers();">Ответить</a>

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