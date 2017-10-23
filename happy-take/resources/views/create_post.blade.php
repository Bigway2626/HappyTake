@extends('layouts.main')

@section('title','發布文章')

@section('content')
@include('partials.nav')
<section class="g-my-30">
    <div class="container">
        <ul class="u-list-inline">
            <li class="list-inline-item g-mr-7">
                <a class="u-link-v5 g-color-main g-color-primary--hover" href="{{ url('/') }}">樂乘</a>
                <i class="fa fa-angle-right g-ml-7"></i>
            </li>
            <li class="list-inline-item g-mr-7">
                <span>{{ Auth::user() -> name }}</span>
                <i class="fa fa-angle-right g-ml-7"></i>
            </li>
            <li class="list-inline-item g-mr-7">
                <span>我的文章</span>
                <i class="fa fa-angle-right g-ml-7"></i>
            </li>
            <li class="list-inline-item g-color-primary">
                <span>發布文章</span>
            </li>
        </ul>
    </div>
</section>
<section class="g-mb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" action="create_post" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row g-mb-25">
                        <label for="date" class="col-2 col-form-label">日期</label>
                        <div class="col-10">
                            <input class="form-control form-control-md rounded-0" type="date" id="date" name="date" required>
                        </div>
                    </div>
                    <div class="form-group row g-mb-25">
                        <label for="from" class="col-2 col-form-label">起點</label>
                        <div class="col-10">
                            <input class="form-control form-control-md rounded-0" type="text" id="from" name="from" required>
                        </div>
                    </div>
                    <div class="form-group row g-mb-25">
                        <label for="to" class="col-2 col-form-label">終點</label>
                        <div class="col-10">
                            <input class="form-control form-control-md rounded-0" type="text" id="to" name="to" required>
                        </div>
                    </div>
                    <div class="form-group row g-mb-25">
                        <label for="number" class="col-2 col-form-label">人數</label>
                        <div class="col-10">
                            <input class="form-control form-control-md rounded-0" type="number" id="number" name="number" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-md u-btn-primary rounded-0">發布</button>
                </form>
            </div>
            <div class="col-md-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <div id="map" class="g-pos-abs g-top-0 g-left-0 w-100 h-100"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
function initMap() {
    var markerArray = [];
    var directionsService = new google.maps.DirectionsService;
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: 24.957, lng: 121.241}
    });
    var directionsDisplay = new google.maps.DirectionsRenderer({map: map});
    var stepDisplay = new google.maps.InfoWindow;
    calculateAndDisplayRoute(directionsDisplay, directionsService, markerArray, stepDisplay, map);
    var onChangeHandler = function() {
        calculateAndDisplayRoute(directionsDisplay, directionsService, markerArray, stepDisplay, map);
    };
    document.getElementById('from').addEventListener('keyup', onChangeHandler);
    document.getElementById('to').addEventListener('keyup', onChangeHandler);
}

function calculateAndDisplayRoute(directionsDisplay, directionsService, markerArray, stepDisplay, map) {
    for (var i = 0; i < markerArray.length; i++) {
        markerArray[i].setMap(null);
    }
    
    directionsService.route({
        origin: document.getElementById('from').value,
        destination: document.getElementById('to').value,
        travelMode: 'DRIVING'
    }, function(response, status) {
        if (status === 'OK') {
            directionsDisplay.setDirections(response);
            showSteps(response, markerArray, stepDisplay, map);
        }
    });
}

function showSteps(directionResult, markerArray, stepDisplay, map) {
    var myRoute = directionResult.routes[0].legs[0];
    console.log(myRoute.steps);
    for (var i = 0; i < myRoute.steps.length; i++) {
        var marker = markerArray[i] = markerArray[i] || new google.maps.Marker;
        marker.setMap(map);
        marker.setPosition(myRoute.steps[i].start_location);
        attachInstructionText(stepDisplay, marker, myRoute.steps[i].instructions, map);
    }
}

function attachInstructionText(stepDisplay, marker, text, map) {
    google.maps.event.addListener(marker, 'click', function() {
        stepDisplay.setContent(text);
        stepDisplay.open(map, marker);
    });
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDogjm4p_S70ZVVnw-ozEFXyjAdM3HK86o&callback=initMap"></script>
@stop