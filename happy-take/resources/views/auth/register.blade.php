@extends('layouts.main')

@section('content')
<section class="g-min-height-100vh g-flex-centered g-bg-lightblue-radialgradient-circle">
  <div class="container g-py-50">
    <div class="row justify-content-center">
      <div class="col-sm-10 col-md-9 col-lg-6">
        <div class="u-shadow-v24 g-bg-white rounded g-py-40 g-px-30">
          <header class="text-center mb-4">
            <h2 class="h2 g-color-black g-font-weight-600">會員註冊</h2>
          </header>
          <form class="g-py-15" action="{{ route('register') }}" method="post">
            {{ csrf_field() }}
            <div class="mb-4">
              <label for="name" class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">姓名</label>
              <input id="name" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" name="name" value="{{ old('name') }}">
              @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
              @endif
            </div>
            <div class="mb-4">
              <label for="email" class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Email</label>
              <input id="email" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="email" name="email">
              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 mb-4">
                <label for="" class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">密碼</label>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="password" name="password">
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
              <div class="col-xs-12 col-sm-6 mb-4">
                <label for="" class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">確認密碼</label>
                <input id="" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="password" name="password_confirmation">
              </div>
            </div>
            <div class="mb-4">
              <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">性別</label><br>
              <label class="form-check-inline u-check g-pl-25 ml-0">
                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="gender" value="1" type="radio" checked>
                <div class="u-check-icon-radio-v6 g-absolute-centered--y g-left-0">
                    <i></i>
                </div>
                男
              </label>
              <label class="form-check-inline u-check g-pl-25 ml-0">
                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="gender" value="0" type="radio">
                <div class="u-check-icon-radio-v6 g-absolute-centered--y g-left-0">
                    <i></i>
                </div>
                女
              </label>
            </div>
            <div class="mb-4">
              <label for="department" class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">系所</label>
              <input id="department" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" class="form-control" name="department">
            </div>
            <div class="row justify-content-between mb-5">
              <div class="col-8 align-self-center">
                <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25">
                  <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" required>
                  <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                    <i class="fa" data-check-icon="&#xf00c"></i>
                  </div>
                  我同意 <a href="{{ url('/terms') }}">樂乘條款</a>
                </label>
              </div>
              <div class="col-4 align-self-center text-right">
                <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25" type="submit">註冊</button>
              </div>
            </div>
          </form>
          <footer class="text-center">
            <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">已經有帳號了? <a class="g-font-weight-600" href="{{ url('login') }}">登入</a>
            </p>
          </footer>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
