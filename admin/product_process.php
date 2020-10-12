<?php session_start ();
	
	if(!empty($_POST))
		
		{
			$_SESSION['error']=array();
			extract($_POST);
			
			if(empty($pnm))
				
				{
					$_SESSION['error']['pnm']="<font color='red' style='padding:20px;' >Plese Enter Product Name</font>";
				}
				
			if(empty($desc))
				
				{
					$_SESSION['error']['desc']="<font color='red' style='padding:20px;' >Plese Enter Product Fetures</font>";
				}
				
				if(empty($price))
				
				{
					$_SESSION['error']['price']="<font color='red' style='padding:20px;' >Plese Enter  Price</font>";
				}
				
				else if(! is_numeric($price))
				{
					
				$_SESSION['error']['price']="<font color='red' style='padding:20px;' >Plese Enter Product Numeric Price</font>";
				
				}
				
				//image validation Start Here
				$ext=strtoupper(substr($_FILES['img']['name'],-4));
				if(empty($_FILES['img']['name']))
				{

					$_SESSION['error']['img']="<font color='red' style='padding:20px;' >plese select image</font>";

				}			
				
				//image extension validation
				else if(!($ext==".JPG"  || $ext==".PNG" || $ext==".JPEG" || $ext==".GIF"))
				{
					$_SESSION['error']['img']="<font color='red' style='padding:20px;' >Wrong image type</font>";
					
				}
				
				
			if(!empty($_SESSION['error']))
				
				{
					header("location:product_add.php");
				}	
				
				else
				{
					include("../include/config.php");
					
					$t=time();
					$imgnm=$t."_".$_FILES['img']['name'];
					move_uploaded_file($_FILES['img']['tmp_name'],"../pro_img/".$imgnm); //upload cammand
					
					$q="insert into product
					(p_nm,p_cat,p_desc,p_price,instock,stockout,p_war,p_img,p_time)
					values('$pnm','$cat','$desc',$price,$qty,$qty,'$war','$imgnm','$t')";
					
					mysqli_query($link,$q);
					
					header("location:product_add.php");
				}
		}
		else
		{
			header("location:product_add.php");
		}


?>