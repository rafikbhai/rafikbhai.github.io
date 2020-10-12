<?php

include("include/header.php");
include("include/function.php");
//echo $_GET['eid']

?>

				<div id="page-wrapper">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">View Product</h1>
						</div>
						<!-- /.col-lg-12 -->
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									Product list
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body">
									<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>No</th>
												<th>Product Name</th>
												<th>Category</th>
												<th>subcategory</th>
												<th>Image</th>
												<th>Price</th>
												<th>Action</th>
												<th>Edit</th>
												
											</tr>
										</thead>
										<tbody>
										
										<?php 
										include("../include/config.php");
										
										$proq="select * from product,category where p_cat=cat_id";
										
										$prores=mysqli_query($link,$proq);
										$co=1;
										while($prorow=mysqli_fetch_assoc($prores))
											
										{
										
										echo '<tr class="gradeX">
												<td>'.$co.'</td>
												<td>'.$prorow['p_nm'].'</td>
												<td>'.$prorow['cat_nm'].'</td>
												<td>'.$prorow['p_cat'].'</td>

												<td><img src="../pro_img/'.$prorow['p_img'].'" width="60"/></td>
												
												<td>'.$prorow['p_price'].'</td>
												<td class="center"><a href="product_delete.php?id='.$prorow['p_id'].'"><img src="../images/close.png" width="30px"/></a></td>
												<td><a href="product_update.php?pnm='.$prorow['p_nm'].',&catid='.$prorow['cat_nm'].',
													&pdesc='.$prorow['p_desc'].',&pprice='.$prorow['p_price'].',&qun='.$prorow['instock'].', &pwar='.$prorow['p_war'].',&img='.$prorow['p_img'].'&pcat='.$prorow['p_cat'].'">Edit</a></td>
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