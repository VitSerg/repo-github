<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

	function readInt(){
		var number = document.getElementById("userAnswer").value;
		return parseInt(number);
	}

	function write(text){
			document.getElementById("info").innerHTML = text;
		}

	function genpass(){
		var userAnswer = readInt()
	    var password = "";
    	var symbols = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (var i = 0; i < userAnswer; i++){
        password += symbols.charAt(Math.floor(Math.random() * symbols.length)); 
        write (password) 
    }
    return password;
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

			<h1>Генератор паролей.</h1>

			<div class="box">

				<p id="info">Введите длинну пароля.</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="genpass();" id="button">Сгенерировать</a>		
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