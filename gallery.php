
<?php
$connection = mysqli_connect("localhost", "root", "", "project");
mysqli_set_charset($connection,'utf8');
?><!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
       <title></title>
        <meta name="description" content="Gamma Gallery - A Responsive Image Gallery Experiment">
        <meta name="keywords" content="html5, responsive, image gallery, masonry, picture, images, sizes, fluid, history api, visibility api">
        <meta name="author" content="Codrops">
	<link href="assets/css/bootstrap.css" rel="stylesheet">   
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/lightbox.min.css">
    <script type="text/javascript" src="assets/js/lightbox-plus-jquery.min.js">
	</script>
   
		<script src="assets/js/modernizr.custom.70736.js"></script>
		<noscript><link rel="stylesheet" type="text/css" href="assets/css/noJS.css"></noscript>
		  <link rel="stylesheet" type="text/css" href="assets/css/style.css"><script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="assets/js/responsiveCarousel.min.js"></script>
	
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

	<div class="container bgcont">
		<h3 class="text-center">ГАЛЕРЕЯ</h3>
		<hr>
		<div class="cont">
		
		<div class="gallery">
<?php

 $result1 = mysqli_query($connection, "SELECT * FROM gallery");
	while ($row1 = mysqli_fetch_row($result1))
{
 ?>


			<a href="assets/images/<?php echo $row1[1] ?>" data-lightbox="mygallery" data-title=" <h1> <?php echo $row1[2] ?><h1>">		<img src="assets/images/<?php echo $row1[1] ?>">		</a>
			

<?php
}
?>

		</div>

		
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
		<script src="assets/js/jquery.masonry.min.js"></script>
		<script src="assets/js/jquery.history.js"></script>
		<script src="assets/js/js-url.min.js"></script>
		<script src="assets/js/jquerypp.custom.js"></script>
		<script src="assets/js/gamma.js"></script>
		<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.5/index.min.js'></script>

    <script src="assets/js/index.js"></script>
</body>
</html>

