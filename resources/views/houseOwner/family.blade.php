@extends('layouts.app_house_owner')

@section('content')


<div class="main-content">
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
                    <h1 class="mainTitle">House Owner | Residents | family Member</h1>
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
                <a data-toggle="modal" data-target="#modal-create" href="#" class=" btn btn-primary" title="Add New House" style="border-radius: 0px"><i class="fa fa-plus" aria-hidden="true"></i> Add New Family Member</a>

                <hr>

                <!-- Modal -->
                <div class="modal fade" id="modal-create">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Add New Family Member</h4>
                            </div>
                            <div class="modal-body">

                                <form method="POST" action="{{url('house-owner/residents')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header text-center">Family Member Information</div>

                                                <div class="card-body">


                                                    <div class="form-group">
                                                        <label for="">Member Name</label>
                                                        <input type="text" class="form-control" name="name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Relation</label>
                                                        <input type="text" class="form-control" name="relation">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Age</label>
                                                        <input type="text" class="form-control" name="age">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">National_ID</label>
                                                        <input type="text" class="form-control" name="nid">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Birth_Code</label>
                                                        <input type="text" class="form-control" name="birth_code">
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

                <table class="table table-bordered table-striped table-hover  dataTable" id="example">
                    <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>Member Name</th>
                            <th>Relation</th>
                            <th>Age</th>
                            <th>National_ID</th>
                            <th>Birth_Code</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($records??array() as $key=>$item)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$item->family->name??'n/a'}}</td>
                            <td>{{$item->resident->relation??'n/a'}}</td>
                            <td>{{$item->resident->age??'n/a'}}</td>
                            <td>{{$item->resident->nid??'n/a'}}</td>
                            <td>{{$item->resident->birth_code??'n/a'}}</td>

                            <td class="">
                                <a href="#" data-toggle="modal" data-target="#EditModal_{{$item->id}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="#" data-toggle="modal" data-target="#ShowModal_{{$item->id}}" class="btn btn-primary btn-sm">Show</a>

                                <!--{!! Form::open([
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
                                                {!! Form::close() !!} -->


                                <div class="modal fade" id="EditModal_{{$item->id}}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="title" id="CreateModal">Modification of {{$item->title}}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{url('house-owner/residents/'.$item->resident->id)}}" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    {{method_field('PATCH')}}

                                                    <div class="row justify-content-center">
                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-header text-center">Resident_Personal Information</div>

                                                                <div class="card-body">

                                                                    <div class="form-group">
                                                                        <label for="">Member Name</label>
                                                                        <input type="text" class="form-control" name="name" value="{{$item->resident->name??'n/a'}}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="">Relation</label>
                                                                        <input type="text" class="form-control" name="relation" value="{{$item->resident->relation??'n/a'}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Age</label>
                                                                        <input type="text" class="form-control" name="age" value="{{$item->resident->age??'n/a'}}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="">National_ID</label>
                                                                        <input type="text" class="form-control" name="nid" value="{{$item->resident->nid??'n/a'}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Birth_Code</label>
                                                                        <input type="text" class="form-control" name="birth_code" value="{{$item->resident->birth_code??'n/a'}}">
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
                                                <h4 class="title" id="CreateModal">Preview of {{$item->resident->name}}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-striped">
                                                    <tbody>

                                                        <tr>
                                                            <td>Member Name</td>
                                                            <td>{{$item->resident->name??'Unknown'}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Relation</td>
                                                            <td>{{$item->house->relation}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Age</td>
                                                            <td>{{$item->house->age}}</td>
                                                        </tr>

                                                        <tr>
                                                            <td>National_ID</td>
                                                            <td>{{$item->resident->nid??'Unknown'}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Birth_Code</td>
                                                            <td>{{$item->resident->birth_code??'Unknown'}}</td>
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
