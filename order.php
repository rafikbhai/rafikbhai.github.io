<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

<?php 
include('include/header2.php'); 
include("include/config.php");

//error_reporting(0);
//session_id();
?>
<?php  //print_r $val[qty] ;
/*$unm=$_SESSION['client']['unm'];
$reg="select * from register where r_fnm='$unm'";
$regquery=mysqli_query($link,$reg);
$regrow=mysqli_fetch_array($regquery);
$cusrid=$regrow['r_id'];

if(isset($_SESSION['cart']) && (!empty($_SESSION['cart']))){
*/  

?>

  <div class="col-md-10 mt-5" >
  <div class="row " >
<div class="col-md-12">
  <style>
    .b{
      list-style: none;
      text-decoration: none;
      margin-left:995px;
      border-radius:5px;
    }
    button{
      border-radius: 5px;
    }
  </style>
  <button class="btn btn-danger" style="margin-left: 1000px; margin-top: -80px;"><a href="test2.php" style="text-decoration: none; color:white;">Logout</a></button>
    <h2>Your Order's</h2>

              <table class="table">
    <thead class="bg-dark text-white">
       <tr>
        <th>No</th>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Mobile No.</th>
        <th style="text-align:center; width: 300px;">Address</th>
        <th>invoice No</th>
        <th>Date Booked</th>
        </tr>
     
    </thead>
    <tbody>

<?php
//echo 'random No Code here :-' .rand(1,5).'<br>';
//echo 'Date Formate code here '.date("d-m-y H:i:s",1595657095);//date formate via database
 
$co=1;
$subtotal=0;
$view="select distinct ord_time, datatime, instock, cus_id from cus_order where ord_time";
$query=mysqli_query($link,$view);
while($row=mysqli_fetch_array($query)){
  $d=$row['cus_id'];
 $rd=$row['datatime'];
  //$unm=$_SESSION['client']['unm'];
$reg="select * from register where r_id='$d'";
$regquery=mysqli_query($link,$reg);
$regrow=mysqli_fetch_array($regquery);
$cusrunm=$regrow['r_unm'];
$cusremail=$regrow['r_email'];
$cusrcno=$regrow['r_cno'];

  //echo $row['cp_name'];
  //$total=$row['cp_qty']*$row['cp_price'];
  //$subtotal=$subtotal+$total;
?>
<tr>
  <td><?php echo $co++; ?></td>

  <td><?php echo $cusrunm; ?></td>

  <td><?php echo $cusremail; ?></td>
  <td><?php echo $cusrcno; ?></td>
  <td>2211/1, Kadiwala Building, Khanpur Kalyaniwad Near Ptharwali Maszied Ahmedabad-380001</td>
  <td align="center"><?php echo $row['instock']; ?></td>
  <td><a href="order1.php?data=<?php echo $row['ord_time']; ?>"><?php echo date("d-m-y h:i:s A",$row['ord_time']); ?></a></td>
<?php } ?>
</tr>
<tr>

<!-- <td  colspan="6"><h4 style="margin-left: 768px;"><font color="red">Subtotal</font> <?php //echo $subtotal; ?></h4></td> -->


</tr>


    </tbody>

  </table>
  
      
    
   
     
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
