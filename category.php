<?php include('include/header2.php'); ?>
<style>
    img{
      height: 50px; !important;
      width: 50px;
      border:none !important;
      position: relative;
    }
    .card{
      position: absolute;
      text-align: center;
      margin-left: 5px;
      margin-bottom: 5px;
      margin-top: 15px;
      border: 1px solid red;
    }
  </style>
<div class="col-md-10">
  <div class="row">
  	<div class="col-md-12"><!--right sidebar start here-->
  		<div class="row">
  			<h2 class="title"><a href="#"><?php $_GET['cat']; ?></a></h2>
  			<?php
			include("include/config.php");
				$mid=$_GET['id'];

				$scq="select * from Category 
				where cat_pid='$mid'";

				$scres=mysqli_query($link,$scq);
				
				while($scrow=mysqli_fetch_assoc($scres))
					
				{
					$pimg="select * from product where p_cat=".$scrow['cat_id'];
					$pimgres=mysqli_query($link,$pimg);
					$pimgrow=mysqli_fetch_assoc($pimgres);
					if(empty($pimgrow['p_img']))
					{
						continue;
					}

					echo '
		<div class="col-md-4 mt-5">
	<div class="card">
	<a href="product_list.php?id='.$scrow['cat_id'].' &cat='.$scrow['cat_nm'].'" style="text-decoration:none; color:black;">
    <img class="card-img-top img-thumbnail img-fluid image-resize" src="pro_img/'.$pimgrow['p_img'].'" alt="Card image" style="width:75%"></a>
    <div class="card-body" style="margin-top:-70px;">
      <h4 class="card-title">
      <a href="product_list.php?id='.$scrow['cat_id'].' &cat='.$scrow['cat_nm'].'" style="text-decoration:none; color:black;">'.$scrow['cat_nm'].'</a>
      </h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="product_list.php?id='.$scrow['cat_id'].' &cat='.$scrow['cat_nm'].'" class="btn btn-primary">More Product</a>
    </div>
  </div>
  </div>
  ';

}
			?>
  			

					
	
</div>
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
