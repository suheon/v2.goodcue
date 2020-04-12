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

      <a class="navbar-brand" href="{{rpath('main')}}">
        <img class="logo" src="/img/logo.png" alt="좋은큐 연구소 로고" />
      </a>

      <div class="mobile-menu ml-auto pr-2">
        <button type="submit" class="btn btn-white btn-just-icon btn-round">
          <i class="material-icons">search</i>
        </button>
      </div>
    </div>

    <div class="collapse navbar-collapse">
      <div class="navbar-nav mobile-menu">
        <div class="nav-item my-4 d-flex justify-content-center mx-4">
          <a href="{{rpath('login')}}" class="btn btn-primary mr-2" role="button">로그인</a>
          <a href="{{rpath('register-01')}}" class="btn btn-outline-secondary">회원가입</a>
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
            <a class="dropdown-item" href="#">공지사항</a>
            <!-- <a class="dropdown-item" href="#">테마샵</a> -->
          </div>
        </li>
        <!-- <li class="nav-item">
          <a href="/notice.html" class="nav-link"><i class="material-icons">info</i> 공지</a>
        </li> -->
        <li class="nav-item">
          <a href="/notice.html" class="nav-link"><i class="material-icons">help</i> HELP</a>
        </li>
      </ul>
      <form class="form-inline ml-auto">
        <div class="form-group bmd-form-group">
          <input type="text" class="form-control" placeholder="Search" />
        </div>
        <button type="submit" class="btn btn-white btn-just-icon btn-round">
          <i class="material-icons">search</i>
        </button>

        <a href="{{rpath('login')}}" class="btn btn-primary ml-4">로그인</a>
        <a href="{{rpath('register-01')}}" class="btn btn-outline-secondary">회원가입</a>
      </form>
    </div>
  </div>
</nav>