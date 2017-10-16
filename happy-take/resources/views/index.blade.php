@extends('layouts.main')

@section('title','首頁')

@section('content')
@include('partials.nav')
<section class="g-my-30">
      <div class="container">
        <ul class="u-list-inline">
          <li class="list-inline-item g-mr-7">
            <a class="u-link-v5 g-color-main g-color-primary--hover" href="#">樂乘</a>
            <i class="fa fa-angle-right g-ml-7"></i>
          </li>
          <li class="list-inline-item g-color-primary">
            <span>文章列表</span>
          </li>
        </ul>
      </div>
    </section>
    <!-- End Breadcrumb -->

    <!-- Page Title -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading" data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
      <!-- Parallax Image -->
      <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-white-gradient-opacity-v3--after" style="height: 140%; background-image: url(../../assets/img-temp/1920x800/img10.jpg);"></div>
      <!-- End Parallax Image -->

      <div class="container text-center g-py-100--md g-py-80">

        <!-- Search Form -->
        <form class="g-width-60x--md mx-auto">
          <div class="form-group g-mb-20">
            <div class="input-group u-shadow-v21 rounded g-mb-15">
              <input class="form-control form-control-md g-brd-white g-font-size-16 border-right-0 pr-0 g-py-15" type="text" placeholder="搜尋地點,人物">
              <div class="input-group-addon d-flex align-items-center g-bg-white g-brd-white g-color-gray-light-v1 g-pa-2">
                <button class="btn u-btn-primary g-font-size-16 g-py-15 g-px-20" type="submit">
                  <i class="fa fa-search g-pos-rel g-top-1"></i>
                </button>
              </div>
            </div>
          </div>
        </form>
        <!-- End Search Form -->
      </div>
    </section>
    <!-- Page Title -->

    <section class="g-pt-50 g-pb-90">
      <div class="container">
        <div class="row">
          <!-- Sidebar -->
          <div class="col-lg-3 g-pr-40--lg g-mb-50 g-mb-0--lg">

            <!-- new article -->
            <div class="g-mb-40">
              <li class="btn btn-block u-btn-outline-primary g-py-10"><a href="#">新增文章</a></li>
            </div>
            <!-- End new article -->

            <!-- Links -->
            <div class="g-mb-50">
              <h3 class="h5 g-color-black g-font-weight-600 mb-4">快速搜尋</h3>
              <ul class="list-unstyled g-font-size-13 mb-0">
                <li>
                  <a class="d-block active u-link-v5 g-color-black g-bg-gray-light-v5 g-font-weight-600 g-rounded-50 g-px-20 g-py-8" href="#"><i class="mr-2 fa fa-angle-right"></i>地點</a>
                </li>
                <li>
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 rounded g-px-20 g-py-8" href="#"><i class="mr-2 fa fa-angle-right"></i>學校</a>
                </li>
              </ul>
            </div>
            <!-- End Links -->

            <!-- Sort By -->
            <h2 class="h5 text-uppercase g-color-gray-dark-v1">排序依據</h2>
            <hr class="g-brd-gray-light-v4 g-my-15">
            <div class="btn-group justified-content g-mb-40">
              <label class="u-check">
                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio" checked>
                <span class="btn btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">依新舊</span>
              </label>
              <label class="u-check">
                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio">
                <span class="btn btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">依熱門程度</span>
              </label>
            </div>
            <!-- End Sort By -->


          </div>
          <!-- End Sidebar -->

          <!-- Search Results -->
          <div class="col-lg-9">
            <!-- Search Info -->
            <div class="d-md-flex justify-content-between g-mb-30">
              <h3 class="h6 text-uppercase g-mb-10 g-mb--lg">約有 <span class="g-color-gray-dark-v1">384,907</span> 項結果</h3>
              <ul class="list-inline">
                <li class="list-inline-item g-mr-30">
                  <a class="u-link-v5 g-color-gray-dark-v5 g-color-gray-dark-v5--hover" href="#">
                    <i class="fa fa-list g-pos-rel g-top-1 g-mr-5"></i>圖文瀏覽模式
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">
                    <i class="fa fa-th g-pos-rel g-top-1 g-mr-5"></i>圖片瀏覽模式
                  </a>
                </li>
              </ul>
            </div>
            <!-- End Search Info -->

            
            <article>
              <h3 class="h4 g-mb-15">
                <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#"> → </a>
              </h3>

              <div class="d-lg-flex justify-content-between align-items-center g-mb-15">
                <!-- Search Info -->
                <ul class="list-inline g-mb-10 g-mb-0--lg">
                  <li class="list-inline-item g-mr-30">
                    <img class="g-height-25 g-width-25 rounded-circle g-mr-5" src="../../assets/img-temp/100x100/img7.jpg" alt="Image Description">
                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="#"></a>
                  </li>
                  <li class="list-inline-item g-mr-30">
                    <i class="fa fa-calendar g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i> 
                  </li>
                </ul>
                <!-- End Search Info -->

                <!-- Share, Print and More -->
                <ul class="list-inline mb-0">
                  <li class="list-inline-item g-mr-20">
                    <p class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover">
                      <i class="fa fa-user g-pos-rel g-top-1 g-mr-5"></i> 人數: <i> 2/4</i>
                    </p>
                  </li>
                </ul>
              </div>
              <p class="g-mb-15"></p>
            </article>
            <hr class="g-brd-gray-light-v4 g-my-40">
            

            <nav class="g-mb-50" aria-label="Page Navigation">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="#" aria-label="Previous">
                    <span aria-hidden="true">
                      <i class="fa fa-angle-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="list-inline-item g-hidden-sm-down">
                  <a class="u-pagination-v1__item u-pagination-v1-5 u-pagination-v1-5--active rounded g-pa-4-11" href="#">1</a>
                </li>
                <li class="list-inline-item g-hidden-sm-down">
                  <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#">2</a>
                </li>
                <li class="list-inline-item g-hidden-sm-down">
                  <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#">3</a>
                </li>
                <li class="list-inline-item g-hidden-sm-down">
                  <span class="g-pa-4-11">...</span>
                </li>
                <li class="list-inline-item g-hidden-sm-down">
                  <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#">80</a>
                </li>
                <li class="list-inline-item">
                  <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="#" aria-label="Next">
                    <span aria-hidden="true">
                      <i class="fa fa-angle-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- End Pagination -->

          </div>
          <!-- End Search Results -->
        </div>
      </div>
    </section>

    <!-- Footer -->
    <div id="contacts-section" class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8 g-py-60"></div>
    <!-- End Footer -->

    <!-- Copyright Footer -->
    <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20 copyright"></footer>
    <!-- End Copyright Footer -->
    <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="fa fa-arrow-up"></i>
    </a>
@stop