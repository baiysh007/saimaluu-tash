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
<body >

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
<div class="">
	<div class="container bgcont">
		
			<p ><h3 class="text">АВТОБИОГРАФИЯ</h3></p>
			<hr>
		<div class="col-md-3" style="">
			<p class="date"><a href="#top" id="top-link" >Детство</a></p>
			<hr class="hr">
			<p class="date"><a href="#top60" id="top-1960" >1960-1970 год</a></p>
			<hr class="hr">
			<p class="date"><a href="#top70" id="top-1970" >1970-1980 год </a></p>
			<hr class="hr">
			<p class="date"><a href="#top80" id="top-1980" >1980-1990 год </a></p>
			<hr class="hr">
			<p class="date"><a href="#top90" id="top-1990" >1990-2000 год </a></p>
			<hr class="hr">
			<p class="date"><a href="#top00" id="top-2000" >2000-2010 год </a></p>
			<hr class="hr">
		</div>	
		<div class="col-md-9 navbar-right">
			<section id="top">
				<div class="wow fadeInDown" data-wow-delay="0.3s">
				<h3>Детство</h3>
				<p>Это текст. Нажмите один раз и выберите «Редактировать текст» <br>
				или просто кликните дважды, чтобы добавить свой <br>текст и настроить шрифт. Вы можете переместить его в любое место на странице.<br> Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите<br> «Редактировать текст» или просто кликните дважды, <br><br>чтобы добавить свой текст и настроить шрифт. Вы можете <br>переместить его в любое место на странице. Расскажите посетителя<br>м сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или <br>просто кликните дважды, <br>чтобы добавить свой текст и настроить шрифт. Вы можете переместить<br> его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. <br>Нажмите один раз и выберите «Редактировать текст» или просто кликните<br> дважды, чтобы добавить свой текст и настроить шрифт. Вы можете <br>переместить его в любое место на странице. <br>Расскажите посетителям сайта о себе.</p>
			</div></section>
			<section id="top60">
				<div class="wow fadeInDown" data-wow-delay="0.3s">
				<h3>1960-1970 год</h3>
				<p>1960 Это текст. Нажмите один раз и выберите «Редактировать текст» <br>
				или просто кликните дважды, чтобы добавить свой <br>текст и настроить шрифт. Вы можете переместить его в любое место на странице.<br> Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите<br> «Редактировать текст» или просто кликните дважды, <br><br>чтобы добавить свой текст и настроить шрифт. Вы можете <br>переместить его в любое место на странице. Расскажите посетителя<br>м сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или <br>просто кликните дважды, <br>чтобы добавить свой текст и настроить шрифт. Вы можете переместить<br> его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. <br>Нажмите один раз и выберите «Редактировать текст» или просто кликните<br> дважды, чтобы добавить свой текст и настроить шрифт. Вы можете <br>переместить его в любое место на странице. <br>Расскажите посетителям сайта о себе.</p></p></div></section>
			<section id="top70"><div class="wow fadeInDown" data-wow-delay="0.3s">
				<h3>1970-1980 год</h3>
				<p>1970 Это текст. Нажмите один раз и выберите «Редактировать текст» <br>
				или просто кликните дважды, чтобы добавить свой <br>текст и настроить шрифт. Вы можете переместить его в любое место на странице.<br> Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите<br> «Редактировать текст» или просто кликните дважды, <br><br>чтобы добавить свой текст и настроить шрифт. Вы можете <br>переместить его в любое место на странице. Расскажите посетителя<br>м сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или <br>просто кликните дважды, <br>чтобы добавить свой текст и настроить шрифт. Вы можете переместить<br> его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. <br>Нажмите один раз и выберите «Редактировать текст» или просто кликните<br> дважды, чтобы добавить свой текст и настроить шрифт. Вы можете <br>переместить его в любое место на странице. <br>Расскажите посетителям сайта о себе.</p></p></div></section>
			<section id="top80"><div class="wow fadeInDown" data-wow-delay="0.3s">
				<h3>1980-1990 год</h3>
				<p>1980Это текст. Нажмите один раз и выберите «Редактировать текст» <br>
				или просто кликните дважды, чтобы добавить свой <br>текст и настроить шрифт. Вы можете переместить его в любое место на странице.<br> Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите<br> «Редактировать текст» или просто кликните дважды, <br><br>чтобы добавить свой текст и настроить шрифт. Вы можете <br>переместить его в любое место на странице. Расскажите посетителя<br>м сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или <br>просто кликните дважды, <br>чтобы добавить свой текст и настроить шрифт. Вы можете переместить<br> его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. <br>Нажмите один раз и выберите «Редактировать текст» или просто кликните<br> дважды, чтобы добавить свой текст и настроить шрифт. Вы можете <br>переместить его в любое место на странице. <br>Расскажите посетителям сайта о себе.</p></p></div></section>
			<section id="top90"><div class="wow fadeInDown" data-wow-delay="0.3s">
				<h3>1990-2000 год</h3>
				<p>1990 Это текст. Нажмите один раз и выберите «Редактировать текст» <br>
				или просто кликните дважды, чтобы добавить свой <br>текст и настроить шрифт. Вы можете переместить его в любое место на странице.<br> Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите<br> «Редактировать текст» или просто кликните дважды, <br><br>чтобы добавить свой текст и настроить шрифт. Вы можете <br>переместить его в любое место на странице. Расскажите посетителя<br>м сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или <br>просто кликните дважды, <br>чтобы добавить свой текст и настроить шрифт. Вы можете переместить<br> его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. <br>Нажмите один раз и выберите «Редактировать текст» или просто кликните<br> дважды, чтобы добавить свой текст и настроить шрифт. Вы можете <br>переместить его в любое место на странице. <br>Расскажите посетителям сайта о себе.</p></p></div></section>
			<section id="top00"><div class="wow fadeInDown" data-wow-delay="0.3s">
				<h3>2000-2010 год </h3>
				<p>2000 Это текст. Нажмите один раз и выберите «Редактировать текст» <br>
				или просто кликните дважды, чтобы добавить свой <br>текст и настроить шрифт. Вы можете переместить его в любое место на странице.<br> Расскажите посетителям сайта о себе.Это текст. Нажмите один раз и выберите<br> «Редактировать текст» или просто кликните дважды, <br><br>чтобы добавить свой текст и настроить шрифт. Вы можете <br>переместить его в любое место на странице. Расскажите посетителя<br>м сайта о себе.Это текст. Нажмите один раз и выберите «Редактировать текст» или <br>просто кликните дважды, <br>чтобы добавить свой текст и настроить шрифт. Вы можете переместить<br> его в любое место на странице. Расскажите посетителям сайта о себе.Это текст. <br>Нажмите один раз и выберите «Редактировать текст» или просто кликните<br> дважды, чтобы добавить свой текст и настроить шрифт. Вы можете <br>переместить его в любое место на странице. <br>Расскажите посетителям сайта о себе.</p></p></div></section>
		</div>	

		
		
	</div>
	
</div>
<div class="bg-white">
<div class="container " >
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
</div>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.5/index.min.js'></script>

    <script src="assets/js/index.js"></script>
</body>
</html>