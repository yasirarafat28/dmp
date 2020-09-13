

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
                <br>
                <br>

                <div class="container bg-white">


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
                                                                    <select name="area_id" id="area_id"
                                                                            class="form-control">
                                                                        <option value="">Select an option</option>
                                                                        @foreach($areas??array() as $area)
                                                                            <option value="{{$area->id}}">{{$area->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">section_Area</label>
                                                                <select name="section_id" id="section_id"
                                                                            class="form-control">
                                                                        <option value="">Select an option</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">House_Co_Area</label>
                                                                <select name="coarea_id" id="coarea_id"
                                                                            class="form-control">
                                                                        <option value="">Select an option</option>
                                                                </select>
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
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                </div>
            </div>
        </div>
    </div>

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
    </script>
@endsection
