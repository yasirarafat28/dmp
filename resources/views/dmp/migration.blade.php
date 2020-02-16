

@extends('layouts.app_dmp')

@section('content')


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
                <div class="container">
                    <div class="row">

                        <a  data-toggle="modal" data-target="#modal-create" href="#" class=" btn btn-primary" title="Add New House" style="border-radius: 0px"><i class="fa fa-plus" aria-hidden="true"></i> New Migration</a>

                    </div>
                    <table class="table table-bordered table-striped table-hover  dataTable row" id="example" >
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
                                    @foreach($houses as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name" class="">Resident</label>
                                <select class="form-control"  name="resident_id">
                                    @foreach($residents as $item)
                                        <option value="{{$item->id}}">{{$item->name}}--{{$item->phone}}--{{$item->nid}}</option>
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


@endsection
