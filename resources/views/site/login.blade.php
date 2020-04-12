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
    <div class="container login d-flex flex-column justify-content-center align-items-center">
      <div class="login-panel col-lg-5 col-10">
        <form class="form" method="" action="">
          <div class="card card-login card-hidden">
            <div class="card-body ">
              <h3 class="card-title text-center">로그인</h3>
              <span class="bmd-form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="사용자 아이디 OR 이메일" />
                </div>
              </span>
              <span class="bmd-form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="비밀번호" />
                </div>
              </span>
            </div>
            <div class="card-footer justify-content-center flex-fill p-4">
              <button type="submit" class="btn btn-primary">로 그 인</button>
            </div>

            <p class="card-description text-center">OR SNS Login</p>

            <div class="sns-btn d-flex justify-content-center p-4">
              <a href="/sns/login/naver" data-name="sns_login" class="col-6 text-left">
                <img src="/img/btn-naver.png" alt="네이버 로그인" />
              </a>
              <a href="/sns/login/kakao" data-name="sns_login" class="col-6 text-right">
                <img src="/img/btn-kakao.png" alt="카카오 로그인" />
              </a>
            </div>
          </div>
        </form>
      </div>
      <div class="login-other col-lg-5 col-10">
        <div class="row">
          <a href="/find-auth" class="col-6 text-right">아이디/비밀번호 찾기</a>
          <a href="/site/register" class="col-6 text-left">회원가입 하기</a>
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
