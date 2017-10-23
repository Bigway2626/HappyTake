@extends('layouts.main')

@section('title', '我的文章')

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
            <li class="list-inline-item g-color-primary">
                <span>我的文章</span>
            </li>
        </ul>
    </div>
</section>
<section class="g-mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 g-mb-50 g-mb-0--lg">
                <div class="u-block-hover g-pos-rel">
                    <figure>
                        <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="{{ asset('avatar/'.Auth::user() -> avatar) }}">
                    </figure>
                    <span class="g-pos-abs g-top-20 g-left-0">
                        <a class="btn btn-sm u-btn-primary rounded-0" href="{{ url('/profile') }}">{{ Auth::user() -> name }}</a>
                        <small class="d-block g-bg-black g-color-white g-pa-5">{{ Auth::user() -> department }}</small>
                    </span>
                </div>
                <div class="list-group list-group-border-0 g-mb-40">
                    <a href="{{ url('/my_posts') }}" class="list-group-item justify-content-between active">
                        <span><i class="fa fa-newspaper-o" aria-hidden="true"></i> 我的文章</span>
                    </a>
                    <a href="{{ url('/my_participations') }}" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="fa fa-list" aria-hidden="true"></i> 我的共乘紀錄</span>
                    </a>
                    <a href="{{ url('/profile') }}" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="fa fa-user" aria-hidden="true"></i> 個人資料</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                @if ($posts -> count() == 0)
                    <div class="alert alert-info" role="alert">
                        您還沒有發布任何文章喔！
                    </div>
                @else
                    @foreach ($posts as $post)
                        <article class="g-brd-around g-brd-gray-light-v4 rounded">
                            <div class="g-pa-30">
                                <h3 class="g-font-weight-300 g-mb-15">
                                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="{{ url('/my_post/'.$post -> id) }}">{{ $post -> from }} <i class="fa fa-arrow-right" aria-hidden="true"></i> {{ $post -> to }}</a>
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