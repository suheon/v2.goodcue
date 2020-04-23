<!-- prettier-ignore -->
@extends('layouts.app')
<!-- prettier-ignore -->
@section('title', '메인 페이지')
<!-- prettier-ignore -->
@section('content')

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
      <div class="col-md-2 col-4 m-border-bottom"><a href="/item/recommend">뭐 치지?</a></div>
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
      테마샵<span class="ml-auto pr-2"><a href="#">전체보기</a></span>
    </div>
    <div class="row">
      <div class="col-4">
        <a class="theme-img" href="/theme-shop/1">
          <img src="/img/1.png" width="100%" alt="" />
        </a>
        <div class="theme-screen">
          <div class="theme-title">센놈특집</div>
          <div class="theme-desc text-truncate">힘 좋다는 놈들 모아봤소</div>
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
          <div class="theme-desc text-truncate">비싸야지 좋은 큐인감</div>
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
          <div class="theme-desc text-truncate">아놔! 무사시가 뭐길레</div>
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
          <div class="theme-desc text-truncate">힘 좋다는 놈들 모아봤소</div>
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
          <div class="theme-desc text-truncate">비싸야지 좋은 큐인감</div>
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
          <div class="theme-desc text-truncate">아놔! 무사시가 뭐길레</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
