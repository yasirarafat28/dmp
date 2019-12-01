


				<?php include('inc/header.php');?>
<?php $msg=""; 
	if(isset($_GET['action'])&& isset($_GET['id']) && $_GET['action']=='delete'){
		$action=$_GET['action'];
		$id=$_GET['id'];
		$delete_query="delete from resident  WHERE resident_id='".$id."'";
		
		if(mysqli_query($connect, $delete_query)){
			$msg= 'Deleted Successfully';
		}
		else
		{
			$msg= 'Action Failed';
			
			
		}
	}



	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$occupation=$_POST['occupation'];
		$birthday=$_POST['birthday'];
		$blood=$_POST['blood'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$gender=$_POST['gender'];   
		$father=$_POST['father_name'];
		$mother=$_POST['mother_name'];
		$nid_number=$_POST['nid_number'];
		$resident_type=$_POST['resident_type'];
		$permanent_address=$_POST['permanent_address'];
		$marital_status=$_POST['marital_status'];

		  $submit_query="INSERT INTO `resident`( `name`, `birthday`, `sex`, `blood_group`, `address`, `phone`, `email`, `occupation`,  `father`, `mother`, `nid_number`, resident_type, `permanent_address`, `marital_status`, `active`)


		  VALUES('$name','$birthday','$gender','$blood','$address','$phone','$email','$occupation','$father','$mother','$nid_number','$resident_type','$permanent_address','$marital_status','1')";
		  
		if(mysqli_query($connect,$submit_query))
			
		{
			$msg="Resident Successfully Inserted";
		}
		else{
			$msg='Failed to Action';
		}
	}
	
?>

				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Residents</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Residents</span>
									</li>
								</ol>
							</div>
						</section>

							<div class="container-fluid container-fullw bg-white">
							<div class="row">
							      <a  data-toggle="modal" data-target="#modal-create" href="#" class=" btn btn-primary" title="Add New House" style="border-radius: 0px"><i class="fa fa-plus" aria-hidden="true"></i> Add New Resident</a>

	<hr>

					            <!-- Modal -->
					            <div class="modal fade" id="modal-create">
					              <div class="modal-dialog">
					                <div class="modal-content">
					                  <div class="modal-header">
					                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                      <span aria-hidden="true">&times;</span></button>
					                    <h4 class="modal-title">Add New Resident</h4>
					                  </div>
					                  <div class="modal-body">
					     
					                        <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Name</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="name" type="text" id="name">
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Occupation</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="occupation" type="text">
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Birthday</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="birthday" type="date">
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Gender</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" name="gender" id="">
                                                        	<option>Select an option</option>
															<option value="1">Male</option>
															<option value="2">Female</option>
															<option value="3">Others</option>
                                                        </select>
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Present Address</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="address" type="text">
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Permanent Address</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="permanent_address" type="text">
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Father Name</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="father_name" type="text">
                                                          
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Mother Name</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="mother_name" type="text">
                                                          
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">National ID Number</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="nid_number" type="text">
                                                          
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Email</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="email" type="text">
                                                          
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Phone</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="phone" type="text">
                                                          
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Blood</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="blood" type="text">
                                                          
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Marital Status</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" name="marital_status" id="">
                                                        	<option>Select an option</option>
															<option value="1">Married</option>
															<option value="2">Unmarried</option>
															<option value="2">Divorced</option>
                                                        </select>
                                                          
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Resident type</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" name="resident_type" id="">
                                                        	<option>Select an option</option>
															<option value="flat_owner">Flat Owner</option>
															<option value="renter">Renter</option>
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
											<th>Name</th>
											<th>NID</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Permanent Address</th>
											<th>Present Address</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>				
										<?php
										$sn=0;
										$resident_query="SELECT* FROM resident where active=1";
										$residents=mysqli_query($connect,$resident_query);
										foreach($residents as $resident): ?>
                                    
											<tr>
												<td><?php  echo ++$sn;?></td>					
												
												<td><?php echo $resident['name'];?></td>
												<td><?php echo $resident['nid_number'];?></td>
												<td><?php echo $resident['email'];?></td>
												<td><?php echo $resident['phone'];?></td>
												<td><?php echo $resident['permanent_address'];?></td>
												<td><?php echo $resident['address'];?></td>
												<td>
													
													<div class="btn-group">
														<a href="<?php echo ADMIN_URL."house.php?action=delete&id=".$resident['resident_id'];?>" onclick="return confirm('Are you sure??');">Delete</a>
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
