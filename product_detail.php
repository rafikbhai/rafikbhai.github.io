<?php include('include/header2.php'); ?>
  <?php 

$_SESSION["refresh"]="no";

$_SESSION['java']="no";

$id=$_GET['id'];

$pro_q="select * from product, category
  where p_cat=cat_id and p_id=$id";
  
  $pro_res=mysqli_query($link,$pro_q);
  
  $pro_row=mysqli_fetch_assoc($pro_res);  
  
?>
  <div class="col-md-10 mt-5" >
  <div class="row " >
	<div class="col-md-10 ml-5"><!--right sidebar start here-->
  		<div class="card">
  		<div class="row" >

        <div class="col-md-4">
				<img src="pro_img/<?php echo $pro_row['p_img']; ?>" class="img-fluid">
      </div>
      <div class="col-md-8" >
        <h1 class="text-danger"><?php echo $pro_row['p_nm']; ?></h1>
      <h5><?php echo $pro_row['p_desc']; ?></h5>
      <h2>Rs.<?php echo $pro_row['p_price']; ?></h2>
      <h4>Warranty : <?php echo $pro_row['p_war']; ?></h4>
      <h4>Available : <?php if($pro_row['instock']<=0){ echo 'Stockout'; }else{ echo $pro_row['instock']; } ?></h4>

      <?php 
        
  
        $is_cart=0;
        if(isset($_SESSION['cart'])){ // yaha pura session variable ko isset command me store karna nahi to error aayegi
        foreach($_SESSION['cart'] as $id=>$val)
        {
          
          if(@$val['img']==$pro_row['p_img'])
          
          {
            
            $is_cart=1;
            break;
          }
        
        }
        }
        if($is_cart==0 && !$pro_row['instock']<=0)
        {
        
        echo '<a href="addtocart.php?pid='.
        $pro_row['p_id'].'"class="btn btn-success">Add
        to Cart</a>';
        
        }
  
        else
        
        {
          if(!$pro_row['instock']<=0){
          echo "<center style=color:white;><h2 style=background-color:red;>Allredy in the cart</h2></center>";
          }else{ 
          echo '<a href="index.php"class="btn btn-info">Continue Shopping</a>';
          }
          
          
        }
  
        ?>
        
      </div><!--col-md-8 end here-->
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
