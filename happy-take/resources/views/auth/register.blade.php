@extends('layouts.main')

@section('content')
<section class="g-min-height-100vh g-flex-centered g-bg-lightblue-radialgradient-circle">
      <div class="container g-py-50">
        <div class="row justify-content-center">
          <div class="col-sm-10 col-md-9 col-lg-6">
            <div class="u-shadow-v24 g-bg-white rounded g-py-40 g-px-30">
              <header class="text-center mb-4">
                <h2 class="h2 g-color-black g-font-weight-600">建立免費帳戶</h2>
              </header>

              <!-- Form -->
              <form class="g-py-15" action="{{ route('register') }}" method="post">
                {{ csrf_field() }}
                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">姓名:</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15"
                    type="text" name="name" placeholder="彭于晏">
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                </div>

                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">信箱:</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" id="email" type="email" class="form-control" name="email" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-6 mb-4">
                    <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">密碼:</label>
                      <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" id="password" type="password" class="form-control" name="password" required>
                      @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                  </div>

                  <div class="col-xs-12 col-sm-6 mb-4">
                    <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">密碼重複:</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="密碼重複" required>
                  </div>
                </div>

                <div class="row justify-content-between mb-5">
                  <div class="col-8 align-self-center">
                    <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </div>
                      我同意 <a href="#">樂乘條款</a>
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
