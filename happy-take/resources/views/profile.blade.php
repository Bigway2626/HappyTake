@extends('layouts.main')

@section('title', '個人資料')

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
                <span>個人資料</span>
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
                    <a href="{{ url('/my_posts') }}" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="fa fa-newspaper-o" aria-hidden="true"></i> 我的文章</span>
                    </a>
                    <a href="{{ url('/my_participations') }}" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="fa fa-list" aria-hidden="true"></i> 我的共乘紀錄</span>
                    </a>
                    <a href="{{ url('/profile') }}" class="list-group-item justify-content-between active">
                        <span><i class="fa fa-user" aria-hidden="true"></i> 個人資料</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <ul class="nav nav-justified u-nav-v1-1 u-nav-primary g-brd-bottom--md g-brd-bottom-2 g-brd-primary g-mb-20" role="tablist" data-target="nav-1-1-default-hor-left-underline" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-primary g-mb-20">
                    <li class="nav-item">
                        <a class="nav-link g-py-10 active" data-toggle="tab" href="#edit-profile" role="tab">編輯個人資料</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link g-py-10" data-toggle="tab" href="#edit-avatar" role="tab">個人頭像</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link g-py-10" data-toggle="tab" href="#change-password" role="tab">安全性設定</a>
                    </li>
                </ul>
                <div id="nav-1-1-default-hor-left-underline" class="tab-content">
                    <div class="tab-pane fade show active" id="edit-profile" role="tabpanel">
                        @if ($msg = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $msg }}
                            </div>
                        @endif
                        <form action="{{ url('/edit_profile') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row g-mb-25">
                                <label for="name" class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">姓名</label>
                                <div class="col-sm-9">
                                    <div class="input-group g-brd-primary--focus">
                                        <input id="name" class="form-control form-control-md rounded-0 g-py-13 pr-0" type="text" name="name" value="{{ Auth::user() -> name }}" placeholder="姓名">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row g-mb-25">
                                <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">性別</label>
                                <div class="col-sm-9">
                                    <label class="form-check-inline u-check g-pl-25 ml-0">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="gender" value="1" type="radio" {{ Auth::user() -> gender == 1 ? 'checked' : '' }}>
                                        <div class="u-check-icon-radio-v6 g-absolute-centered--y g-left-0">
                                            <i></i>
                                        </div>
                                        男
                                    </label>
                                    <label class="form-check-inline u-check g-pl-25 ml-0">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="gender" value="0" type="radio" {{ Auth::user() -> gender == 0 ? 'checked' : '' }}>
                                        <div class="u-check-icon-radio-v6 g-absolute-centered--y g-left-0">
                                            <i></i>
                                        </div>
                                        女
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row g-mb-25">
                                <label for="department" class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">系所</label>
                                <div class="col-sm-9">
                                    <div class="input-group g-brd-primary--focus">
                                        <input id="department" class="form-control form-control-md rounded-0 g-py-13 pr-0" type="text" name="department" value="{{ Auth::user() -> department }}" placeholder="系所">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row g-mb-25">
                                <label for="tel" class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">電話</label>
                                <div class="col-sm-9">
                                    <div class="input-group g-brd-primary--focus">
                                        <input id="tel" class="form-control form-control-md rounded-0 g-py-13 pr-0" type="text" name="tel" value="{{ Auth::user() -> tel }}" placeholder="電話">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row g-mb-25">
                                <label for="introduction" class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">關於我</label>
                                <div class="col-sm-9">
                                    <textarea id="introduction" class="form-control form-control-md u-textarea-expandable rounded-0" name="introduction" rows="3">{{ Auth::user() -> introduction }}</textarea>
                                </div>
                            </div>
                            <hr class="g-brd-gray-light-v4 g-my-25">
                            <div class="text-sm-right">
                                <button class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="submit">儲存</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="edit-avatar" role="tabpanel">
                        @if ($msg = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $msg }}
                            </div>
                        @endif
                        <form action="{{ url('/edit_avatar') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row g-mb-25">
                                <label class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">目前頭像</label>
                                <div class="col-sm-9">
                                    <div class="g-mb-20">
                                        <img class="img-fluid w-100" src="{{ asset('avatar/'.Auth::user() -> avatar) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row g-mb-25">
                                <label for="avatar" class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">選擇檔案</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" id="avatar" name="avatar" aria-describedby="fileHelp" required>
                                    <small id="fileHelp" class="form-text text-muted">最佳尺寸400×450像素，JPG、PNG檔。</small>
                                </div>
                            </div>
                            <hr class="g-brd-gray-light-v4 g-my-25">
                            <div class="text-sm-right">
                                <button class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="submit">儲存</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="change-password" role="tabpanel">
                        @if ($msg = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $msg }}
                            </div>
                        @endif
                        @if ($msg = Session::get('warn'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $msg }}
                            </div>
                        @endif
                        @if ($msg = Session::get('danger'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $msg }}
                            </div>
                        @endif
                        <form action="{{ url('/change_password') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row g-mb-25">
                                <label for="current-password" class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">目前密碼</label>
                                <div class="col-sm-9">
                                    <div class="input-group g-brd-primary--focus">
                                        <input id="current-password" class="form-control form-control-md rounded-0 g-py-13 pr-0" type="password" name="current_password" placeholder="目前密碼" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row g-mb-25">
                                <label for="new-password" class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">新密碼</label>
                                <div class="col-sm-9">
                                    <div class="input-group g-brd-primary--focus">
                                        <input id="new-password" class="form-control form-control-md rounded-0 g-py-13 pr-0" type="password" name="new_password" placeholder="新密碼" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row g-mb-25">
                                <label for="confirm-password" class="col-sm-3 col-form-label g-color-gray-dark-v2 g-font-weight-700 text-sm-right g-mb-10">確認新密碼</label>
                                <div class="col-sm-9">
                                    <div class="input-group g-brd-primary--focus">
                                        <input id="confirm-password" class="form-control form-control-md rounded-0 g-py-13 pr-0" type="password" name="confirm_password" placeholder="確認新密碼" required>
                                    </div>
                                </div>
                            </div>
                            <hr class="g-brd-gray-light-v4 g-my-25">
                            <div class="text-sm-right">
                                <button class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="submit">儲存</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop