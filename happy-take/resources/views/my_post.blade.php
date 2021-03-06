@extends('layouts.main')

@section('title', $post -> from.' → '.$post -> to)

@section('content')
@include('partials.nav')
<section class="g-mb-100">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-40">
          <div class="row">
            <div class="col-lg-4 g-mb-40 g-mb-0--lg">
              <div class="g-mb-20">
                <img class="img-fluid w-100" src="{{ asset('avatar/'.$post -> user -> avatar) }}">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="d-flex align-items-center justify-content-sm-between g-mb-5">
                <h2 class="g-font-weight-300 g-mr-10">{{ $post -> user -> name }}</h2>
              </div>
              <h4 class="h6 g-font-weight-300 g-mb-10">
                <i class="fa fa-university g-ml-7"></i> {{ $post -> user -> department }}
              </h4>
              <ul class="list-inline g-font-weight-300">
                <li class="list-inline-item g-mr-20">
                  <i class="fa fa-envelope g-ml-7"></i> {{ $post -> user -> email }}
                </li>
                <li class="list-inline-item g-mr-20">
                  <i class="fa fa-phone g-ml-7"></i> {{ $post -> user -> tel }}
                </li>
              </ul>
              <hr class="g-brd-gray-light-v4 g-my-20">
              <p class="lead g-line-height-1_8">{{ $post -> user -> introduction }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-40">
          <ul class="list-unstyled">
            <li class="media g-mb-10">
              <span class="d-block g-color-gray-dark-v5 g-width-110">
                  <i class="fa fa-map-marker g-mr-5"></i> 起點:
                </span>
              <span class="media-body">{{ $post -> from }}</span>
            </li>
            <li class="media g-mb-10">
              <span class="d-block g-color-gray-dark-v5 g-width-110">
                  <i class="fa fa-map-marker g-mr-5"></i> 終點:
                </span>
              <span class="media-body">{{ $post -> to }}</span>
            </li>
            <li class="media g-mb-10">
              <span class="d-block g-color-gray-dark-v5 g-width-110">
                  <i class="fa fa-calendar g-mr-5"></i> 日期:
                </span>
              <span class="media-body">{{ $post -> date }}</span>
            </li>
            <li class="media">
              <span class="d-block g-color-gray-dark-v5 g-width-110">
                  <i class="fa fa-user g-mr-5"></i> 人數:
                </span>
              <span class="media-body">{{ $post -> number }}</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
          <div class="embed-responsive embed-responsive-16by9">
              <div id="map" class="g-pos-abs g-top-0 g-left-0 w-100 h-100"></div>
          </div>
      </div>
      <div class="col-md-6">
        <ul class="nav nav-justified u-nav-v1-1 u-nav-primary g-brd-bottom--md g-brd-bottom-2 g-brd-primary g-mb-20" role="tablist" data-target="nav-1-1-default-hor-left-underline" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-primary g-mb-20">
          <li class="nav-item">
              <a class="nav-link g-py-10 active" data-toggle="tab" href="#routes" role="tab">路線</a>
          </li>
          <li class="nav-item">
              <a class="nav-link g-py-10" data-toggle="tab" href="#passengers" role="tab">共乘名單 ({{ $post -> participations -> count() }}/{{ $post -> number }})</a>
          </li>
        </ul>
        <div id="nav-1-1-default-hor-left-underline" class="tab-content">
          <div class="tab-pane fade show active" id="routes" role="tabpanel">
            <div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-0">
              <ul class="list-unstyled">
                  <!-- 路線資訊 -->
              </ul>
            </div>
          </div>
          <div class="tab-pane fade" id="passengers" role="tabpanel">
            @if ($post -> participations -> count() == 0)
              <div class="alert alert-info" role="alert">
                目前沒有任何共乘紀錄喔！
              </div>
            @else
              <ul class="list-unstyled">
                @foreach ($post -> participations as $participation)
                  <li class="g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-minus-1">
                    <div class="media">
                      <div class="d-flex g-mt-2 g-mr-15">
                        <img class="g-width-40 g-height-40 rounded-circle" src="{{ asset('avatar/'.$participation -> user -> avatar) }}">
                      </div>
                      <div class="media-body">
                        <div class="d-flex justify-content-between">
                          <strong>{{ $participation -> user -> name }}</strong>
                          <span class="align-self-center small text-nowrap">{{ $participation -> user -> department }}</span>
                        </div>
                        <p><i class="fa fa-envelope g-ml-7"></i> {{ $participation -> user -> email }}</p>
                        <p><i class="fa fa-phone g-ml-7"></i> {{ $participation -> user -> tel }}</p>
                        <span class="g-font-size-12 g-color-gray">{{ $participation -> created_at }}</span>
                      </div>
                    </div>
                  </li>
                @endforeach
              </ul>
            @endif
          </div>
        </div>
      </div>
      <div class="col-lg">
        <div class="media g-mb-30">
          <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-20" src="../../assets/img-temp/100x100/img7.jpg" alt="Image Description">
          <div class="media-body g-brd-around g-brd-gray-light-v4 g-pa-30">
            <div class="g-mb-15">
              <h5 class="d-flex justify-content-between align-items-center h5 g-color-gray-dark-v1 mb-0">
                <span class="d-block g-mr-10">James Coolman</span>
              </h5>
              <span class="g-color-gray-dark-v4 g-font-size-12">2 days ago</span>
            </div>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. </p>
            <ul class="list-inline d-sm-flex my-0">
              <li class="list-inline-item ml-auto">
                <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
                  <i class="fa fa-reply g-mr-3"></i>
                  Reply
                </a>
              </li>
            </ul>
          </div>
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
}

function calculateAndDisplayRoute(directionsDisplay, directionsService, markerArray, stepDisplay, map) {
    for (var i = 0; i < markerArray.length; i++) {
        markerArray[i].setMap(null);
    }
    
    directionsService.route({
        origin: '{{ $post -> from }}',
        destination: '{{ $post -> to }}',
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