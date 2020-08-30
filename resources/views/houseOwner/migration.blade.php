

@extends('layouts.app_house_owner')

@section('content')


    <div class="main-content" >
					<div class="wrap-content container" id="container">
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">House Owner | Migrations</h1>
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

                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        {{ $errors->first() }}
                                    </div>
                                @endif
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

					                        <form method="POST" action="{{url('house-owner/migrations')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                {{csrf_field()}}

                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">House</label>
                                                    <div class="col-md-6">

														<select name="house_id" class="form-control">
                                                            @foreach($houses as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach


														</select>
													</div>
                                                </div>
                                                <div class="form-group ">
                                                    <label for="name" class="col-md-4 control-label">Resident</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control"  name="resident_id">
                                                            @foreach($residents as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}--{{$item->phone}}--{{$item->nid}}</option>
                                                            @endforeach
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
                                                        <textarea class="form-control" name="comment" ></textarea>
                                                    </div>
                                                </div>


				                                <div class="text-center">
                                                    <button class="btn btn-primary">Submit</button>
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
                                    @foreach($records as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->house->name??'Unknown'}}</td>
                                            <td>{{$row->resident->name??'Unknown'}}</td>
                                            <td>{{$row->flat_info}}</td>
                                            <td>{{$row->description}}</td>
                                            <td>{{$row->status}}</td>
                                        </tr>
                                    @endforeach
									</tbody>
								</table>


							</div>
						</div>
					</div>
				</div>
			</div>
    @endsection
