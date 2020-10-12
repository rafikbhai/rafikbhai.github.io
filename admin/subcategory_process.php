<?php session_start ();
if(!empty($_POST))
{
	$_SESSION['error']=array();
	extract($_POST);
	
	if(empty($scat))		
		
		{
			$_SESSION['error']['scat']="<font color='red' style='padding:20px;' >Plese Enter Sub Category Name</font>";
		}
		
		if(!empty($_SESSION['error']))
		{
			header("location:subcategory_add.php");
		}
		else
		{
			include("../include/config.php");
			
			$t=time();
			
			$q="insert into category
			(cat_nm, cat_pid, cat_time)
			values('$scat','$cat', '$t')";
			
			mysqli_query($link,$q);
			header("location:subcategory_add.php");
		}
}
else
{
	
	header("location:subcategory_add.php");
	
}


?>