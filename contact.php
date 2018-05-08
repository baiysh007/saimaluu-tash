<?php
$connection = mysqli_connect("localhost", "root", "", "project");
mysqli_set_charset($connection,'utf8');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="assets/css/bootstrap.css" rel="stylesheet">   
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"><script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="assets/js/responsiveCarousel.min.js"></script>
	<title></title>
</head>
<body>
 <div id="app"></div>
<div class="navbar-default">
     <div class="container">
     
     	<ul class="nav navbar-nav">
     	<?php

 $result = mysqli_query($connection, "SELECT * FROM menu");
	while ($row = mysqli_fetch_row($result))
{

  	echo '<li><a href="'.$row[2].'">'.$row[1].'</a></li> ';
	
 }
?>
     	</ul>
   		
     </div>
</div>
<div style=" background-attachment: fixed; background-image: url(assets/images/02.jpg);" >
	<div class="container contl">
		<h3 class="text-center">КОНТАКТНАЯ ИНФОРМАЦИЯ</h3>
		<hr><div class="cont">
		
		<div class="col-md-4">
<p>Адрес:
<br>
Ул. Курманжан-Датка
<br>
Ош , 12923
<br>
Кыргызсатн</p>
<p>info@mysite.ru</p>
<p>Телефоны:
<br>
Тел. +993 500 00-00-00
<br>
Факс +993 500 00-00-00

 </p>
		</div>
		<div class="col-md-6">
			<form action="insert.php" method="POST">
				<input type="text" placeholder="Имя *"  class="messege" name="name">
				<input type="email"  placeholder="E-mail *" class="messege"  name="email">
				<input type="text" placeholder="Тема *"  class="messege"  name="tema">
				<textarea name="sms" placeholder="Сообщения *"></textarea>
				<input type="submit" value="Отправить" class="sub"  onclick="send()">
				
		 	</form>
		</div>

		</div>
			
	</div>
	
</div>
<div class="container">
	<div class="cont" >
		<div class="col-md-4">
			<img src="assets/images/03.png" class="imgicon">
			<p class="text6">Ошский Государственный Университет</p>
			
		</div>
		<div class="col-md-3 social-icons">
			<ul class="nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
		</div>
		<div class="col-md-4">
			<p class="text7"><a href="#">© 2018 Сайт создан IT-academy OshSU</a></p>
		</div>
	</div>
</div>

<script type="text/javascript">
	function send(){
		alert('Сообщения отправлено');
	}
</script>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.5/index.min.js'></script>

    <script src="assets/js/index.js"></script>
</body>
</html>
