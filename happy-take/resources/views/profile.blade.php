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
            <li class="list-inline-item g-mr-7">
                <a class="u-link-v5 g-color-main g-color-primary--hover" href="#">會員中心</a>
                <i class="fa fa-angle-right g-ml-7"></i>
            </li>
            <li class="list-inline-item g-color-primary">
                <span>個人資訊</span>
            </li>
        </ul>
      </div>
    </section>
    <!-- End Breadcrumb -->

    <section class="g-mb-100">
      <div class="container">
        <div class="row">
          <!-- Profile Sidebar -->
          <div class="col-lg-3 g-mb-50 g-mb-0--lg">
            <!-- User Image -->
            <div class="u-block-hover g-pos-rel">
              <figure>
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="../../assets/img-temp/400x450/img5.jpg" alt="Image Description">
              </figure>

              <!-- User Info -->
              <span class="g-pos-abs g-top-20 g-left-0">
                  <a class="btn btn-sm u-btn-primary rounded-0" href="#">{{ Auth::user() -> name }}</a>
                  <small class="d-block g-bg-black g-color-white g-pa-5">中原國貿系</small>
                </span>
              <!-- End User Info -->
            </div>
            <!-- User Image -->

            <!-- Sidebar Navigation -->
            <div class="list-group list-group-border-0 g-mb-40">

              <!-- Profile -->
              <a href="profile.html" class="list-group-item justify-content-between active">
                <span><i class="fa fa-address-book" aria-hidden="true"></i>                  
                  個人資訊</span>
              </a>
              <!-- End Profile -->

              <!-- Comments -->
              <a href="comments.html" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="fa fa-commenting-o" aria-hidden="true"></i> 訊息</span>
                <span class="u-label g-font-size-11 g-bg-pink g-rounded-20 g-px-8">5</span>
              </a>

              <!-- End Comments -->


            </div>
            <!-- End Sidebar Navigation -->
            
          </div>
          <!-- End Profile Sidebar -->
          <!-- Profle Content -->
          <div class="col-lg-9">
            <!-- User Block -->
<div class="g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-40">
  <div class="row">
      <div class="col-lg-4 g-mb-40 g-mb-0--lg">
          <!-- User Image -->
          <div class="g-mb-20">
              <img class="img-fluid w-100" src="{{ asset('avatar/'.Auth::user() -> avatar) }}" alt="Image Description">
          </div>
          <!-- User Image -->

          <!-- User Contact Buttons -->

          <li class="btn btn-block u-btn-outline-primary g-rounded-50 g-py-12 g-mb-10 dropdown"><a href="#" data-toggle="modal" data-target="#myModal">修改會員資料</a></li>

          <li class="btn btn-block u-btn-outline-primary g-rounded-50 g-py-12 g-mb-10 dropdown"><a href="#" data-toggle="modal" data-target="#record">我的搭乘紀錄</a></li>

          <li class="btn btn-block u-btn-outline-primary g-rounded-50 g-py-12 g-mb-10 dropdown"><a href="#">我的文章列表</a></li>
          </li>

          <!-- End User Contact Buttons -->
      </div>

      <div class="col-lg-8">
          <!-- User Details -->
          <div class="d-flex align-items-center justify-content-sm-between g-mb-5">
              <h2 class="g-font-weight-300 g-mr-10">{{ Auth::user() -> name }}</h2>
              <ul class="list-inline mb-0">
                  <li class="list-inline-item g-mx-2">
                      <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle"
                          href="#">
                        <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                        <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
                      </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                      <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle"
                          href="#">
                        <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                        <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
                      </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                      <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle"
                          href="#">
                        <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-dribbble"></i>
                        <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-dribbble"></i>
                      </a>
                  </li>
                  <li class="list-inline-item g-mx-2">
                      <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle"
                          href="#">
                        <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-linkedin"></i>
                        <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-linkedin"></i>
                      </a>
                  </li>
              </ul>
          </div>
          <!-- End User Details -->

          <!-- User Position -->
          <h4 class="h6 g-font-weight-300 g-mb-10">
              個人簡介
          </h4>
          <!-- End User Position -->

          <!-- User Info -->
          <ul class="list-inline g-font-weight-300">
              <li class="list-inline-item g-mr-20">
                性別:
                  @if (Auth::user() -> gender == 1)
                    男
                  @else
                    女
                  @endif
              </li>
              <li class="list-inline-item g-mr-20">
                  汽車駕照:
                  @if (Auth::user() -> car_license  == 1)
                    有
                  @else
                    無
                  @endif
              </li>
              <li class="list-inline-item g-mr-20">
                  機車駕照:
                  @if (Auth::user() -> scooter_license == 1)
                    有
                  @else
                    無
                  @endif
              </li>
          </ul>
          <!-- End User Info -->

          <hr class="g-brd-gray-light-v4 g-my-20">

          <p class="lead g-line-height-1_8">{{ Auth::user() -> introduction }}</p>
      </div>
  </div>
</div>
<!-- End User Block -->

<!-- Experience Timeline -->
<div class="card border-0 rounded-0 g-mb-40">
  <!-- Panel Header -->
  <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
      <h3 class="h6 mb-0">
          <i class="fa fa-comments" aria-hidden="true"></i>
          </i>
          </i> 最新消息
      </h3>
      <div class="dropdown g-mb-10 g-mb-0--md">
      </div>
  </div>
  <!-- End Panel Header -->

  <!-- Panel Body -->
  <div style="height: 300px; overflow: scroll;">
      <ul class="row u-timeline-v2-wrap list-unstyled">
          <li class="col-md-12 g-brd-bottom g-brd-0--md g-brd-gray-light-v4 g-pb-30 g-pb-0--md g-mb-30 g-mb-0--md">
              <div class="row">
                  <!-- Timeline Date -->
                  <div class="col-md-3 align-self-center text-md-right g-pr-40--md g-mb-20 g-mb-0--md">
                      <h4 class="h5 g-font-weight-300">系統通知</h4>
                      <h5 class="h6 g-font-weight-300 mb-0">2017 /9/20 </h5>
                  </div>
                  <!-- End Timeline Date -->

                  <!-- Timeline Content -->
                  <div class="col-md-9 align-self-center g-orientation-left g-pl-40--md">
                      <!-- Timeline Dot -->
                      <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                          <i class="d-block g-width-18 g-height-18 g-bg-primary g-brd-around g-brd-4 g-brd-gray-light-v4 rounded-circle"></i>
                      </div>
                      <!-- End Timeline Dot -->

                      <article class="g-pa-10--md">
                          <h3 class="h4 g-font-weight-300">通知</h3>
                          <p class="mb-0">你註冊期限快到期，請從新申請</p>
                      </article>
                  </div>
                  <!-- End Timeline Content -->
              </div>
          </li>
          <li class="col-md-12 g-brd-bottom g-brd-0--md g-brd-gray-light-v4 g-pb-30 g-pb-0--md g-mb-30 g-mb-0--md">
              <div class="row">
                  <!-- Timeline Date -->
                  <div class="col-md-3 align-self-center text-md-right g-pr-40--md g-mb-20 g-mb-0--md">
                      <h4 class="h5 g-font-weight-300">乘客訊息</h4>
                      <h5 class="h6 g-font-weight-300 mb-0">20179/18</h5>
                  </div>
                  <!-- End Timeline Date -->

                  <!-- Timeline Content -->
                  <div class="col-md-9 align-self-center g-orientation-left g-pl-40--md">
                      <!-- Timeline Dot -->
                      <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                          <i class="d-block g-width-18 g-height-18 g-bg-primary g-brd-around g-brd-4 g-brd-gray-light-v4 rounded-circle"></i>
                      </div>
                      <!-- End Timeline Dot -->

                      <article class="g-pa-10--md">
                          <h3 class="h4 g-font-weight-300">確認通知</h3>
                          <p class="mb-0">小名想與你共乘，請回復</p>
                      </article>
                  </div>
                  <!-- End Timeline Content -->
              </div>
          </li>
          <li class="col-md-12 g-brd-bottom g-brd-0--md g-brd-gray-light-v4 g-pb-30 g-pb-0--md g-mb-30 g-mb-0--md">
              <div class="row">
                  <!-- Timeline Date -->
                  <div class="col-md-3 align-self-center text-md-right g-pr-40--md g-mb-20 g-mb-0--md">
                      <h4 class="h5 g-font-weight-300">系統通知</h4>
                      <h5 class="h6 g-font-weight-300 mb-0">2017/9/12</h5>
                  </div>
                  <!-- End Timeline Date -->

                  <!-- Timeline Content -->
                  <div class="col-md-9 align-self-center g-orientation-left g-pl-40--md">
                      <!-- Timeline Dot -->
                      <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                          <i class="d-block g-width-18 g-height-18 g-bg-primary g-brd-around g-brd-4 g-brd-gray-light-v4 rounded-circle"></i>
                      </div>
                      <!-- End Timeline Dot -->

                      <article class="g-pa-10--md">
                          <h3 class="h4 g-font-weight-300">搭乘通知</h3>
                          <p class="mb-0">明天7:00記得前去搭乘</p>
                      </article>
                  </div>
                  <!-- End Timeline Content -->
              </div>
          </li>
          <li class="col-md-12">
              <div class="row">
                  <!-- Timeline Date -->
                  <div class="col-md-3 align-self-center text-md-right g-pr-40--md g-mb-20 g-mb-0--md">
                      <h4 class="h5 g-font-weight-300">乘客訊息</h4>
                      <h5 class="h6 g-font-weight-300 mb-0">2017/8/30</h5>
                  </div>
                  <!-- End Timeline Date -->

                  <!-- Timeline Content -->
                  <div class="col-md-9 align-self-center g-orientation-left g-pl-40--md">
                      <!-- Timeline Dot -->
                      <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                          <i class="d-block g-width-18 g-height-18 g-bg-primary g-brd-around g-brd-4 g-brd-gray-light-v4 rounded-circle"></i>
                      </div>
                      <!-- End Timeline Dot -->

                      <article class="g-pa-10--md">
                          <h3 class="h4 g-font-weight-300">訊息</h3>
                          <p class="mb-0">請問明天的行程可不可以中途下車</p>
                      </article>
                  </div>
                  <!-- End Timeline Content -->
              </div>
          </li>
      </ul>
  </div>
  <!-- End Panel Body -->
</div>
<!-- End Experience Timeline -->

<!-- User Accounts -->
<div class="row">
  <!-- User Accounts (Option 1) -->
  <div class="col-md-6">
      <div class="card border-0 rounded-0">
          <!-- Panel Header -->
          <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
              <h3 class="h6 mb-0">
                  我的其他聯絡方式
              </h3>
              <div class="dropdown g-mb-10 g-mb-0--md">
                  <span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="fa fa-phone" aria-hidden="true"></i>                        
                      </span>

              </div>
          </div>
          <!-- End Panel Header -->

          <!-- Panel Body -->
          <div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-300 g-pa-0">
              <ul class="list-unstyled">
                  <li class="d-flex g-brd-bottom g-brd-gray-light-v4 g-py-10 g-px-15">
                      <a class="u-icon-v3 u-icon-size--xs g-bg-facebook g-color-white rounded-circle g-mr-15" href="#"><i class="fa fa-facebook"></i></a>
                      <a class="g-color-facebook" href="#">77johndoe</a>
                  </li>


                  <li class="d-flex g-brd-bottom g-brd-gray-light-v4 g-py-10 g-px-15">
                      <a class="u-icon-v3 u-icon-size--xs g-bg-lightred g-color-white rounded-circle g-mr-15" href="#"><i class="fa fa-google-plus"></i></a>
                      <a class="g-color-lightred g-color-lightred--hover" href="#">john_doe</a>
                  </li>

              </ul>
          </div>
          <!-- End Panel Body -->
      </div>
  </div>
  <!-- End User Accounts (Option 1) -->

</div>
<!-- End User Accounts -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        &times;
              </button>

              <h4 class="modal-title" id="myModalLabel">
                  會員修改
              </h4>
          </div>
          <div class="modal-body">
              <form class="bs-example bs-example-form" role="form">
                  <div class="form-group">
                      <span class="input-group-addon">姓名:</span>
                      <input type="text" class="form-control" placeholder="請輸入">
                      <span class="input-group-addon">學號:</span>
                      <input type="text" class="form-control" placeholder="請輸入">
                      <span class="input-group-addon">車牌:</span>
                      <input type="text" class="form-control" placeholder="請輸入">
                      <span class="input-group-addon">是否有駕照:</span>
                      <input type="text" class="form-control" placeholder="請輸入">
                      <span class="input-group-addon">電話:</span>
                      <input type="text" class="form-control" placeholder="請輸入">
                  </div>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">關閉
      </button>
              <button type="button" class="btn btn-primary">
        提交更改
      </button>
          </div>
      </div>
      <!-- /.modal-content -->
  </div>
  <!-- /.modal -->
</div>
<div class="modal fade" id="record" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                  </button>

              <h4 class="modal-title" id="myModalLabel">
                  我的搭乘紀錄
              </h4>
          </div>
          <div class="modal-body">
              <form class="bs-example bs-example-form" role="form">
                  <div class="form-group">
                      <table class="table">

                          <thead>
                              <tr>
                                  <th>時間</th>
                                  <th>地點</th>
                                  <th>合作對象</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>9/10 10:00</td>
                                  <td>中壢車站</td>
                                  <td>王曉明</td>
                              </tr>
                              <tr>
                                  <td>9/13 15:20 </td>
                                  <td>綠島</td>
                                  <td>汪興仁</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">關閉
                  </button>
                  

                  
          </div>
      </div>
      <!-- /.modal-content -->
  </div>
  <!-- /.modal -->
</div>
          </div>
          <!-- End Profle Content -->
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
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
@stop