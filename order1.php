<?php
include('include/header2.php'); 
include("include/config.php");
?>
<div class="col-md-10 mt-5" >
  <div class="row " >
<div class="col-md-12">
	<button class="btn btn-danger " style="margin-left: 900px; margin-top: -80px;"><a href="test2.php" style="text-decoration: none; color:white;">Logout</a></button> <button class="btn btn-success" style="margin-left: 5px; margin-top: -80px;"><a href="order.php" style="text-decoration: none; color:white;">View Order</a></button>

    
    <h2>Product Detail's</h2>
    <table class="table">
    <thead>
       <tr>
        <th>No</th>
        <th>Name</th>
        <th>Image</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Rate</th>
        <th>Status</th>
        </tr>
     
    </thead>
    <tbody>

<?php
$subtotal=0;

//include("include/config.php");
  $con=mysqli_connect("localhost", "root", "", "shopping");
     //echo $_GET['data'];
     if(isset($_GET['data'])){
       //echo $_GET['data'];
      $data=$_GET['data'];
      echo '<p>'.date("d-m-y H:i:s",$data).'<br>'.'</p>';
      $co=1;
   $getview="select * from cus_order where ord_time='$data'";
     $query=mysqli_query($con,$getview);
     while($vrow=mysqli_fetch_array($query)){
      
      //echo $vrow['cp_name'].'<br>';
      $total=$vrow['cp_qty']*$vrow['cp_price'];
     $subtotal=$subtotal+$total;
    
?>
<tr>
  <td><?php echo $co++; ?></td>
  <td><?php echo $vrow['cp_name']; ?></td>
  <td><img src="pro_img/<?php echo $vrow['cp_img']; ?>" width="70"></td>
  <td><?php echo $vrow['cp_qty']; ?></td>
  <td><?php echo $vrow['cp_price']; ?></td>
  <td><?php echo $total; ?></td>
   <td><?php echo $vrow['status']; ?></td>
</tr>

<?php
}

   }

?>
 <td style="text-align:right; color:red; font-size: 24px;" colspan="5"><b>
        Total:</b></td>
        
        <td colspan="2"><b><span style="text-align:right; color:black; font-size: 24px;"><?php echo $subtotal; ?></span></td>
<td><?php //echo $subtotal; ?></td>
</table>

