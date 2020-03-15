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
                      <th>Action</th>
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
                            <td>
                                <a href="#" data-toggle="modal" data-target="#MapModal_{{$house->id}}" class="btn btn-primary btn-sm"><i class="fa fa-map-marker"> Map</i></a>



                                <div class="modal fade" id="MapModal_{{$house->id}}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="title" id="CreateModal">Location of {{$house->name}}</h4>
                                            </div>
                                            <div class="modal-body">

                                                <div class="form-group row googlemap">
                                                    <div class="col-sm-12">
                                                        <div id="map-canvas-{{$house->id}}" style="height: 500px"></div>
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
