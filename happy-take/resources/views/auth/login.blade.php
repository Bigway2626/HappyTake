@extends('layouts.main')

@section('content')
<section class="g-min-height-100vh g-flex-centered g-bg-lightblue-radialgradient-circle">
    <div class="container g-py-100">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-5">
                <div class="u-shadow-v24 g-bg-white rounded g-py-40 g-px-30">
                    <header class="text-center mb-4">
                        <h2 class="h2 g-color-black g-font-weight-600">會員登入</h2>
                    </header>
                    <form class="g-py-15" action="{{ route('login') }}" method="post">
                        {{ csrf_field() }}
                        <div class="mb-4">
                            <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">帳號:</label>
                            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="email" name="email" value="{{ old('email') }}" placeholder="s+學號@cycu.edu.tw">
                            @if ($errors -> has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors -> first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="g-mb-35">
                            <div class="row justify-content-between">
                                <div class="col align-self-center">
                                    <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">密碼:</label>
                                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 mb-3" type="password" name="password" placeholder="密碼">
                                    @if ($errors -> has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors -> first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col align-self-center text-right">
                                <a class="d-inline-block g-font-size-12 mb-2" href="#">忘記密碼?</a>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-8 align-self-center">
                                    <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-0">
                                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                                            <i class="fa" data-check-icon="&#xf00c"></i>
                                        </div>
                                        保持登入狀態
                                    </label>
                                </div>
                                <div class="col-4 align-self-center text-right">
                                    <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25" type="submit">登入</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <footer class="text-center">
                        <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">沒有帳號? <a class="g-font-weight-600" href="{{ route('register') }}">註冊</a></p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
