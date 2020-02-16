

				<?php include('inc/header.php');?>

<?php $msg=""; 


		if(isset($_POST['submit']))
		{
			$house_id=$_POST['house_id'];
			$resident_id=$_POST['resident_id'];
			$flat_details=$_POST['flat_details'];
			$comment=$_POST['comment'];

			//updating status
			$updating_query	=	"UPDATE resident_to_house set status='2' where resident_id='".$resident_id."'";
			mysqli_query($connect,$updating_query);
			
			  $submit_query="INSERT INTO `resident_to_house`(`house_id`, `resident_id`, `flat_no`,`comment`, `status`) VALUES('$house_id','$resident_id','$flat_details','$comment','1')";
			  
			if(mysqli_query($connect,$submit_query))
				
			{
				$msg="Migrated Successfully";
				header('location: migration.php');
			}
			else{
				$msg='Action Failed';
			}
			
		}
	
?>

				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Migrations</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Migrations</span>
									</li>
								</ol>
							</div>
						</section>

							<div class="container-fluid container-fullw bg-white">
							<div class="row">
							      <a  data-toggle="modal" data-target="#modal-create" href="#" class=" btn btn-primary" title="Add New House" style="border-radius: 0px"><i class="fa fa-plus" aria-hidden="true"></i> New Migration</a>

	<hr>

					            <!-- Modal -->
					            <div class="modal fade" id="modal-create">
					              <div class="modal-dialog">
					                <div class="modal-content">
					                  <div class="modal-header">
					                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                      <span aria-hidden="true">&times;</span></button>
					                    <h4 class="modal-title">New Migration</h4>
					                  </div>
					                  <div class="modal-body">
					     
					                        <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">House</label>
                                                    <div class="col-md-6">
                                                        
														<select name="house_id" class="form-control">

															<?php 
															$house_query="SELECT* FROM house where status=1";
															$houses=mysqli_query($connect,$house_query);
															foreach($houses as $house):
															?>
															<option value="<?php echo $house['house_id'];?>"><?php echo $house['name']; ?></option>
															<?php
															endforeach;
															?>
														</select>
													</div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Resident NID</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control"  name="resident_id">
															<?php 
															$resident_query="SELECT* FROM resident where active=1";
															$residents=mysqli_query($connect,$resident_query);
															foreach($residents as $resident):
															?>
															<option value="<?php echo $resident['resident_id'];?>">(<?php echo $resident['nid_number']; ?>)</option>
															<?php
															endforeach;
															?>
														</select>
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Flat Details</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="flat_details" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Comments</label>
                                                    <div class="col-md-6">
                                                        <textarea class="form-control" name="comment" id="" cols="30" rows="6"></textarea>
                                                    </div>
                                                </div>


				                                <div class="form-group">
				                                    <div class="col-md-offset-4 col-md-8">
				                                        <input class="btn btn-primary btnusercreate btnper" type="submit" name="submit" value="Create">
				                                    </div>
				                                </div>

					                        </form>
					                      </div>                    
					                    </div>
					                    <!-- /.modal-content -->
					                  </div>
					                  <!-- /.modal-dialog -->
					                </div>

					                <!--modal end-->

								<table class="table table-bordered table-striped table-hover  dataTable" id="example" >
									<thead>
										<tr>
											<th class="center">#</th>
											<th>House</th>
											<th>Resident Name</th>
											<th>Flat Details</th>
											<th>Comments</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>			
										<?php
										$sn=0;
										$house_query="SELECT*,r.name as resident_name,h.name as house_name FROM resident_to_house rth inner join resident r on(r.resident_id=rth.resident_id) inner join house h on(h.house_id=rth.house_id)";
										$houses=mysqli_query($connect,$house_query);
										foreach($houses as $house): ?>
				                                    
											<tr>
												<td><?php  echo ++$sn;?></td>					
												
												<td><?php echo $house['house_name'];?></td>
												<td><?php echo $house['resident_name'];?></td>
												<td><?php echo $house['flat_no'];?></td>
												<td><?php echo $house['comment'];?></td>
												<td><?php if($house['status']==1){echo 'Active';}else{echo 'Deactive';}?></td>
											</tr>
										<?php endforeach;?>
									</tbody>
								</table>

								
							</div>
						</div>
					</div>
				</div>
			</div>
	<?php include('inc/footer.php');?>
