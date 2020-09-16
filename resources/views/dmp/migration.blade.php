

@extends('layouts.app_dmp')

@section('content')

@php

    $areas = \App\Area::where('status', 'active')->orderBy('created_at', 'DESC')->get();


@endphp

    <div class="main-content" >
        <div class="wrap-content container" id="container">
            <section id="page-title">
                <div class="row clearfix">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">Admin | Migrations</h1>
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
                <div class="container" >
                    <div class="row">

                        <a  data-toggle="modal" data-target="#modal-create" href="#" class=" btn btn-primary" title="Add New House" style="border-radius: 0px"><i class="fa fa-plus" aria-hidden="true"></i> New Migration</a>

                    </div>
                    <hr>
                    <form action="">

                        <div class="col-md-3">
                            <label for="">House</label>
                                <select name="house_id" id="area_id" onchange="this.form.submit()"
                                        class="form-control">
                                    <option value="">Select an option</option>
                                    @foreach($houses??array() as $house)
                                        <option {{ isset($_GET['house_id'] ) && $_GET['house_id']==$house->id ?'selected':''}} value="{{$house->id}}">{{$house->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                    </form>


                        <div class="col-md-2">
                            <br>
                            <button class="btn btn-primary" style="margin-top: 7px">Search</button>
                        </div>
                    </div>
                    <br>

                    <hr>
                    <div id="example_wrapper" class="dataTables_wrapper no-footer" style="margin-left: -15px;">
                        <table class="table table-bordered table-striped table-hover  dataTable row" id="example" >
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>House</th>
                                    <th>Resident Name</th>
                                    <th>Flat Details</th>
                                    <th>Comments</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($records as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->house->name??'Unknown'}}</td>
                                    <td>{{$row->resident->name??'Unknown'}}</td>
                                    <td>{{$row->flat_qty}}</td>
                                    <td>{{$row->description}}</td>
                                    <td>{{$row->status}}</td>
                                    <td class="btn-group">
                                        <a href="#" data-toggle="modal" data-target="#MemberModal_{{$item->id??0}}" class="btn btn-primary btn-sm">Members</a>
                                        <a href="#" data-toggle="modal" data-target="#ShowModal_{{$row->id??0}}" class="btn btn-primary btn-sm">Show</a>
                                        {!! Form::open([
                                                       'method'=>'DELETE',
                                                       'url' => ['/house-owner/residents', $row->id],
                                                       'style' => 'display:inline'
                                                    ]) !!}
                                        {!! Form::button('Delete', array(
                                             'type' => 'submit',
                                             'onclick' => 'return confirm("Are you sure? ");',
                                             'class' => 'btn btn-danger btn-sm',
                                                'data-type'=>'confirm',
                                             )) !!}
                                        {!! Form::close() !!}


                                        <div class="modal fade" id="MemberModal_{{$item->id??0}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="title" id="CreateModal">Family Member</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                    <tr>
                                                                        <td>Member Name</td>
                                                                        <td>Relation</td>
                                                                        <td>Age</td>
                                                                        <td>Nid</td>
                                                                        <td>Birth Code</td>
                                                                        <td>Action</td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @forelse($item->resident->members??array() as $member)
                                                                        <tr>
                                                                            <td>{{$member->name}}</td>
                                                                            <td>{{$member->relation}}</td>
                                                                            <td>{{$member->age}}</td>
                                                                            <td>{{$member->nid}}</td>
                                                                            <td>{{$member->birth_code}}</td>
                                                                            <td>

                                                                                <a href="/Admin/residents/remove/family-member/{{$member->id}}" class="btn btn-danger btn-sm">Remove</a>
                                                                            </td>
                                                                        </tr>
                                                                    @empty
                                                                        <tr>
                                                                            <td colspan="5">No member related with this resident!</td>
                                                                        </tr>
                                                                    @endforelse

                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        <div class="modal fade" id="ShowModal_{{$row->id??0}}" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="title" id="CreateModal">Preview of {{$row->resident->name}}</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table table-striped">
                                                            <tbody>

                                                            <tr>
                                                                <td>House Name</td>
                                                                <td>{{$row->house->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Resident Name</td>
                                                                <td>{{$row->resident->name??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>House_Area</td>
                                                                <td>{{$row->house->area}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>House_Co_Area</td>
                                                                <td>{{$row->house->co_area}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>section_Area</td>
                                                                <td>{{$row->house->section}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gate_Number</td>
                                                                <td>{{$row->house->gate_number}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Road_Number</td>
                                                                <td>{{$row->house->road_number}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Number_for_Floor</td>
                                                                <td>{{$row->house->flat_qty}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Description</td>
                                                                <td>{{$row->house->description}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Owner Name</td>
                                                                <td>{{$row->house->owner->name??'Unknown'}}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Email</td>
                                                                <td>{{$row->resident->email??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone</td>
                                                                <td>{{$row->resident->phone??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Father_Name</td>
                                                                <td>{{$row->resident->father??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mother_Name</td>
                                                                <td>{{$row->resident->mother??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Education</td>
                                                                <td>{{$row->resident->education??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Occupation</td>
                                                                <td>{{$row->resident->occupation??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Occupation_Institution</td>
                                                                <td>{{$row->resident->occupation_institution??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Family_Member</td>
                                                                <td>{{$row->resident->family_member??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gender</td>
                                                                <td>{{$row->resident->gender??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Marital_Status</td>
                                                                <td>{{$row->resident->marital_status??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Region</td>
                                                                <td>{{$row->resident->region??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Permanent_Area</td>
                                                                <td>{{$row->resident->permanent_area??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Present_Area</td>
                                                                <td>{{$row->resident->present_area??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>National_ID</td>
                                                                <td>{{$row->resident->nid??'Unknown'}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Passport_ID</td>
                                                                <td>{{$row->resident->passport??'Unknown'}}</td>
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
    </div>

    <div class="modal fade" id="modal-create">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">New Migration</h4>
                </div>
                <div class="modal-body">
                    <div class="">


                        <form method="POST" action="{{url('dmp/migrations')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="name" class="">House</label>

                                <select name="house_id" class="form-control">
                                    @foreach($houses as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name" class="">Resident</label>
                                <select class="form-control"  name="resident_id">
                                    @foreach($residents as $row)
                                        <option value="{{$row->id}}">{{$row->name}}--{{$row->phone}}--{{$row->nid}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name" class="">Flat Details</label>
                                <input class="form-control" name="flat_details" type="text">
                            </div>
                            <div class="form-group">
                                <label for="name" class="">Comments</label>
                                <textarea class="form-control" name="comment" ></textarea>
                            </div>


                            <div class="text-center">
                                <button class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


@endsection
