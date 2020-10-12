<?php session_start ();

if(!empty($_POST))
{
	$_SESSION['error']=array();
	extract($_POST);
	
	if(empty($cat))		
		
		{
			$_SESSION['error']['cat']="<font color='red' style='padding:20px;' >Plese Enter Category Name</font>";
		}
		
		if(!empty($_SESSION['error']))
		{
			header("location:category_add.php");
		}
		else
		{
			include("../include/config.php");
			
			$t=time();
			
			$q="insert into category
			(cat_nm,cat_time)
			values('$cat','$t')";
			
			mysqli_query($link,$q);
			header("location:category_add.php");
		}
}
else
{
	
	header("location:category_add.php");
	
}


?>