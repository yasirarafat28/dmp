

@extends('layouts.app_house_owner')

@section('content')


    <div class="main-content" >
					<div class="wrap-content container" id="container">

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
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">House Owner | Residents</h1>
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
				              <div class="modal-dialog modal-lg">
				                <div class="modal-content">
				                  <div class="modal-header">
				                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                      <span aria-hidden="true">&times;</span></button>
				                    <h4 class="modal-title">Add New Resident</h4>
				                  </div>
				                  <div class="modal-body">

				                         <form method="POST" action="{{url('house-owner/residents')}}" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="row justify-content-center">
                                                  <div class="col-md-12">
                                                      <div class="card">
                                                          <div class="card-header text-center">Resident_Personal Information</div>

                                                          <div class="card-body">

                                                              <div class="form-group">
                                                                  <label for="">Owner Name</label>
                                                                  <input type="text" class="form-control" name="name">
                                                              </div>

                                                              <div class="form-group">
                                                                  <label for="">Resident Name</label>
                                                                  <input type="text" class="form-control" name="name">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Email</label>
                                                                  <input type="email" class="form-control" name="email">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Password</label>
                                                                  <input type="password" class="form-control" name="password">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Phone</label>
                                                                  <input type="text" class="form-control" name="phone">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Father_Name</label>
                                                                  <input type="text" class="form-control" name="father">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Mother_Name</label>
                                                                  <input type="text" class="form-control" name="mother">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Education</label>
                                                                  <input type="text" class="form-control" name="education">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Occupation</label>
                                                                  <input type="text" class="form-control" name="occupation">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Occupation_Type</label>
                                                                  <input type="text" class="form-control" name="occupation_type">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Occupation_Institution</label>
                                                                  <input type="text" class="form-control" name="occupation_institution">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Family_Member</label>
                                                                  <input type="text" class="form-control" name="family_member">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Date_of_Birth</label>
                                                                  <input type="date" class="form-control" name="dob">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Gender</label>
                                                                  <select name="gender" id="" class="form-control">
                                                                      <option value="male">Male</option>
                                                                      <option value="female">Female</option>
                                                                      <option value="others">Others</option>
                                                                  </select>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Marital_Status</label>
                                                                  <select class="form-control" name="marital_status" id="">
                                                                      <option>Select an option</option>
                                                                      <option value="married">Married</option>
                                                                      <option value="unmarried">Unmarried</option>
                                                                      <option value="divorced">Divorced</option>
                                                                  </select>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Region</label>
                                                                  <input type="text" class="form-control" name="region">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Permanent_Area</label>
                                                                  <input type="text" class="form-control" name="permanent_area">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Present_Area</label>
                                                                  <input type="text" class="form-control" name="present_area">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">National_ID</label>
                                                                  <input type="text" class="form-control" name="nid">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Passport_ID</label>
                                                                  <input type="text" class="form-control" name="passport">
                                                              </div>

                                                          </div>
                                                      </div>
                                                  </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
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
											<th>Present Address</th>
                                            <th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
                                    @foreach($records??array() as $key=>$item)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$item->resident->name??'n/a'}}</td>
                                            <td>{{$item->resident->nid??'n/a'}}</td>
                                            <td>{{$item->resident->email??'n/a'}}</td>
                                            <td>{{$item->resident->phone??'n/a'}}</td>
                                            <td>{{$item->resident->present_address??'n/a'}}</td>
                                            <td>{{$item->resident->staus??'n/a'}}</td>
                                            <td class="btn-group">
                                                <a href="#" data-toggle="modal" data-target="#EditModal_{{$item->id}}" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" data-toggle="modal" data-target="#ShowModal_{{$item->house->id}}" class="btn btn-primary btn-sm">Show</a>
                                                {!! Form::open([
                                                               'method'=>'DELETE',
                                                               'url' => ['/house-owner/residents', $item->id],
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
                                                                <form method="POST" action="{{url('house-owner/residents/'.$item->id)}}" enctype="multipart/form-data">
                                                                  {{csrf_field()}}
                                                                  {{method_field('PATCH')}}

                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-12">
                                                                            <div class="card">
                                                                                <div class="card-header text-center">Resident_Personal Information</div>

                                                                                <div class="card-body">

                                                                                    <div class="form-group">
                                                                                        <label for="">Owner Name</label>
                                                                                        <input type="text" class="form-control" name="name">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="">Resident Name</label>
                                                                                        <input type="text" class="form-control" name="name">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Email</label>
                                                                                        <input type="email" class="form-control" name="email">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Password</label>
                                                                                        <input type="password" class="form-control" name="password">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Phone</label>
                                                                                        <input type="text" class="form-control" name="phone">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Father_Name</label>
                                                                                        <input type="text" class="form-control" name="father">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Mother_Name</label>
                                                                                        <input type="text" class="form-control" name="mother">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Education</label>
                                                                                        <input type="text" class="form-control" name="education">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Occupation</label>
                                                                                        <input type="text" class="form-control" name="occupation">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Occupation_Type</label>
                                                                                        <input type="text" class="form-control" name="occupation_type">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Occupation_Institution</label>
                                                                                        <input type="text" class="form-control" name="occupation_institution">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Family_Member</label>
                                                                                        <input type="text" class="form-control" name="family_member">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Date_of_Birth</label>
                                                                                        <input type="date" class="form-control" name="dob">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Gender</label>
                                                                                        <select name="gender" id="" class="form-control">
                                                                                            <option value="male">Male</option>
                                                                                            <option value="female">Female</option>
                                                                                            <option value="others">Others</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Marital_Status</label>
                                                                                        <select class="form-control" name="marital_status" id="">
                                                                                            <option>Select an option</option>
                                                                                            <option value="married">Married</option>
                                                                                            <option value="unmarried">Unmarried</option>
                                                                                            <option value="divorced">Divorced</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Region</label>
                                                                                        <input type="text" class="form-control" name="region">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Permanent_Area</label>
                                                                                        <input type="text" class="form-control" name="permanent_area">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Present_Area</label>
                                                                                        <input type="text" class="form-control" name="present_area">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">National_ID</label>
                                                                                        <input type="text" class="form-control" name="nid">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="">Passport_ID</label>
                                                                                        <input type="text" class="form-control" name="passport">
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </div>

                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="ShowModal_{{$item->house->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="title" id="CreateModal">Preview of {{$item->resident->name}}</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-striped">
                                                                    <tbody>

                                                                    <tr>
                                                                        <td>House Name</td>
                                                                        <td>{{$item->name}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Resident Name</td>
                                                                        <td>{{$item->resident->name??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>House_Area</td>
                                                                        <td>{{$item->area}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>House_Co_Area</td>
                                                                        <td>{{$item->co_area}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>section_Area</td>
                                                                        <td>{{$item->section}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gate_Number</td>
                                                                        <td>{{$item->gate_number}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Road_Number</td>
                                                                        <td>{{$item->road_number}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Number_for_Floor</td>
                                                                        <td>{{$item->flat_qty}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Description</td>
                                                                        <td>{{$item->description}}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Owner Name</td>
                                                                        <td>{{$item->owner->name??'Unknown'}}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Email</td>
                                                                        <td>{{$item->owner->email??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Phone</td>
                                                                        <td>{{$item->owner->phone??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Father_Name</td>
                                                                        <td>{{$item->owner->father??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Mother_Name</td>
                                                                        <td>{{$item->owner->mother??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Education</td>
                                                                        <td>{{$item->owner->education??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Occupation</td>
                                                                        <td>{{$item->owner->occupation??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Occupation_Institution</td>
                                                                        <td>{{$item->owner->occupation_institution??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Family_Member</td>
                                                                        <td>{{$item->owner->family_member??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gender</td>
                                                                        <td>{{$item->owner->gender??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Marital_Status</td>
                                                                        <td>{{$item->owner->marital_status??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Region</td>
                                                                        <td>{{$item->owner->region??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Permanent_Area</td>
                                                                        <td>{{$item->owner->permanent_area??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Present_Area</td>
                                                                        <td>{{$item->owner->present_area??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>National_ID</td>
                                                                        <td>{{$item->owner->nid??'Unknown'}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Passport_ID</td>
                                                                        <td>{{$item->owner->passport??'Unknown'}}</td>
                                                                    </tr>

                                                                    </tbody>
                                                                </table>

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
