<!DOCTYPE html>
<html lang="en">
<?php
//error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
echo session_id();
session_start();



?>
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

<body>

<div class="container-fluide">
  <div class="row">
  <div class="col-md-12 pl-2 pr-2 ml-0 mr-0">

<nav class="navbar navbar-expand-sm  bg-dark navbar-dark">
  <a href="" class="navbar-brand">Logo</a>
  <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="test2.php">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart(
        <?php if(isset($_SESSION['cart'])){echo count($_SESSION['cart']); }else{echo 0;}?>)</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php 
               if(isset($_SESSION['client']['status']))
                {
                  echo '<h6>Hi, '.$_SESSION['client']['unm'].'</h6>';
                   echo'<a class="dropdown-item bg-white" href="order.php">My Order</a>';
                }
                ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
               
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
</nav>
  <div class="d-flex">

    <!-- Sidebar -->
    <div class="bg-dark border-left-0" id="sidebar-wrapper">
      <div class="sidebar-heading bg-dark text-white">Category </div>
      <div class="list-group list-group-flush">
       <?php
      include("include/config.php");
      
      $cat_q="select * from category where cat_pid=0";
      
      $cat_res=mysqli_query($link,$cat_q);
      
      while($cat_row=mysqli_fetch_assoc($cat_res))
      {
        
        echo '<a href="category.php?id='.
        $cat_row['cat_id'].'&cat='.$cat_row['cat_nm'].'" class="list-group-item list-group-item-action bg-dark text-white">'.$cat_row['cat_nm'].'</a>';
      }
      ?>
       
      </div>
    
  </div>
    <!-- /#sidebar-wrapper -->
