@extends('layouts.main')

@section('title', '文章')

@section('content')
@include('partials.nav')
<section class="dzsparallaxer auto-init height-is-based-on-content use-loading" data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
  <div class="container text-center g-py-100--md g-py-80">
    <h2 class="h1 text-uppercase g-font-weight-300 g-mb-30">文章</h2>
    <form class="g-width-60x--md mx-auto" action="{{ url('/search_post') }}">
      <div class="form-group g-mb-20">
        <div class="input-group u-shadow-v21 rounded g-mb-15">
          <input class="form-control form-control-md g-brd-white g-font-size-16 border-right-0 pr-0 g-py-15" type="text" name="search">
          <div class="input-group-addon d-flex align-items-center g-bg-white g-brd-white g-color-gray-light-v1 g-pa-2">
            <button class="btn u-btn-primary g-font-size-16 g-py-15 g-px-20" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<section class="g-pt-50 g-pb-90">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 g-pr-40--lg g-mb-50 g-mb-0--lg">
        <div class="g-mb-40">
          <a class="btn btn-block u-btn-primary g-py-10" href="{{ url('/create_post') }}">
              <i class="fa fa-pencil g-mr-5"></i>
              發文
          </a>
        </div>
        <h2 class="h5 text-uppercase g-color-gray-dark-v1">排序</h2>
        <hr class="g-brd-gray-light-v4 g-my-15">
        <div class="btn-group justified-content g-mb-40">
          <label class="u-check">
            <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio" checked>
            <span class="btn btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">日期</span>
          </label>
          <label class="u-check">
            <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio">
            <span class="btn btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">熱門度</span>
          </label>
        </div>
      </div>
      <div class="col-lg-9">
        @if ($posts -> count() == 0)
          <div class="alert alert-info" role="alert">
            目前沒有任何文章喔！
          </div>
        @else
          @foreach ($posts as $post)
            <article class="g-brd-around g-brd-gray-light-v4 rounded">
              <div class="g-pa-30">
                  <h3 class="g-font-weight-300 g-mb-15">
                      <a class="u-link-v5 g-color-main g-color-primary--hover" href="{{ url('/post/'.$post -> id) }}">{{ $post -> from }} <i class="fa fa-arrow-right" aria-hidden="true"></i> {{ $post -> to }}</a>
                  </h3>
                  <p><!--導航資訊--></p>
              </div>
              <div class="media g-font-size-12 g-brd-top g-brd-gray-light-v4 g-pa-15-30">
                  <div class="media-body align-self-center">
                      <i class="fa fa-calendar g-ml-7"></i>
                      <span class="u-link-v5 g-color-main g-color-primary--hover">{{ $post -> date }}</span>
                  </div>
                  <div class="align-self-center">
                      <span class="u-link-v5 g-color-main g-color-primary--hover g-mr-10">
                          <i class="fa fa-user g-ml-7"></i>
                          {{ $post -> participations -> count() }} / {{ $post -> number }}
                      </span>
                      <span class="u-link-v5 g-color-main g-color-primary--hover">
                          <i class="fa fa-star g-ml-7"></i>
                          {{ $post -> comments != '[]' ? round($post -> comments -> avg('score'), 1) : 0 }}
                      </span>
                  </div>
              </div>
            </article>
            <hr class="g-brd-gray-light-v4 g-my-25">
          @endforeach
          {{ $posts -> links() }}
        @endif
      </div>
    </div>
  </div>
</section>
@stop