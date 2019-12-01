@extends('layouts.app_dmp')

@section('content')


    <div class="main-content" >
					<div class="wrap-content container" id="container">
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Users</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Users</span>
									</li>
								</ol>
							</div>
						</section>

							<div class="container-fluid container-fullw bg-white">
							<div class="row">
							      <a  data-toggle="modal" data-target="#modal-create" href="#" class=" btn btn-primary" title="Add New House" style="border-radius: 0px"><i class="fa fa-plus" aria-hidden="true"></i> Add New User</a>

					            <!-- Modal -->
					            <div class="modal fade" id="modal-create">
					              <div class="modal-dialog">
					                <div class="modal-content">
					                  <div class="modal-header">
					                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                      <span aria-hidden="true">&times;</span></button>
					                    <h4 class="modal-title">Add New User</h4>
					                  </div>
					                  <div class="modal-body">

					                        <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Name</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="admin_name" type="text" id="admin_name">

                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Email</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="admin_email" type="text">

                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Username</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="admin_username" type="text">

                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Password</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="admin_password" type="password">

                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Level</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" name="admin_level" type="text">

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
											<th>Email</th>
											<th>phone</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
                                    @foreach($records??array() as $key=>$item)
											<tr>
												<td>{{++$key}}</td>
												<td>{{$item->name}}</td>
												<td>{{$item->email}}</td>
												<td>{{$item->phone}}</td>
                                                <td class="btn-group">
                                                    <a href="#" data-toggle="modal" data-target="#EditModal_{{$item->id}}" class="btn btn-primary btn-sm">Edit</a>
                                                    {!! Form::open([
                                                                   'method'=>'DELETE',
                                                                   'url' => ['/dmp/users', $item->id],
                                                                   'style' => 'display:inline'
                                                                ]) !!}
                                                    {!! Form::button('Delete', array(
                                                         'type' => 'submit',
                                                         'onclick' => 'return confirm("Are you sure? ");',
                                                         'class' => 'btn btn-danger btn-sm',
                                                            'data-type'=>'confirm',
                                                         )) !!}
                                                    {!! Form::close() !!}


                                                    <div class="modal fade" id="EditModal_{{$item->id}}" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="CreateModal">Modification of {{$item->title}}</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="{{url('dmp/users/'.$item->id)}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                                        {{csrf_field()}}
                                                                        {{method_field('PATCH')}}
                                                                        <div class="form-group ">
                                                                            <label for="name" class="col-md-4 control-label">Title</label>
                                                                            <div class="col-md-6">
                                                                                <input class="form-control" name="title" value="{{$item->title}}" type="text" id="admin_name">

                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group ">
                                                                            <label for="name" class="col-md-4 control-label">Description</label>
                                                                            <div class="col-md-6">
                                                                                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$item->description}}</textarea>

                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group">
                                                                            <div class="col-md-offset-4 col-md-8">
                                                                                <button class="btn btn-primary btnusercreate btnper" type="submit" name="submit" >Submit</button>
                                                                            </div>
                                                                        </div>

                                                                    </form>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
											</tr>
                                        @endforeach
									</tbody>
								</table>


							</div>
						</div>
					</div>
				</div>
@endsection
