<?php

include("../include/config.php");

$id=$_GET['id'];

$q="delete from product
	where p_id=$id";
	
	mysqli_query($link,$q);
	
	header("location:product_view.php");


?>