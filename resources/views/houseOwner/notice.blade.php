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
                        <h1 class="mainTitle">House Owner | Noticeboard</h1>
                                                        </div>
                    <ol class="breadcrumb">
                        <li>
                            <span>Admin</span>
                        </li>
                        <li class="active">
                            <span>Noticeboard</span>
                        </li>
                    </ol>
                </div>
            </section>

                <div class="container-fluid container-fullw bg-white">
                <div class="row">


                    <table class="table table-bordered table-striped table-hover  dataTable" id="example" >
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($records as $key=>$item)

                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->status}}</td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection
