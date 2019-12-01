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
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="Address">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">Personal Information</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-5 col-md-3">Submit</button>
        </div>
    </form>
</div>
@endsection
