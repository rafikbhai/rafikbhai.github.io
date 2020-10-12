<?php
session_start();
error_reporting(0);
include("include/config.php");
//echo $p_nm=$val['nm'];
/* $cusord="select * from cus_order where cus_id='$cusrid'";
$cusquery=mysqli_query($link,$cusord);
$trow=mysqli_fetch_array($cusquery);
$cusid=$trow['cus_id']; */

$unm=$_SESSION['client']['unm'];
$reg="select * from register where r_fnm='$unm'";
$regquery=mysqli_query($link,$reg);
$regrow=mysqli_fetch_array($regquery);
$cusrid=$regrow['r_id'];

$con=mysqli_connect("localhost","root", "", "shopping");
echo $_SESSION['client']['unm'];
echo '
<center>
<table border="1">
<tr>
<th>id</th>
<th>cart_id</th>
<th>cart_pid</th>
<th>cart_qun</th>
<th>cart_name</th>
<th>cart_img</th>
<th>price</th>
<th>cart_price</th>
<th>sess</th>
</tr>';
$rno=rand(1,100);
$sel="select * from cart,product where cart_pid=p_id";
$query=mysqli_query($con,$sel);
$row=mysqli_num_rows($query);
while($row=mysqli_fetch_array($query)){ // 1 FIRST WHILE LOOP HERE START
	//echo $row['c_id'];
		$cid=$row['c_id'];
		$cartid=$row['cart_id'];
		$cartpid=$row['cart_pid'];
		$cartqun=$row['cart_qun'];
		$cartname=$row['cart_name'];
		$cartimg=$row['cart_img'];
		$price=$row['price'];
		$cartprice=$row['cart_price'];
		$cartsess=$row['sess'];

		$vd=$price*$cart_qun;
		
	echo '
		<tr>
		<td>'.$cid.'</td>
		<td>'.$cusrid.'</td>
		<td>'.$cartpid.'</td>
		<td>'.$cartqun.'</td>
		<td>'.$cartname.'</td>
		<td>'.$cartimg.'</td>
		
		<td>'.$price.'</td>
		<td>'.$cartprice.'</td>
		<td>'.$cartsess.'</td>
		</tr>
		';
		
		//select query chalavi check karo data che ke nahi cus_order tablema
		//jo hoy to Update query chalavi Update karo data ne
		//tyar bad data insert karavo je niche mujab kareloj che. rit cart pej ma che
		/*foreach ($_SESSION['cart'] as $id => $val) {//remove session here just insert is ok
			$prods2=$val['prods'];
		}*/

		/*$prods2=$val['prods'];
		$du="select * from cus_order where cus_proid='$prods2' and id ";//remove select query here
		$vd=mysqli_query($link,$du);
		$vdrow=mysqli_num_rows($vd);
		echo 'countrow'.$vdrow;
if($vdrow > 0){
while ($ddrow=mysqli_fetch_array($vd)) {
			$yt=$cartqun+$ddrow['cp_qty'];
			$multi=$yt*$ddrow['cp_price'];
		
		
		$tu="update cus_order set cp_qty='$yt', cp_rate='$multi' where cus_proid='$prods2' and id";//remove update query here
		$gv=mysqli_query($link,$tu);
echo 'Update'.$yt.'<br>';
echo 'multi'.$multi.'<br>';
unset($_SESSION['cart']);
}*/
//}else{

	echo 'insert';//jus insert qury is ok dont remove this is final and fetch all customer data to other page note here
	$t=time();
		$cusq="insert into cus_order(cus_id,cus_proid,cp_name,cp_img,cp_qty,cp_price,cp_rate,instock,sess,ord_time) 
		 values('$cusrid','$cartpid','$cartname','$cartimg','$cartqun','$price','$cartprice','$rno','$cartsess',$t)";
	$cusq=mysqli_query($link,$cusq);
	//unset($_SESSION['cart']); //bhulsebhi ye session active matkarna nahi to quntity minus nahi 								hogi please disable or not run unset($_SESSION['cart']); command here
							
//}

	} //1 FIRST WHILE LOOP END HERE		
		foreach($_SESSION['cart'] as $id=>$val){ // 2 SECOND FOREACH LOOP START HERE
			$prods=$val['prods'];
			//echo $prods;
			$qty=$val['qty'];
			
			$min=$val['instock']-$qty;
			
		
		

	$cusord="select * from product where p_id='$prods'";
			$cuquery=mysqli_query($link,$cusord);
			$count=mysqli_num_rows($cuquery);
			if($count>0){

		while($ttrow=mysqli_fetch_array($cuquery)){

			
					
		$up="update product set instock='$min', stockout='$min' where p_id='$prods'";
		$uquery=mysqli_query($link,$up); 
		//break;
			
			} //PRODUCT WHILE LOOP END HERE
			
			
			}//PRODUCT IF CONDITION END HERE
} // 2 SECOND FOREACH LOOP END HERE
		
		
	
	
	
	$cart="delete from cart";
	$cartq=mysqli_query($link,$cart);

/*$cg="create table st(
	 select * from cus_order)";
	 $mquery=mysqli_query($link,$cg);
*/
	 /*$cart1="delete from cus_order";
	$cartq1=mysqli_query($link,$cart1);*/
unset($_SESSION['cart']);
	header("location:order.php");
	

?>