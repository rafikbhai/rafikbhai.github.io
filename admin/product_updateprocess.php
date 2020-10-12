<?php session_start ();

	if(!empty($_POST))
		
		{
			$_SESSION['error']=array();
			extract($_POST);

			
				
				
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
					
				}else{
				
				
					
				
					//echo 'hello else';
					include("../include/config.php");
					
					$t=time();
					$imgnm=$t."_".$_FILES['img']['name'];
					move_uploaded_file($_FILES['img']['tmp_name'],"../pro_img/".$imgnm); //upload cammand
					//echo $_POST['procat'];
					$upid=$_POST['procat'];
					$pnm=$_POST['pnm'];
					$cat=$_POST['cat'];
					$desc=$_POST['desc'];
					$price=$_POST['price'];
					$war=$_POST['war'];
					$instock=$_POST['qun'];

					/*print_r($_POST);
					exit();*/
 $q="update product set p_nm='$pnm', p_desc='$desc', p_price='$price',
						instock='$instock', stockout='$instock', p_img='$imgnm', p_time='$t' where p_cat='$upid'";

					/*$q="insert into product
					(p_nm,p_cat,p_desc,p_price,p_war,p_img,p_time)
					values('$pnm','$cat','$desc',$price,'$war','$imgnm','$t')";*/
					
					mysqli_query($link,$q);
					
			//header("location:product_view.php");
		
}

}

?>