<?php

include("include/header.php");

?>

				<div id="page-wrapper">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">View Category</h1>
						</div>
						<!-- /.col-lg-12 -->
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									View Category
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body">
									<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>No</th>
												<th>Category Name</th>
												<th>Date</th>
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
										
										<?php 
										include("../include/config.php");
										
										$catq="select * from category where cat_pid=0";
										
										$catres=mysqli_query($link,$catq);
										$co=1;
										while($catrow=mysqli_fetch_assoc($catres))
											
										{
										
										echo '<tr class="gradeX">
												<td>'.$co.'</td>
												<td>'.$catrow['cat_nm'].'</td>
												<td>'.date("d-m-y",$catrow['cat_time']).'</td>							
												<td class="center"><a href="category_delete.php?id='.$catrow['cat_id'].'"><img src="../images/close.png" width="30px"/></a></td>
											</tr>';
											$co++;
										}
											
											
										
										?>
											
											
										</tbody>
									</table>
									<!-- /.table-responsive -->
								   
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

include("include/footer.php");

?>