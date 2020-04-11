<!DOCTYPE html>
<html lang="ko">
  <head>
    <title>좋은큐연구소</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <link href="{{ mix('/css/all.css') }}" rel="stylesheet" />
  </head>
  <body class="menu-on-left">
    <!-- header -->
    <nav class="navbar fixed-top navbar-expand-lg">
      <div class="container">
        <div class="navbar-translate">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>

          <a class="navbar-brand" href="/site/main">
            <img class="logo" src="/img/logo.png" alt="좋은큐 연구소 로고" />
          </a>

          <div class="mobile-menu ml-auto pr-2">
            <button type="submit" class="btn btn-white btn-just-icon btn-round">
              <i class="material-icons">search</i>
            </button>
          </div>

          <ul class="profile mobile-menu pr-2">
            <li class="dropdown">
              <a
                href="#pablo"
                class="profile-photo dropdown-toggle nav-link"
                data-toggle="dropdown"
                aria-expanded="true"
              >
                <div class="profile-photo-small">
                  <img src="/img/default_profile.png" alt="Circle Image" class="rounded-circle img-fluid" />
                </div>
              </a>
              <div class="dropdown-menu">
                <!-- <h6 class="dropdown-header">Dropdown header</h6> -->
                <a href="#pablo" class="dropdown-item">마이 페이지</a>
                <a href="#pablo" class="dropdown-item">회원정보관리</a>
                <a href="#pablo" class="dropdown-item">로그아웃</a>
              </div>
            </li>
          </ul>
        </div>

        <div class="collapse navbar-collapse">
          <div class="navbar-nav mobile-menu">
            <div class="nav-item my-4 d-flex flex-column mx-4 welcome">
              <div class="welcome"><span class="font-weight-bold">김수헌</span>님 반갑습니다.</div>
              <div class="profile-userid font-italic">kimsudev@gmail.com</div>
            </div>
          </div>

          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="cue-menu" data-toggle="dropdown">
                <i class="material-icons">apps</i> 시타
              </a>
              <div class="dropdown-menu" aria-labelledby="menu-cue">
                <a class="dropdown-item" href="#">뭐치지?</a>
                <a class="dropdown-item" href="#">큐 시타</a>
                <a class="dropdown-item" href="#">상대 시타</a>
                <a class="dropdown-item" href="#">방문 시타</a>
                <a class="dropdown-item" href="#">Cue Travel Visa</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="cue-menu" data-toggle="dropdown">
                <i class="material-icons">repeat</i> 거래
              </a>
              <div class="dropdown-menu" aria-labelledby="menu-cue">
                <a class="dropdown-item" href="#">신품주문</a>
                <a class="dropdown-item" href="#">좋은큐연구소 진단 큐</a>
                <a class="dropdown-item" href="#">회원 직거래 큐</a>
                <a class="dropdown-item" href="#">포인트 몰</a>
                <a class="dropdown-item" href="#">판매위탁</a>
                <a class="dropdown-item" href="#">직거래</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="menu-cue" data-toggle="dropdown">
                <i class="material-icons">forum</i> CONTENTS
              </a>
              <div class="dropdown-menu" aria-labelledby="menu-cue">
                <a class="dropdown-item" href="#">시세정보</a>
                <!-- <a class="dropdown-item" href="#">이용후기</a> -->
                <a class="dropdown-item" href="#">자유게시판</a>
                <a class="dropdown-item" href="#">랭킹</a>
                <!-- <a class="dropdown-item" href="#">Youtube</a> -->
                <a class="dropdown-item" href="#">좋은큐연구소 큐 평가</a>
                <!-- <a class="dropdown-item" href="#">테마샵</a> -->
              </div>
            </li>
            <li class="nav-item">
              <a href="/notice.html" class="nav-link"><i class="material-icons">info</i> 공지</a>
            </li>
            <li class="nav-item">
              <a href="/notice.html" class="nav-link"><i class="material-icons">help</i> 고객센터</a>
            </li>
            <!-- <li class="nav-item">
              <a href="/site/logout" class="nav-link">로그아웃</a>
            </li> -->
          </ul>
          <form class="form-inline ml-auto">
            <div class="form-group bmd-form-group">
              <input type="text" class="form-control" placeholder="Search" />
            </div>
            <button type="submit" class="btn btn-white btn-just-icon btn-round">
              <i class="material-icons">search</i>
            </button>

            <button class="btn btn-primary ml-4 d-none">로그인</button>
            <button class="btn btn-outline-secondary d-none">회원가입</button>

            <ul class="navbar-nav ml-auto profile">
              <li class="dropdown nav-item">
                <a
                  href="#pablo"
                  class="profile-photo dropdown-toggle nav-link"
                  data-toggle="dropdown"
                  aria-expanded="false"
                >
                  <div class="profile-photo-small">
                    <img src="/img/default_profile.png" alt="Circle Image" class="rounded-circle img-fluid" />
                  </div>
                  <div class="ripple-container"></div>
                  <div class="ripple-container"></div
                ></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <!-- <h6 class="dropdown-header">Dropdown header</h6> -->
                  <a href="#pablo" class="dropdown-item">마이 페이지</a>
                  <a href="#pablo" class="dropdown-item">회원정보관리</a>
                  <a href="#pablo" class="dropdown-item">로그아웃</a>
                </div>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>

    <!-- main body -->
    <div class="container main">
      <div class="carousel">
        <div class="row">
          <div class="col-md-12">
            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="/img/bg2.jpg" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/img/bg3.jpg" alt="Second slide" />
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Somewhere Beyond, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/img/bg.jpg" alt="Third slide" />
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i>
                        Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- End Carousel Card -->
          </div>
        </div>
      </div>

      <div class="menu">
        <div class="row">
          <div class="col-md-2 col-4 m-border-bottom"><a href="#">뭐 치지?</a></div>
          <div class="col-md-2 col-4 m-border-bottom"><a href="#">시타</a></div>
          <div class="col-md-2 col-4 m-border-bottom"><a href="#">큐 구매</a></div>
          <div class="col-md-2 col-4"><a href="#">내 큐 팔기</a></div>
          <div class="col-md-2 col-4"><a href="#">시세정보</a></div>
          <div class="col-md-2 col-4"><a href="#">포인트몰</a></div>
        </div>
      </div>

      <div class="main-banner">
        <img src="/img/banner.jpg" width="100%" />
      </div>

      <!-- <div class="main-youtube">
          <div class="title"><i class="fa fa-youtube-play"></i> 좋은큐 연구소 Youtube</div>
          <div class="row">
            <div class="col-4">
              <div class="youtube-container">
                <img src="https://i.ytimg.com/vi/8NlGA9D0aWA/hqdefault.jpg" />
              </div>
            </div>
            <div class="col-4">
              <div class="youtube-container">
                <img src="https://i.ytimg.com/vi/cc50jAbp27c/hqdefault.jpg" />
              </div>
            </div>
            <div class="col-4">
              <div class="youtube-container">
                <img src="https://i.ytimg.com/vi/3-EjOTvJiCA/hqdefault.jpg" />
              </div>
            </div>
          </div>
        </div> -->

      <div class="rank">
        <div class="row">
          <div class="col-md-6">
            <div class="title">랭킹</div>
            <!-- Tabs with icons on Card -->
            <div class="card card-nav-tabs">
              <div class="card-header card-header-info">
                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" data-tabs="tabs">
                      <li class="nav-item">
                        <a class="nav-link active show" href="#rent-top" data-toggle="tab">
                          랜탈 TOP
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#pv-top" data-toggle="tab">
                          조회수 TOP
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#point-top" data-toggle="tab">
                          별점 TOP
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content text-center">
                  <div class="tab-pane active show" id="rent-top">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th class="text-center">IMG</th>
                            <th>큐이름</th>
                            <th>제조사</th>
                            <th>조인트</th>
                            <th>렌탈수</th>
                          </tr>
                        </thead>
                        <tbody>
                          @for($i=1;$i<=5;$i++)
                          <tr>
                            <th>{{ $i }}</th>
                            <td>
                              <div class="img-container"><img src="/img/thumb_cue_01.jpg" alt="..." /></div>
                            </td>
                            <td>빅토리아</td>
                            <td>롱고니</td>
                            <td>VP</td>
                            <td>{{ 11 - $i }}</td>
                          </tr>
                          @endfor
                          <tr>
                            <td colspan="6" class="text-right">
                              <a href="#" style="text-decoration: underline;">자세히 보기</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="pv-top">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th class="text-center">IMG</th>
                            <th>큐이름</th>
                            <th>제조사</th>
                            <th>조인트</th>
                            <th>조회수</th>
                          </tr>
                        </thead>
                        <tbody>
                          @for($i=1;$i<=5;$i++)
                          <tr>
                            <th>{{ $i }}</th>
                            <td>
                              <div class="img-container"><img src="/img/thumb_cue_01.jpg" alt="..." /></div>
                            </td>
                            <td>빅토리아</td>
                            <td>롱고니</td>
                            <td>VP</td>
                            <td>{{ 11 - $i }}</td>
                          </tr>
                          @endfor
                          <tr>
                            <td colspan="6" class="text-right">
                              <a href="#" style="text-decoration: underline;">자세히 보기</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="point-top">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th class="text-center">IMG</th>
                            <th>큐이름</th>
                            <th>제조사</th>
                            <th>조인트</th>
                            <th>별점</th>
                          </tr>
                        </thead>
                        <tbody>
                          @for($i=1;$i<=5;$i++)
                          <tr>
                            <th>{{ $i }}</th>
                            <td>
                              <div class="img-container"><img src="/img/thumb_cue_01.jpg" alt="..." /></div>
                            </td>
                            <td>빅토리아</td>
                            <td>롱고니</td>
                            <td>VP</td>
                            <td>{{ 11 - $i }}</td>
                          </tr>
                          @endfor
                          <tr>
                            <td colspan="6" class="text-right">
                              <a href="#" style="text-decoration: underline;">자세히 보기</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Tabs with icons on Card -->
          </div>
          <div class="col-md-6">
            <div class="title">최신 글</div>
            <!-- Tabs with icons on Card -->
            <div class="card card-nav-tabs">
              <div class="card-header card-header-success">
                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" data-tabs="tabs">
                      <li class="nav-item">
                        <a class="nav-link active show" href="#recent-blog" data-toggle="tab">
                          Blog
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#recent-review" data-toggle="tab">
                          Review
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#recent-board" data-toggle="tab">
                          와글와글
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content text-center">
                  <div class="tab-pane active show" id="recent-blog">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th class="text-center">IMG</th>
                            <th>큐이름</th>
                            <th>제조사</th>
                            <th>조인트</th>
                            <th>렌탈수</th>
                          </tr>
                        </thead>
                        <tbody>
                          @for($i=1;$i<=5;$i++)
                          <tr>
                            <th>{{ $i }}</th>
                            <td>
                              <div class="img-container"><img src="/img/thumb_cue_01.jpg" alt="..." /></div>
                            </td>
                            <td>빅토리아</td>
                            <td>롱고니</td>
                            <td>VP</td>
                            <td>{{ 11 - $i }}</td>
                          </tr>
                          @endfor
                          <tr>
                            <td colspan="6" class="text-right">
                              <a href="#" style="text-decoration: underline;">자세히 보기</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="recent-review">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th class="text-center">IMG</th>
                            <th>큐이름</th>
                            <th>제조사</th>
                            <th>조인트</th>
                            <th>조회수</th>
                          </tr>
                        </thead>
                        <tbody>
                          @for($i=1;$i<=5;$i++)
                          <tr>
                            <th>{{ $i }}</th>
                            <td>
                              <div class="img-container"><img src="/img/thumb_cue_01.jpg" alt="..." /></div>
                            </td>
                            <td>빅토리아</td>
                            <td>롱고니</td>
                            <td>VP</td>
                            <td>{{ 11 - $i }}</td>
                          </tr>
                          @endfor
                          <tr>
                            <td colspan="6" class="text-right">
                              <a href="#" style="text-decoration: underline;">자세히 보기</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="recent-board">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th class="text-center">IMG</th>
                            <th>큐이름</th>
                            <th>제조사</th>
                            <th>조인트</th>
                            <th>별점</th>
                          </tr>
                        </thead>
                        <tbody>
                          @for($i=1;$i<=5;$i++)
                          <tr>
                            <th>{{ $i }}</th>
                            <td>
                              <div class="img-container"><img src="/img/thumb_cue_01.jpg" alt="..." /></div>
                            </td>
                            <td>빅토리아</td>
                            <td>롱고니</td>
                            <td>VP</td>
                            <td>{{ 11 - $i }}</td>
                          </tr>
                          @endfor
                          <tr>
                            <td colspan="6" class="text-right">
                              <a href="#" style="text-decoration: underline;">자세히 보기</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Tabs with icons on Card -->
          </div>
        </div>
      </div>

      <div class="theme">
        <div class="title">
          테마샵<span class="ml-auto pr-1"><a href="#">전체보기</a></span>
        </div>
        <div class="row">
          <div class="col-4">
            <a class="theme-img" href="/theme-shop/1">
              <img src="/img/1.png" width="100%" alt="" />
            </a>
            <div class="theme-screen">
              <div class="theme-title">센놈특집</div>
              <div class="theme-desc">힘 좋다는 놈들 모아봤소</div>
            </div>
          </div>
          <div class="col-4">
            <div class="theme-img">
              <a href="/theme-shop/1">
                <img src="/img/2.png" width="100%" alt="" />
              </a>
            </div>
            <div class="theme-screen">
              <div class="theme-title">가성비 특집</div>
              <div class="theme-desc">비싸야지 좋은 큐인감</div>
            </div>
          </div>

          <div class="col-4">
            <div class="theme-img">
              <a href="/theme-shop/1">
                <img src="/img/3.png" width="100%" alt="" />
              </a>
            </div>
            <div class="theme-screen">
              <div class="theme-title">무사시 함 쳐보자</div>
              <div class="theme-desc">아놔! 무사시가 뭐길레</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="theme-img">
              <a href="/theme-shop/1">
                <img src="/img/4.png" width="100%" alt="" />
              </a>
            </div>
            <div class="theme-screen">
              <div class="theme-title">센놈특집</div>
              <div class="theme-desc">힘 좋다는 놈들 모아봤소</div>
            </div>
          </div>
          <div class="col-4">
            <div class="theme-img">
              <a href="/theme-shop/1">
                <img src="/img/5.png" width="100%" alt="" />
              </a>
            </div>
            <div class="theme-screen">
              <div class="theme-title">가성비 특집</div>
              <div class="theme-desc">비싸야지 좋은 큐인감</div>
            </div>
          </div>

          <div class="col-4">
            <div class="theme-img">
              <a href="/theme-shop/1">
                <img src="/img/6.png" width="100%" alt="" />
              </a>
            </div>
            <div class="theme-screen">
              <div class="theme-title">무사시 함 쳐보자</div>
              <div class="theme-desc">아놔! 무사시가 뭐길레</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer footer-black">
      <div class="container">
        <a class="footer-brand" href="/">좋은큐연구소</a>
        <ul class="pull-center">
          <li>
            <a href="#pablo">
              회사소개
            </a>
          </li>
          <li>
            <a href="#pablo">
              이용약관
            </a>
          </li>
          <li>
            <a href="#pablo">
              개인정보취급방침
            </a>
          </li>
          <li>
            <a href="#pablo">
              전자금융거래이용약관
            </a>
          </li>
          <li>
            <a href="#pablo">
              고객센터
            </a>
          </li>
        </ul>
        <ul class="social-buttons float-right">
          <li>
            <a
              href="https://www.youtube.com/channel/UCErSIo9mgRLBg1J_1c89YFg"
              target="_blank"
              class="btn btn-just-icon btn-link"
            >
              <i class="fab fa-youtube"></i>
            </a>
          </li>
          <li>
            <a href="https://blog.naver.com/wheng00" target="_blank" class="btn btn-just-icon btn-link">
              <i class="fab fa-blogger"></i>
            </a>
          </li>
        </ul>
        <!-- <ul>
          <li>대표자 : 김수일</li>
          <li>주소 : 경기도 고양시 일산서구 송포백송길 92 (덕이동)</li>
          <li>영업시간 : 평일 10시 - 20시 (점심 12시 - 13시 / 월 휴무)</li>
          <li>copyright ⓒ 좋은큐연구소 co.ltd</li>
        </ul> -->
      </div>
    </footer>

    <!--   Core JS Files   -->
    <script src="/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="/js/core/popper.min.js" type="text/javascript"></script>
    <script src="/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin  -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="/js/plugins/bootstrap-tagsinput.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="/js/material-kit.js?v=2.2.0" type="text/javascript"></script>
  </body>
</html>
