<!-- prettier-ignore -->
@extends('layouts.app')
<!-- prettier-ignore -->
@section('title', '메인 페이지')
<!-- prettier-ignore -->
@section('content')
<div class="container find-auth d-flex flex-column justify-content-center align-items-center">
  <div class="auth-panel col-lg-5 col-10">
    <!-- <h3><small>Tabs on Plain Card</small></h3> -->
    <!-- Tabs on Plain Card -->
    <div class="card card-nav-tabs">
      <div class="card-header card-header-warning">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#home" data-toggle="tab">아이디 찾기</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#updates" data-toggle="tab">비밀번호 찾기</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body ">
        <div class="tab-content text-center">
          <div class="tab-pane active" id="home">
            <p>
              panel1
            </p>
          </div>
          <div class="tab-pane" id="updates">
            <p>
              panel2
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
