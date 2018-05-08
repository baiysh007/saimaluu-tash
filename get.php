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
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
       <script src="js/jquery.min.js" type="text/javascript"></script>
       <link rel="stylesheet" type="text/css" href="assets/css/style.css"><script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="assets/js/responsiveCarousel.min.js"></script>
	<title></title>
	 <script language="javascript" type="text/javascript">
  
    function f(s) {
    	
  
        $.ajax({
     
          url: 'response.php?id='+s,
          success: function(data) {
            $('.results').html(data);
          }
        });
		 }

		  function s(s) {
    	
  
        $.ajax({
     
          url: 'response2.php?isled='+s,
          success: function(data) {
            $('.results2').html(data);
          }
        });
		 }

   
    </script>
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
	<div class="container contl"><div class="">
		<div class="cont">
		<h3 class="text-center">
		<?php 
		if (isset($_GET['id'])) 
		{
			echo '	БЛИЖАЙШИЕ СОБЫТИЯ';
		}
		elseif (isset($_GET['isled']))
		{
				echo 'ПОСЛЕДНИЕ ИССЛЕДОВАНИЯ';
		}
		?>	
		</h3>
		<hr>
		<div class="col-md-4">






<?php
		
if (isset($_GET['id']))
{
					
								
 $result2 = mysqli_query($connection, "SELECT * FROM blij_sob");
	while ($row2 = mysqli_fetch_row($result2))
{

?>
			<div class="new"> <p><a onclick="f(<?php echo $row2[0]; ?>)" style="color: black"><i class="fa fa-calendar"></i> <?php echo $row2[2] ?></a> </p>
			</div>
<?php
}			
?>
		</div>

<?php
				
 $result3 = mysqli_query($connection, "SELECT * FROM blij_sob WHERE id=".$_GET['id']);
	while ($row3 = mysqli_fetch_row($result3))
{

?>
		<div class="results">
				<div class="col-md-6">
					<div class="publim"><img src="<?php echo $row3[1] ?>" class="images1"></div>
					<h4><?php echo $row3[2] ?></h4>
					<p><?php echo $row3[3] ?></p>
				</div>
		</div>
<?php
}
}
?>







<?php
		
if (isset($_GET['isled']))
{
					
								
 $result2 = mysqli_query($connection, "SELECT * FROM pos_isled");
	while ($row2 = mysqli_fetch_row($result2))
{

?>
			<div class="new"> <p><a onclick="s(<?php echo $row2[0]; ?>)" style="color: black"><i class="fa fa-calendar"></i> <?php echo $row2[2] ?></a> </p>
			</div>
<?php
}			
?>
		</div>

<?php
				
 $result3 = mysqli_query($connection, "SELECT * FROM pos_isled WHERE id=".$_GET['isled']);
	while ($row3 = mysqli_fetch_row($result3))
{

?>
		<div class="results2">
				<div class="col-md-6">
					<div class="publim"><img src="<?php echo $row3[1] ?>" class="images1"></div>
					<h4><?php echo $row3[2] ?></h4>
					<p><?php echo $row3[3] ?></p>
				</div>
		</div>
<?php
}
}
?>


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
<script type="text/javascript"></script>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.5/index.min.js'></script>

    <script src="assets/js/index.js"></script>
</body>
</html>
