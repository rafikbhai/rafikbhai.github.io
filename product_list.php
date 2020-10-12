<?php include('include/header2.php'); ?>
<style>

    .card img{
    	position: absolute;
    	width: 100%;
      height: 100% !important;
      border:none !important;

    }
   .box1{
   	position: relative;
   	height: 100px;
   	margin: auto;
   	margin-top: 10px;
   	height: 210px;
   	border: none;
   }

    .box1 img{
   	object-fit: contain;
   	position: relative;
   	max-height: 100%;
   	border: none;
   }
    .card{
      text-align: center;
      margin-left: 0px;
      margin-top: 5px;
      margin-bottom: 5px;
      border:none;
    }
  </style>
  <div class="col-md-10 mt-5" style="flex:9;" >
  <div class="row align-content-end" >
	<div class="col-md-12 "><!--right sidebar start here-->
  		<div class="row ">

  		
				<?php 
				include("include/config.php");
				
				@$id=$_GET['id'];
				
				$lq="select * from product where p_cat=$id";
				$lres=mysqli_query($link,$lq);
				
				while($lrow=mysqli_fetch_assoc($lres))
				{
					echo '
					<div class="col-md-3 justify-content-center">
						<div class="card  style="width:200px;">

							<a href="product_detail.php?id='.$lrow['p_id'].'" style="text-decoration:none; color:red;">
									<div class="box1"><img class="card-img-top img-thumbnail img-fluid image-resize" src="pro_img/'.$lrow['p_img'].'" style="width:100%">
									</div>
							<div class="card-body">
									<h4 class="card-title">'.$lrow['p_nm'].'</h4>
									
      									
									<p style="color:black; font-weight:bold; font-size:18px;">Rs.'.$lrow['p_price'].'</p>
									<p style="color:green; margin-top:-15px; font-weight:bold; font-size:18px;">'.$lrow['p_desc'].'</p>

									</div>
									</a>

							</div>
							</div>';
				}
				
				?>
			
		
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
