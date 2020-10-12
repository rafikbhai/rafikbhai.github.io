<?php
session_start();
if(isset($_SESSION['client']['status']))
		{
			header("location:payment.php");
		}
//session_destroy();
if(! empty($_POST))
{
	extract($_POST);
	$_SESSION['error']=array();
	
	if(empty($unm) || empty($pwd))
	{
		$_SESSION['error'][]="Plese enter username or password";
		header("location:login.php");
	}
	else
	{
		
		include("include/config.php");
		
		$q="select * from register
			where r_unm='$unm'
			and r_pwd='$pwd'";
			
			$res=mysqli_query($link,$q);
			
			$row=mysqli_fetch_assoc($res);		
			if($row){
				if(!empty($_POST['remember'])){
					setcookie(name,$unm,time() + (1 * 60 * 60));
					setcookie(password,$pwd,time() + (1 * 60 * 60));
					$_SESSION['r_unm']=$unm;
					
				}else{
					if(isset($_COOKIE['name']))
					{
						setcookie('name','');
					}
				}
			}
			if(! empty($row))
			{
				$_SESSION['client']['unm']=$row['r_fnm'];
				$_SESSION['client']['id']=$row['r_id'];
				$_SESSION['client']['status']=true;

				
				header("location:payment.php");

			}
			else
			{
				$_SESSION['error'][]="Wrong Username or Password";
				header("location:login.php");
			}
	}
} 
else
{

header("location:cprocess.php");

}


?>