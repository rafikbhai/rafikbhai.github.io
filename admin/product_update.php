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
			<form role="form" action="product_updateprocess.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Product Name
					
					<?php
					if(isset($_SESSION['error']['pnm']))
					{
						echo '<span class="error">'.$_SESSION['error']['pnm'].'</span>';
					}
					
					
					?>
					</label>
					<input type="hidden" name="procat" value="<?php echo $_GET['pcat']; ?>" class="form-control">
					<input type="text" name="pnm" value="<?php echo $_GET['pnm']; ?>" class="form-control">
					
					</div>
					
					<div class="form-group">
					<label>Category</label>
					
					<select name="cat" class="form-control">
					
						<option><?php echo $_GET['catid'];?></option>
							
					
					
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
					<textarea name="desc" rows="6" class="form-control">
							<?php echo $_GET['pdesc'];?>
					</textarea>
					
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
					<input type="text" name="price" value="<?php echo $_GET['pprice']; ?>"class="form-control">
					
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
					<input type="text" name="qun" value="<?php echo $_GET['qun']; ?>" class="form-control">
					
					</div>
					
					<div class="form-group">
					<label>Warrenty</label>
					</label>
					<select name="war" class="form-control">
					<option><?php echo $_GET['pwar']; ?></option>
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
					<input type="file" name="img"  value="<?php echo $_GET['img']; ?>" class="form-control">
					<br>
					<img src="../pro_img/<?php echo $_GET['img']; ?>" width="60"/>

					</div>
				
				<button type="submit" class="btn btn-default">Update Product</button>
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