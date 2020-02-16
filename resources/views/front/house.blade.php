@extends('layouts.app')

@section('content')

<hr>
        <div class="row">
            <table class="table table-bordered table-striped table-hover  dataTable" id="example" style="width: 100%;">
                  <thead>
                    <tr>
                      <th class="center">#</th>
                      <th>House Name</th>
                      <th>Owner Name</th>
                      <th>Area</th>
                      <th>Section</th>
                        <th>Co-area</th>
                      <th>Zip Code</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($records as $house)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$house->name}}</td>
                            <td>{{$house->owner->name??'Unknown'}}</td>
                            <td>{{$house->area}}</td>
                            <td>{{$house->section}}</td>
                            <td>{{$house->co_area}}</td>
                            <td>{{$house->zip_code}}</td>
                            <td>{{$house->status}}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
        </div>



@endsection
