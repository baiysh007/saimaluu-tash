

<?php

$connection = mysqli_connect("localhost", "root", "", "project");

mysqli_set_charset($connection,'utf8');

 $result = mysqli_query($connection, "SELECT * FROM blij_sob WHERE id=".$_GET['id']);
    while ($row = mysqli_fetch_row($result))
{
?>

		<div class="col-md-6">
			<div class="publim"><img src="<?php echo $row[1] ?>" class="images1"></div>
			<h4><?php echo $row[2] ?></h4>
			<p><?php echo $row[3] ?></p>
		</div>



<?php
}


?>

</select>
