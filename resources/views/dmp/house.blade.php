

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

                    <form class="row" action="/dmp/houses" method="get">

                          <a  href="/dmp/houses/create" class=" btn btn-primary" title="Add New House" style="border-radius: 0px"><i class="fa fa-plus" aria-hidden="true"></i> Add New House</a>


                        <hr>
                        <div class="col-md-3">
                            <label for="">House_Area</label>
                                <select name="area_id" id="area_id"
                                        class="form-control">
                                    <option value="">Select an option</option>
                                    @foreach($areas??array() as $area)
                                        <option value="{{$area->id}}">{{$area->name}}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="col-md-3">
                            <label for="">section_Area</label>
                            <select name="section_id" id="section_id"
                                        class="form-control">
                                    <option value="">Select an option</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="">House_Co_Area</label>
                            <select name="coarea_id" id="coarea_id"
                                        class="form-control">
                                    <option value="">Select an option</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <br>
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="clearfix"></div>
                        <table class="table table-bordered table-striped table-hover  dataTable" id="example" >
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>House Name</th>
                                    <th>Owner Name</th>
                                    <th>Area</th>
                                    <th>section Area</th>
                                    <th>House Co_Area</th>
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
                                        <td>{{$item->section??''}}</td>
                                        <td>{{$item->co_area??''}}</td>
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
                                                                                    <input type="text" class="form-control" name="House_Name" value="{{$item->name}}">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">House_Number</label>
                                                                                    <input type="text" class="form-control" name="house_number" value="{{$item->house_number}}">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">House_Area</label>
                                                                                    <select name="area_id" id=""
                                                                                            class="form-control">
                                                                                        <option value="">Select an option</option>
                                                                                        @foreach($areas??array() as $section)
                                                                                            <option value="{{$section->id}}">{{$section->name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">section_Area</label>
                                                                                    <select name="section_id" id=""
                                                                                            class="form-control">
                                                                                        <option value="">Select an option</option>
                                                                                        @foreach($sections??array() as $section)
                                                                                            <option value="{{$section->id}}">{{$section->name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">House_Co_Area</label>
                                                                                    <select name="coarea_id" id=""
                                                                                            class="form-control">
                                                                                        <option value="">Select an option</option>
                                                                                        @foreach($coareas??array() as $section)
                                                                                            <option value="{{$section->id}}">{{$section->name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">Gate_Number</label>
                                                                                    <input type="text" class="form-control" name="gate_number" value="{{$item->gate_number}}">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">Road_Number</label>
                                                                                    <input type="text" class="form-control" name="road_number" value="{{$item->road_number}}">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">Number_for_Floor</label>
                                                                                    <input type="text" class="form-control" name="flat_qty" value="{{$item->flat_qty}}">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">Description</label>
                                                                                    <input type="text" class="form-control" name="description" value="{{$item->description}}">
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
                                                                                    <input type="text" class="form-control" name="name" id="admin_name" value="{{$item->owner->name??''}}">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="">Email</label>
                                                                                    <input type="email" class="form-control" name="email" value="{{$item->owner->email??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Password</label>
                                                                                    <input type="password" class="form-control" name="password" value="">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Phone</label>
                                                                                    <input type="text" class="form-control" name="phone" value="{{$item->owner->phone??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Father_Name</label>
                                                                                    <input type="text" class="form-control" name="father" value="{{$item->owner->father??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Mother_Name</label>
                                                                                    <input type="text" class="form-control" name="mother" value="{{$item->owner->mother??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Education</label>
                                                                                    <input type="text" class="form-control" name="education" value="{{$item->owner->education??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Occupation</label>
                                                                                    <input type="text" class="form-control" name="occupation" value="{{$item->owner->occupation??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Occupation_Type</label>
                                                                                    <input type="text" class="form-control" name="occupation_type" value="{{$item->owner->occupation_type??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Occupation_Institution</label>
                                                                                    <input type="text" class="form-control" name="occupation_institution" value="{{$item->owner->occupation_institution??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Family_Member</label>
                                                                                    <input type="text" class="form-control" name="family_member" value="{{$item->owner->family_member??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Date_of_Birth</label>
                                                                                    <input type="date" class="form-control" name="dob" value="{{$item->owner->dob??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Gender</label>
                                                                                    <select name="gender" id="" class="form-control" value="{{$item->owner->gender??''}}">
                                                                                        <option value="male">Male</option>
                                                                                        <option value="female">Female</option>
                                                                                        <option value="others">Others</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Marital_Status</label>
                                                                                    <select class="form-control" name="marital_status" id="" value="{{$item->owner->marital_status??''}}">
                                                                                        <option>Select an option</option>
                                                                                        <option value="married">Married</option>
                                                                                        <option value="unmarried">Unmarried</option>
                                                                                        <option value="divorced">Divorced</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Region</label>
                                                                                    <input type="text" class="form-control" name="region" value="{{$item->owner->region??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Permanent_Area</label>
                                                                                    <input type="text" class="form-control" name="permanent_area" value="{{$item->owner->permanent_area??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Present_Area</label>
                                                                                    <input type="text" class="form-control" name="present_area" value="{{$item->owner->present_area??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">National_ID</label>
                                                                                    <input type="text" class="form-control" name="nid" value="{{$item->owner->nid??''}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="">Passport_ID</label>
                                                                                    <input type="text" class="form-control" name="passport" value="{{$item->owner->passport??''}}">
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
                                                                    <td>section_Area</td>
                                                                    <td>{{$item->section}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>House_Co_Area</td>
                                                                    <td>{{$item->co_area}}</td>
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

        $('#area_id').on('change',function(event){
            event.preventDefault();
            let sectionList = $('#section_id');
            sectionList.children('option:not(:first)').remove();

            $.ajax({
                url: '{{ route('getsectionbyarea') }}',
                type: 'GET',
                data: {
                    "area_id":$(this).val()
                },
                success: function (data) {
                    console.log(data);
                    jQuery.each(data, function(index, item) {
                        sectionList.append(new Option(item.name, item.id));
                    });
                },
                error: function (error) {
                    console.log(error);

                }
            });
        });
        $('#section_id').on('change',function(event){
            event.preventDefault();
            let co_area_List = $('#coarea_id');
            co_area_List.children('option:not(:first)').remove();

            $.ajax({
                url: '{{ route('getcoarea') }}',
                type: 'GET',
                data: {
                    "section_id":$(this).val(),
                    "area_id":$('#area_id').val()
                },
                success: function (data) {
                    console.log(data);
                    jQuery.each(data, function(index, item) {
                        co_area_List.append(new Option(item.name, item.id));
                    });
                },
                error: function (error) {
                    console.log(error);

                }
            });
        });
        function initialize() {

                @foreach($records as $key=>$item)

                    var mylong = parseFloat('{{$item->long}}');
                    var mylat = parseFloat('{{$item->lat}}');

                    var myLatlng = {lat: mylat, lng: mylong };
                    var mapDiv = document.getElementById('map-canvas-{{$item->id}}');
                    var map = new google.maps.Map(mapDiv, {
                        center: myLatlng,
                        zoom: 20,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    });
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
