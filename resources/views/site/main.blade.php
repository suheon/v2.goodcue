<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- Material Kit CSS -->
    <link href="/css/all.css?v=2.2.0" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
      <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container">
          <div class="navbar-translate">
            <a class="navbar-brand" href="/site/main">
              <img class="logo" src="/img/logo.png" alt="좋은큐 연구소 로고" />
            </a>

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
          </div>

          <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="cue-menu" data-toggle="dropdown">
                  <i class="material-icons">apps</i> 큐 구매 / 체험
                </a>
                <div class="dropdown-menu" aria-labelledby="menu-cue">
                  <a class="dropdown-item" href="#">menu1</a>
                  <a class="dropdown-item" href="#">menu3</a>
                  <a class="dropdown-item" href="#">menu2</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menu-cue" data-toggle="dropdown">
                  <i class="material-icons">forum</i> 큐 이야기
                </a>
                <div class="dropdown-menu" aria-labelledby="menu-cue">
                  <a class="dropdown-item" href="#">menu1</a>
                  <a class="dropdown-item" href="#">menu3</a>
                  <a class="dropdown-item" href="#">menu2</a>
                </div>
              </li>
            </ul>
            <form class="form-inline ml-auto">
              <div class="form-group bmd-form-group">
                <input type="text" class="form-control" placeholder="Search" />
              </div>
              <button type="submit" class="btn btn-white btn-just-icon btn-round">
                <i class="material-icons">search</i>
              </button>

              <button class="btn btn-primary ml-4">로그인</button>
              <button class="btn btn-outline-secondary">회원가입</button>
            </form>
          </div>
        </div>
      </nav>

      <!-- <div class="page-header header-filter" data-parallax="true" style="background-image: url('/img/bg3.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <div class="brand text-center">
                <h1>Your title here</h1>
                <h3 class="title text-center">Subtitle</h3>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <div class="main">
        <div id="carousel">
          <div class="row">
            <div class="col-md-12">
              <!-- Carousel Card -->
              <div class="card card-raised card-carousel">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item">
                      <img class="d-block w-100" src="/img/bg2.jpg" alt="First slide" />
                      <div class="carousel-caption d-none d-md-block">
                        <h4>
                          <i class="material-icons">location_on</i>
                          Yellowstone National Park, United States
                        </h4>
                      </div>
                    </div>
                    <div class="carousel-item active">
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

        <div class="main-youtube">
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
        </div>

        <div class="rank">
          <div class="row">
            <div class="col-md-6">
              <!-- <h5>좋은큐 연구소 랭킹</h5> -->
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
              <!-- <h5>좋은큐 연구소 랭킹</h5> -->
              <!-- Tabs with icons on Card -->
              <div class="card card-nav-tabs">
                <div class="card-header card-header-success">
                  <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active show" href="#recent-blog" data-toggle="tab">
                            최근 Blog
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#recent-review" data-toggle="tab">
                            최근 Review
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#recent-board" data-toggle="tab">
                            최근 와글와글
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

        <div class="theme-shop">테마샵</div>
      </div>

      <!-- <footer class="footer footer-default">
        <div class="container">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com/">
                  Creative Tim
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            , made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com/" target="blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer> -->
    </div>

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
