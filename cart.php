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
  <div class="row " >
<div class="col-md-12">
    <h2>Product Table</h2>
              

<?php
 // if(!empty($_SESSION['mesi2']))
 //  {
 //  foreach($_SESSION['mesi2'] as $er);
 //  echo $er;
 //  }else{
 //    echo 'a';
 //  }
?>
   <form action="addtocart.php" method="post">
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Image</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Rate</th>
        <th>Remove</th>
        </tr>
    </thead>
    <tbody>

  <?php
 
     
      $co=1;
      $total=0;
      
      //$_SESSION['mesi1'];
      
      
      //array_push($_SESSION['cart'],$rc);
      //echo '<pre>';
      //print_r($_SESSION);
      foreach($_SESSION['cart'] as $id=>$val)
      {
        
        
        
        $tr=$val['instock']-$val['qty'];

        $rate=$val['qty'] * $val['price'];
        $total=$total+$rate;
        //echo $cart_id;
        //$id=$cart_id;
        //echo $id;
        
        $m=$_SESSION['mesi1'];
    
       echo '<tr>
        <td class="align-middle">'.$co.'</td>
        <td class="align-middle">'.$val['nm'].'</td>
        <td class="align-middle"><img src="pro_img/'.@$val['img'].'" width="70px" /></td>
     
        <td class="align-middle"><input min="1" value="'.$val[
            'qty'].'" name="'.$id.'" id="'.$id.'" type="number" onchange="this.form.submit()" style="width:50px; text-align:cen"  /></td>
        <td class="align-middle">'.@$val['price'].'</td>
        <td class="align-middle">'.$rate.'</td>
        <td class="align-middle"><a href="addtocart.php?id='.$id.'"><span style="margin-left:30px !important;">X</span></a></td>
      
      </tr>';

        $co++;
  
  $p_nm=$val['nm'];
  $p_price=$val['price'];
  $p_img=$val['img'];
  $prods=$val['prods'];
  $qty=$val['qty'];
  $sess=session_id();
  
  
  $u="select * from cart where cart_pid='$prods'";
  $q=mysqli_query($link,$u);
  $count=mysqli_num_rows($q);
  if($count>0){
    
    $cup="update cart set cart_id='$cusrid', cart_pid='$prods', cart_qun='$qty', cart_name='$p_nm', cart_img='$p_img', price='$p_price', cart_price='$rate', sess='$sess' where cart_pid='$prods'";
    $queryup=mysqli_query($link,$cup);    
  }else{
  
  $cq="insert into cart (cart_id,cart_pid,cart_qun,cart_name,cart_img,price,cart_price,sess) 
  values('$cusrid', '$prods', '$qty', '$p_nm', '$p_img','$p_price','$rate','$sess')";
  $q=mysqli_query($link,$cq);

      }
      
      
  
      }

    
      
      
    
    
    


      ?>

      <td style="text-align:right; color:red; font-size: 24px;" colspan="6"><b>
        Total:</b></td>
        
        <td colspan="2"><b><span style="text-align:right; color:black; font-size: 24px;"><?php echo $total; ?></span></td>

    </tbody>

  </table>
  <input class="btn btn-success" type="submit" value="Update Qty" onclick="popUp()" />
      <input class="btn btn-danger" type="submit" name="chekout" value="Chekout"/>
      <a class="btn btn-info" href="login.php">Process to Chekout</a>
      
    
      </form>
      <?php 
      
      }else{
        
        echo '<div class="col-md-10 align-middle" >

        <h1 class="text-center mt-5">Cart is empty now</h1>
        </div>';
        } 
        
        //$_SESSION['mesi1'];
        
        
        ?>
  </div><!--col-md-12-->
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
