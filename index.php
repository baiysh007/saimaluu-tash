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
     <div class="container navbar-default">
     
     	<ul class="nav navbar-nav">
     							<ul class="nav navbar-nav ">
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
	<div class="bg">
		<div class="container contl">
			
		
	<br>
	<br>
	<br>
<?php
				
 $result1 = mysqli_query($connection, "SELECT * FROM glav_text ");
	while ($row1 = mysqli_fetch_row($result1))
{

?>
	<img src="<?php echo $row1[1] ?>" class="prof" >
	<div class=" publ">
	<h3 class="name"><?php echo $row1[2] ?></h3> 
    <p><?php echo $row1[3] ?></p>
    <p><a href="about.php" class="btn btn-primary btn-lg" role="button">Узнать больше</a></p>

<?php
}
?>	
	</div>
	<br>
	<br>
	<br>
	<br>
	
	
	
		</div>
	</div>


<div class="">
	<div class="container bgcont">
		<div class="cont">
			<p ><h3 class="text">ПОСЛЕДНИЕ ИССЛЕДОВАНИЯ</h3></p>
			<hr>

<?php
				
 $result3 = mysqli_query($connection, "SELECT * FROM pos_isled");
	while ($row3 = mysqli_fetch_row($result3))
{
?>

			<div class="news2">
				<img src="<?php echo $row3[1] ?>" class="photo">
				<p class="text4"><i class="fa fa-eye"></i>95 <a href="get.php?isled=<?php  echo $row3[0]; ?>" class="acolor">Ч<?php echo $row3[2] ?></a></p>
			</div>
<?php
}
?>			
			

		</div>
		
	</div>
	
	
</div>
<div class="">

	<div class="row">
	<div class="container contl">
		
		
		<p ><h3 class="text">КНИГИ</h3></p>
		<hr>
			<div class="cont">
				<div class="sli">
					<div class="carousel slide" id="myCarousel" data-interval="" data-ride="carousel">
			
						<div class="carousel-inner">


							<?php
											
							 $result4 = mysqli_query($connection, "SELECT * FROM books");
								while ($row4 = mysqli_fetch_row($result4))
							{
							?>

							<div <?php  if ($row4[4]==1) {echo 'class="active item"';}else{echo 'class="item"';} ?>><img src="<?php echo $row4[1] ?>" class="img">
												<div class="carousel-caption">
													<h3><?php echo $row4[2] ?></h3>
													<p><?php echo $row4[3] ?>
													</p>

												</div>	
											</div>
							<?php		
							}
							?>		

						</div>


<a class="carousel-control left" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"> </span>
			</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"> </span>
			</a>
			</div>

		</div>

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
</div>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.5/index.min.js'></script>

    <script src="assets/js/index.js"></script>

</body>
</html>