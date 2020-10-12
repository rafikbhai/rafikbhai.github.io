<!DOCTYPE html>
<html lang="en">
<?php
//error_reporting(0);
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

</head>

<body>

  <div class="d-flex" id="wrapper">

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
