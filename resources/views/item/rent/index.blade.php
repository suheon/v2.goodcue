<!-- prettier-ignore -->
@extends('layouts.app')
<!-- prettier-ignore -->
@section('title', '메인 페이지')
<!-- prettier-ignore -->
@section('content')

<div class="container recommend d-flex flex-column">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">
          <span class="material-icons">
            home
          </span>
        </a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">시타</li>
    </ol>
  </nav>

  <div class="cate d-flex flex-column justify-content-center align-items-center">
    <div class="row">
      <div class="col-lg-6">
        <div class="recommend_cate" onClick="location.href='/item/rent/cue'">
          <a href="/item/rent/cue">큐</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="recommend_cate" onClick="location.href='/item/rent/shaft'">
          <a href="/item/rent/shaft">상대</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="recommend_cate" onClick="location.href='/item/rent/visit'">
          <a href="/item/rent/visit">방문시타</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="recommend_cate" onClick="location.href='/item/rent/visa'">
          <a href="/item/rent/visa">Cue Travel Visa</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- prettier-ignore -->
@endsection
