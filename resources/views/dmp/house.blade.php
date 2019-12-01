
				<?php include('inc/header.php');?>

<?php $msg=""; 
	if(isset($_GET['action'])&& isset($_GET['id']) && $_GET['action']=='delete'){
		$action=$_GET['action'];
		$id=$_GET['id'];
		$delete_query="delete from house  WHERE house_id='".$id."'";
		
		if(mysqli_query($connect, $delete_query)){
			$msg= 'Deleted Successfully';
		}
		else
		{
			$msg= 'Action Failed';
			
			
		}
	}
	if(isset($_GET['action'])&& isset($_GET['id']) && $_GET['action']=='verify'){
		$action=$_GET['action'];
		$id=$_GET['id'];
		$delete_query="update house set status='1' WHERE house_id='".$id."'";
		
		if(mysqli_query($connect, $delete_query)){
			$msg= 'Verified Successfully';
		}
		else
		{
			$msg= 'Auction Failed';
			
			
		}
	}



	if(isset($_POST['submit']))
	{
        $sname=$_POST['name'];
		$owner_name=$_POST['owner_name'];
		$area=$_POST['area'];
		$section=$_POST['section'];
		$sector=$_POST['sector'];
		$block=$_POST['block'];
		$zip=$_POST['zip'];
		$overview=$_POST['overview'];
		$status=$_POST['status'];
		$driver_nid=$_POST['driver_nid'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		
		  $submit_query="INSERT INTO `house`( `name`, `owner_name`, `area`, `sector`, `block`, `section`, `zip`, `overview`, `status`, `driver_nid`,username,password)
		  VALUES('$sname','$owner_name','$area','$sector','$block','$section','$zip','$overview','$status','$driver_nid','$username','$password')";
		  
		if(mysqli_query($connect,$submit_query))
			
		{
			$msg="House Successfully Inserted";
			header('location: house.php');
		}
		else{
			$msg=ENTRY_FAILED_MSG;
		}
		
	}
	
?>


				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Houses</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Houses</span>
									</li>
								</ol>
							</div>
						</section>

							<div class="container-fluid container-fullw bg-white">
							<div class="row">
							      <a  data-toggle="modal" data-target="#modal-create" href="#" class=" btn btn-primary" title="Add New House" style="border-radius: 0px"><i class="fa fa-plus" aria-hidden="true"></i> Add New House</a>

	<hr>

					            <!-- Modal -->
					            <div class="modal fade" id="modal-create">
					              <div class="modal-dialog">
					                <div class="modal-content">
					                  <div class="modal-header">
					                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                      <span aria-hidden="true">&times;</span></button>
					                    <h4 class="modal-title">Add New House</h4>
					                  </div>
					                  <div class="modal-body">
					     
					                        <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">House Name</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="name" type="text" id="name">
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Owner Name</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="owner_name" type="text">
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Area</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="area" type="text">
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Sector</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="sector" type="text">
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Section</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="section" type="text">
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Block</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="block" type="text">
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Zip Code</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="zip" type="number" id="name" step="any">
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Overview</label>
                                                    <div class="col-md-6">
                                                        <textarea class="form-control" name="overview"></textarea>
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Username</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="username" type="text">
                                                          
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Driver NID</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="driver_nid" type="text">

                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Password</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="password" type="password">
                                                          
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Status</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" name="status" id="">
                                                        	<option value="1">Available</option>
															<option value="2">Unavailable</option>
                                                        </select>
                                                          
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
											<th>House Name</th>
											<th>Owner Name</th>
											<th>Area</th>
											<th>Block</th>
											<th>Zip Code</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$sn=0;
										$house_query="SELECT* FROM house";
										$houses=mysqli_query($connect,$house_query);
										foreach($houses as $house): ?>
				                                    
											<tr>
												<td><?php  echo ++$sn;?></td>					
												
												<td><?php echo $house['name'];?></td>
												<td><?php echo $house['owner_name'];?></td>
												<td><?php echo $house['area'];?></td>
												<td><?php echo $house['block'];?></td>
												<td><?php echo $house['zip'];?></td>
												<td>
													
													<div class="btn-group">
														<a href="<?php echo ADMIN_URL."house.php?action=delete&id=".$house['house_id'];?>" onclick="return confirm('Are you sure??');">Delete</a>
														<?php if ($house['status']==0) {
															?>
														<a href="<?php echo ADMIN_URL."house.php?action=verify&id=".$house['house_id'];?>" >Verify</a>
														<?php } ?>
													</div>
												</td>
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
