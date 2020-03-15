

@extends('layouts.app_dmp')

@section('content')


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



                        <!-- Modal -->
                        <div class="modal fade" id="modal-create">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Add New House</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form method="POST" action="{{url('dmp/houses')}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="row justify-content-center">
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-header text-center">House Information</div>

                                                        <div class="card-body">

                                                            <div class="form-group">
                                                                <label for="">House_Name</label>
                                                                <input type="text" class="form-control" name="House_Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">House_Number</label>
                                                                <input type="text" class="form-control" name="house_number">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">House_Area</label>
                                                                <input type="text" class="form-control" name="area">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">House_Co_Area</label>
                                                                <input type="text" class="form-control" name="co_area">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">section_Area</label>
                                                                <input type="text" class="form-control" name="section">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">Gate_Number</label>
                                                                <input type="text" class="form-control" name="gate_number">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">Road_Number</label>
                                                                <input type="text" class="form-control" name="road_number">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">Number_for_Floor</label>
                                                                <input type="text" class="form-control" name="flat_qty">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">Description</label>
                                                                <input type="text" class="form-control" name="description">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-header text-center">Personal Information</div>

                                                        <div class="card-body">

                                                            <div class="form-group">
                                                                <label for="">Owner Name</label>
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
                                                <button type="submit" class="btn btn-primary mt-5 col-md-3">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
<hr>
                        <table class="table table-bordered table-striped table-hover  dataTable" id="example" >
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>House Name</th>
                                    <th>Owner Name</th>
                                    <th>Area</th>
                                    <th>House Co_Area</th>
                                    <th>section Area</th>
                                    <th>Gate Number</th>
                                    <th>Road Number</th>
                                    <th>National ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($records as $key=>$item)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$item->name??''}}</td>
                                        <td>{{$item->owner->name??''}}</td>
                                        <td>{{$item->area??''}}</td>
                                        <td>{{$item->co_area??''}}</td>
                                        <td>{{$item->section??''}}</td>
                                        <td>{{$item->gate_number??''}}</td>
                                        <td>{{$item->road_number??''}}</td>
                                        <td>{{$item->owner->nid??''}}</td>
                                        <td class="btn-group">
                                            <a href="#" data-toggle="modal" data-target="#EditModal_{{$item->id}}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="#" data-toggle="modal" data-target="#ShowModal_{{$item->id}}" class="btn btn-primary btn-sm">Show</a>
                                            <a href="#" data-toggle="modal" data-target="#MapModal_{{$item->id}}" class="btn btn-primary btn-sm"><i class="fa fa-map-marker"> Map</i></a>
                                            {!! Form::open([
                                                           'method'=>'DELETE',
                                                           'url' => ['/dmp/houses', $item->id],
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
                                                            <form method="POST" action="{{url('dmp/houses/'.$item->id)}}" enctype="multipart/form-data">
                                                                {{csrf_field()}}
                                                                {{method_field('PATCH')}}

                                                                <div class="row justify-content-center">
                                                                    <div class="col-md-6">
                                                                        <div class="card">
                                                                            <div class="card-header text-center">House Information</div>

                                                                            <div class="card-body">

                                                                                <div class="form-group">
                                                                                    <label for="">House_Name</label>
                                                                                    <input type="text" class="form-control" name="House_Name">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">House_Number</label>
                                                                                    <input type="text" class="form-control" name="house_number">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">House_Area</label>
                                                                                    <input type="text" class="form-control" name="area">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">House_Co_Area</label>
                                                                                    <input type="text" class="form-control" name="co_area">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">section_Area</label>
                                                                                    <input type="text" class="form-control" name="section">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">Gate_Number</label>
                                                                                    <input type="text" class="form-control" name="gate_number">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">Road_Number</label>
                                                                                    <input type="text" class="form-control" name="road_number">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">Number_for_Floor</label>
                                                                                    <input type="text" class="form-control" name="flat_qty">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">Description</label>
                                                                                    <input type="text" class="form-control" name="description" value="{{$item->name}}">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">Latitude</label>
                                                                                    <input type="text" class="form-control" name="lat" value="{{$item->lat}}">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">Longitude</label>
                                                                                    <input type="text" class="form-control" name="long" value="{{$item->long}}">
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="card">
                                                                            <div class="card-header text-center">Personal Information</div>

                                                                            <div class="card-body">

                                                                                <div class="form-group">
                                                                                    <label for="">Owner Name</label>
                                                                                    <input type="text" class="form-control" name="name" id="admin_name" value="{{$item->owner_id}}">
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
                                                                    <button type="submit" class="btn btn-primary mt-5 col-md-3">Submit</button>
                                                                </div>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="modal fade" id="ShowModal_{{$item->id}}" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="title" id="CreateModal">Preview of {{$item->name}}</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table table-striped">
                                                                <tbody>

                                                                <tr>
                                                                    <td>House Name</td>
                                                                    <td>{{$item->name}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>House_Number</td>
                                                                    <td>{{$item->house_number}}</td>
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



                                            <div class="modal fade" id="MapModal_{{$item->id}}" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="title" id="CreateModal">Location of {{$item->name}}</h4>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="form-group row googlemap">
                                                                <div class="col-sm-12">
                                                                    <div id="map-canvas-{{$item->id}}" style="height: 500px"></div>
                                                                </div>
                                                            </div>

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
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="//maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyCyYM0wdvmHA5KRhEAl1R7rMp28eCHoGlo"  type="text/javascript"></script>


    <script>
        function initialize() {

                @foreach($records as $key=>$item)

                    var myLatlng = {lat: 23.7871934, lng: 90.3669393};
                    var mapDiv = document.getElementById('map-canvas-{{$item->id}}');
                    var map = new google.maps.Map(mapDiv, {
                        center: myLatlng,
                        zoom: 20,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    });
                    var mylong = 90.3669393;
                    var mylat = 23.7871934;
                    var branchName = '{{$item->name??""}}';

                    var dictionary = { lat: mylat, lng: mylong, name: branchName };

                    var myLatLng = {lat: dictionary.lat, lng: dictionary.lng};

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        label: dictionary.name,
                    });
                @endforeach
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection
