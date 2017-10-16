<header id="js-header" class="u-header u-header--static">
    <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                    <span class="hamburger hamburger--slider">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </span>
                </button>
                <a href="article.html" class="navbar-brand">
                    <img src="{{ asset('assets/img/logo/car.png') }}" width="103" height="39" alt="Image Description">
                </a>
                <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
                    <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
                        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                            <a href="{{ url('/') }}" class="nav-link g-py-7 g-px-0">文章列表</a>
                        </li>
                        @if (Auth::check())
                        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                            <a href="{{ url('/profile') }}" class="nav-link g-py-7 g-px-0">{{ Auth::user() -> name }}</a>
                        </li>
                        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link g-py-7 g-px-0">登出</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        @else
                        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                            <a href="{{ route('login') }}" class="nav-link g-py-7 g-px-0">登入</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>