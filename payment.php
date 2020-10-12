<?php
session_start();
if(empty($_SESSION['cart'])){
  header("location:order.php");
  }/*else{
     header("location:payment.php");
  }*/

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
  <!-- <link href="css/simple-sidebar.css" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" type="text/css" href="hvc_style.css"> -->
<style>
  .login-container{
    height: 100vh;
    width: 100%;
  }
</style>
</head>
<body>
	<div class="container-fluid">
	<div class="row">

       <div class="login-container col-md-12 parent-div d-flex align-items-center justify-content-center">
       	<div class="col-md-6" style="border: 1px solid gray; width: 400px;">
      

    <div class="col-md-12 text-center">  
<h1>Process To Payment</h1>
</div>
<div class="col-md-12">
<form method="post" action="shaikh.php">
	<div class="form-group">
	 <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="radio" checked> Add Debit/Credit/ATM Card
    </label>
  </div>
</div>

<div class="form-group">
	 <div class="form-group form-check">
    <label class="form-check-label">
  	<input class="form-check-input" type="radio" >Net Banking</label><br>
  	<select name="#">
		<option>ICICI Bank</option>
		<option>Bank of India</option>
	</select>
  </div>
</div>
</div>
	
<br><br>

	<div class="form-group">
	 <div class="form-group form-check">
    <div class="row">
    <div class="col-md-3">
	 	    <label class="form-check-label">
<input class="form-check-input" type="radio"  name="radio">Check Payment</label>
</div>
<div class="col-md-9">
  <input type="text" name="check Payment" value="Enter Check No.">
<br><br>
</div>
</div>
</div>
</div>

	<div class="form-group">
	 <div class="form-group form-check">
    <div class="row">
      <div class="col-md-3">
	 	    <label class="form-check-label">
<input class="form-check-input" type="radio"  name="radio">Bank Payment</label>
</div>
<div class="col-md-9">
  <input type="text" name="check Payment" value="Enter Transaction ID.">
</div>
</div>
</div>

<div class="form-group">
	 <div class="form-group form-check">
	 	    <label class="form-check-label">
<input class="form-check-input" type="radio" name="radio">Cash On Delivery</label><br><br>
<center>
<input type="submit" name="submit" value="Payment">
</center>
</form>
</div>
</div><!--row-->
</div>
    <!-- /#page-content-wrapper -->

 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
 

</body>

</html>

