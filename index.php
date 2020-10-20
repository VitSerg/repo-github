<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<link href="/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body>

<div class="content">
<?php 
	include "menu.php";
?>	
	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/photo.png">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i>Виталий Сергеевич</i>. Я совсем недавно начал программировать, однако уже написал свой первый сайт.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал: <br>
			<a href="index.php">Главная</a>
			<a href="puzzle.php">Загадки</a>
			<a href="guess.php">Угадайка</a>
			<a href="genpass.php">Генератор паролей</a>
			<a href="guess2.php">Игра угадайка на двоих</a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Vitalii Sergeevich
<div>


</body>
</html>