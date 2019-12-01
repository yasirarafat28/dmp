@extends('layouts.app')

@section('content')
<div class="container">

    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" name="dob">
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
@endsection
