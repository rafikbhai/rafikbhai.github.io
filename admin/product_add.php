 <?php 
 
 include("include/header.php");
 
 ?>
 
 
 <div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Product</h1>
		</div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
		<div class="row">
		<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
					Add New Product
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-12">
			<form role="form" action="product_process.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Product Name
					
					<?php
					if(isset($_SESSION['error']['pnm']))
					{
						echo '<span class="error">'.$_SESSION['error']['pnm'].'</span>';
					}
					
					
					?>
					</label>
					<input type="text" name="pnm" class="form-control">
					
					</div>
					
					<div class="form-group">
					<label>Category</label>
					
					<select name="cat" class="form-control">
					<?php 
					include("../include/config.php");
					
					$cq="select * from category where cat_pid=0";
					
					$cres=mysqli_query($link,$cq);
					
					while($crow=mysqli_fetch_assoc($cres))
					{
						echo '<optgroup label="'.$crow['cat_nm'].'">';

						$pid=$crow['cat_id'];
						$scq="select * from category where cat_pid='$pid'";
						$scres=mysqli_query($link,$scq);
						while ($scrow=mysqli_fetch_assoc($scres)) {
						echo '<option value="'.$scrow['cat_id'].'">'.$scrow['cat_nm'].'</option>';
							
						}


						echo '</optgroup>';
					}
					
					?>
					
					</select>
					</div>
					
					
					<div class="form-group">
					<label>Fetures :
					
					<?php
					if(isset($_SESSION['error']['desc']))
					{
						echo '<span class="error">'.$_SESSION['error']['desc'].'</span>';
					}
					
					
					?>
					<!--<span class="error">Plese Enter Category Name</span>--></label>
					<textarea name="desc" rows="6" class="form-control"></textarea>
					
					</div>
					
					
					<div class="form-group">
					<label>Product Price
					
					<?php
					if(isset($_SESSION['error']['price']))
					{
						echo '<span class="error">'.$_SESSION['error']['price'].'</span>';
					}
					
					
					?>
					</label>
					<input type="text" name="price" class="form-control">
					
					</div>

					<div class="form-group">
					<label>Quntity
					
					<?php
					if(isset($_SESSION['error']['quntity']))
					{
						echo '<span class="error">'.$_SESSION['error']['price'].'</span>';
					}
					
					
					?>
					</label>
					<input type="text" name="qty" class="form-control">
					
					</div>
					
					<div class="form-group">
					<label>Warrenty</label>
					</label>
					<select name="war" class="form-control">
					<option>No Warrenty</option>
					<option>1 Month</option>
					<option>2 Month</option>
					<option>3 Month</option>
					<option>4 Month</option>
					<option>5 Month</option>
					<option>6 Month</option>
					<option>7 Month</option>
					<option>8 Month</option>
					<option>9 Month</option>
					<option>10 Month</option>
					<option>1 Year</option>
					<option>2 Year</option>
					<option>3 Year</option>
					<option>5 Year</option>
					<option>6 Year</option>
					<option>7 Year</option>
					<option>8 Year</option>
					<option>9 Year</option>
					<option>10 Year</option>
					<option>Life Time</option>
					</select>
					</div>
					
					<div class="form-group">
					<label>Product Image
					<?php
					if(isset($_SESSION['error']['cat']))//Aa Akhi php coding ne comment karta ke kadhi nakhta image file image folder ma upload thase nahi tuk ma image dekhase nahi karam ke te tya upload thaij nathi
					{
						echo '<span class="error">'.$_SESSION['error']['cat'].'</span>';
					}
					
					
					?>
					
					</label>
					</label>
					<input type="file" name="img" class="form-control">
					
					</div>
				
				<button type="submit" class="btn btn-default">Add Product</button>
				<button type="reset" class="btn btn-default">Reset</button>
			</form>
			
			
		<?php   
		unset($_SESSION['error']);

		?>
		</div>
		<!-- /.col-lg-6 (nested) -->

		</div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
		
		
		 <?php 
 
 include("include/footer.php")
 
 ?>