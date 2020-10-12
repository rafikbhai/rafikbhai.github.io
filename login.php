<?php
session_start();
if(isset($_SESSION['client']['status']))
		{
			header("location:payment.php");
		}/*else{
			header("location:login_process.php");
		} */
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="hvc_style.css"> -->

</head>
<style>
	.login-container{
		height: 100vh;
		width: 100%;
	}
.login-form{
	max-width: 100%;
	width: 370px;
	padding: 15px;
	margin: auto;
}
.form-control{
	font-size: 15px;
	min-height: 48px;
	font-weight: 500px;
}

.form-control-focus{
	border-color: #723dbe;
	box-shadow: 0 0 0 0.2rem rgb(114,61,190,.25);
}

.forgot-link{
	font-size: 14px;

}
.forgots{
	color: red;
	list-style: none;
	text-decoration: none;
}

.forgots:hover{
	font-weight: bold;
	list-style: none;
	text-decoration: none;
	color: red !important;

}
.forgot-link label{
	margin-bottom: 0px;
	list-style: none;
	text-decoration: none;
}
</style>
<body>
    <!-- Page Content -->

    

	
      

      <div class="container-fluid">
       <div class="login-container d-flex align-items-center justify-content-center">
       	<form method="post" action="login_process.php" class="login-form text-center">
       		<h1 class="mb-5 font-weight-light text-uppercase">Login</h1>
       		<p>
       			<?php 
		if(! empty($_SESSION['error']))
		{
			foreach($_SESSION['error'] as $er)
			{
				echo'<font color="red">'.$er.'</font><br/>';
			}
			
			unset($_SESSION['error']);
		}
		
		?>
       		</p>
       		<div class="form-group">
       			<input type="text" name="unm" value="<?php if(isset($_COOKIE['name'])){ echo $_COOKIE['name']; }else{} ?>" class="form-control rounded-pill form-control-md" placeholder="Username">
       		</div>
       		<div class="form-group">
       			<input type="password" name="pwd" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password']; }else{} ?>" class="form-control rounded-pill form-control-md" placeholder="password">
       		</div>
       		<div class="forgot-link d-flex align-items-center justify-content-between">
       			<div class="form-check">
       				<input type="checkbox" name="remember" <?php if(isset($_COOKIE['name'])) { ?>checked <?php } ?> class="form-check-input rounded-pill form-control-md" id="remember">
       				<label for="remember">Remember Password</label>
       			</div>
       			<a href="#" class="forgots" >Forgot Password?</a>
       		</div>
       		<button type="submit" class="btn btn-primary btn-block rounded-pill btn-md">Login</button>
       		<p class="mt-3 font-weight-normal">Don't have an account <a href="#">Register Now</a></p>
       	</form>

       </div>
    </div>
    <!-- /#page-content-wrapper -->

 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
 

</body>

</html>
 