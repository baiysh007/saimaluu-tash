<?php
$connection = mysqli_connect("localhost", "root", "", "project");
mysqli_set_charset($connection,'utf8');
header('location:http://project/contact.php');


if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['tema'])&&isset($_POST['sms'])) 
{
	$query = "INSERT INTO contact(name,email,tema,sms) values('".$_POST['name']."','".$_POST['email']."','".$_POST['tema']."','".$_POST['sms']."')"; 
 mysqli_query($connection, $query);

}









?>
