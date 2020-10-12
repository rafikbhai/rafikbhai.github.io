<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">	

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
	
</script>

<?php session_start();

if(isset($_SESSION['refresh'])){

	if(isset($_GET['pid']))
	{
		include("include/config.php");
		$proid=$_GET['pid'];
		$q="select * from product where p_id=$proid";
			
			$res=mysqli_query($link,$q);
			
		while($row=mysqli_fetch_assoc($res)){
			
			//$name=$row['p_nm'];
		/* $_SESSION['cart'][]=array("nm"=>$row['p_nm']);
		echo '<pre>';
		print_r($_SESSION);
		echo '</pre>';	 */
		
		 $_SESSION['cart'][]=array('nm'=>$row['p_nm'],'price'=>
		$row['p_price'], 'instock'=>$row['instock'], 'stockout'=>
		$row['stockout'], 'img'=>$row['p_img'], 'prods'=>$row['p_id'], 'qty'=>1	);
		/* if(isset($_POST['chekout'])){
		foreach($_SESSION['cart'] as $id=>$val){
	$prods=$val['prods'];
	$p_nm=$val['nm'];
	$p_price=$val['price'];
	$p_img=$val['img'];
	$qty=$val['qty'];
	echo $prods;
		
		$cq="insert into cart (c_id, cart_id, cart_qun, cart_name, cart_img, cart_price) 
					value('', '$prods', '$qty', '$p_nm', '$p_img', '$p_price')";
					$q=mysqli_query($link,$cq);
					
		}
		} */
		}
	
	}
	unset($_SESSION['refresh']);
}
	
	else if(!empty($_POST))
	{
		$_SESSION['mesi1']=array();
		//$rty=$_SESSION['mesi1']='cant Update';
			
		foreach($_POST as $id=>$qty )
		{
		if($qty>$_SESSION['cart'][$id]['instock']){
			$_SESSION['mesi2'][]=$_SESSION['cart'][$id]['instock'];//instock me kitni quntity hay wo batayega
			$acd=$_SESSION['cart'][$id]['instock']-$_SESSION['cart'][$id]['qty'];//How much quntity in stocks
			$gh=$_SESSION['cart'][$id]['instock'];
		$_SESSION['mesi1'][$id]='<div class="alert alert-success text-center  w-50 ml-auto" 
		role="alert" style="margin-top:13px;">
	<script>swal("'.$gh.'")</script>
	</div>';




			
		
		
		

			
			$_SESSION['cart'][$id]['qty'];

		}else{
			$_SESSION['cart'][$id]['qty']=$qty;

		}
		
		}

		//unset($_SESSION['mesi1']['id']);
	}
	else if(isset($_GET['id'])){
		
		$id=$_GET['id'];
		
		unset($_SESSION['cart'][$id]);
	//unset($_SESSION['cart'][$q]);
	}
	header("location:cart.php");
	
		
	
?>


</body>
</html>
