<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

<?php 
include('include/header2.php'); 
error_reporting(0);
session_id();
?>
<?php  //print_r $val[qty] ;
$unm=$_SESSION['client']['unm'];
$reg="select * from register where r_fnm='$unm'";
$regquery=mysqli_query($link,$reg);
$regrow=mysqli_fetch_array($regquery);
$cusrid=$regrow['r_id'];

if(isset($_SESSION['cart']) && (!empty($_SESSION['cart']))){

?>

  <div class="col-md-10 mt-5" >
  <div class="row" >
  	
<div class="col-md-12">
  
    <h2 class="text-center justify-content-center">Your order</h2>
  
   <form action="addtocart.php" method="post">
  
  <?php
 
     
      //$co=1;
      $total=0;
      foreach($_SESSION['cart'] as $id=>$val)
      {
        
        
        
        //$tr=$val['instock']-$val['qty'];

        $rate=$val['qty'] * $val['price'];
        $total=$total+$rate;
        
        //$m=$_SESSION['mesi1'];
    
       

        //$co++;
  
      }
      ?>
      

  <table class="table table-striped w-50 mx-auto  d-flex align-items-center justify-content-center">
    <thead>
      
    </thead>
    <tbody>
      
      </tr>
      <tr>
        <td style="background: red; color:white;"><h5>Your name:</h5></td>
        
        <td style="background: #ff4000; color:white;"><?php if(isset($unm)){echo '<h4>'.$unm.'</h4>';}else{echo 'Hi Guest';} ?></td>
      </tr>
      <tr>
        <td style="background: orange; color:white;"><h5>Your E-mail:</h5></td>
        
        <td style="background: #ff0080; color:white;"><?php echo $cusrid=$regrow['r_email']; ?></td>
      </tr>
       <tr>
        <td  style="background: darkorange; color:white;"><h5>Your Mobile:</h5></td>
        
        <td style="background: gray; color:white;"><?php echo $cusrid=$regrow['r_cno']; ?></td>
      </tr>
      <tr>
        <td style="background: tomato; color:white;"><h5>Your Total Order</h5></td>
        
        <td style="background: blue; color:white;"><?php echo '<h5>'.count($_SESSION['cart']).'</h5>'; ?></td>
      </tr>

      <tr>
        <td style="background: black; color:white;"><h5>Your Sub Total is</h5></td>
        
        <td style="background: orange; color:white;"><?php echo '<h5>'.$total.'<h5>'; ?></td>
      </tr>
      <tr><td colspan="2"><center><a class="btn btn-info" href="login.php">Process to Chekout</a></center></td></tr>
    </tbody>

  </table>
 
      
      
      
    
      </form>
      <?php 
      
      }else{
        
        echo '<div class="col-md-10 align-middle" >

        <h1 class="text-center mt-5">Cart is empty now</h1>
        </div>';
        } 
      
        ?>
  </div><!--col-md-12-->
  <div class="col-md-12"><?php include("login.php"); ?></div>
	      </div><!--row end here-->
      </div><!--card end here-->
		
</div><!--end content here-->
</div>
</div>
</div>
</div>
</div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
 
</body>

</html>
