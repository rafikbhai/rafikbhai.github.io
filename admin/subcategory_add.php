 <?php 
 
 include("include/header.php")
 
 ?>
 
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Sub Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Sub Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="subcategory_process.php" method="post">
                                        <div class="form-group">
                                            <label>Sub Category Name 
											
											<?php
											if(isset($_SESSION['error']['scat']))
											{
												echo '<span class="error">'.$_SESSION['error']['scat'].'</span>';  
											}
											
											
											?>
											<!--<span class="error">Plese Enter Category Name</span>--></label>
                                            <input type="text" name="scat" class="form-control">
											
                                            </div>

                                            <div class="form-group">
                                            <label>Select Category</label>
                                            <select name="cat" class="form-control">
											<?php
											include('include/config.php');
											$c="select * from category where cat_pid=0";
											$query=mysqli_query($link,$c);
											while($rowc=mysqli_fetch_assoc($query)){


											echo '<option value="'.$rowc['cat_id'].'">'.$rowc['cat_nm'].'</option>';

											}	
												?>
											}
											
											</select>
                                            </div>
                                        
                                        <button type="submit" class="btn btn-default">Add Sub Category</button>
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