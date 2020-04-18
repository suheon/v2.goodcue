<!-- prettier-ignore -->
@extends('layouts.app')
<!-- prettier-ignore -->
@section('title', '메인 페이지')
<!-- prettier-ignore -->
@section('content')

<div class="container recommend d-flex flex-column">
  <!-- <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">
          <span class="material-icons">
            home
          </span>
        </a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">뭐 치지?</li>
    </ol>
  </nav> -->

  <div class="cate d-flex flex-column justify-content-center align-items-center">
    <div class="row">
      <div class="col-lg-6">
        <div class="recommend_cate"><a href="/item/recommend/goodcue">좋은큐연구소 추천</a></div>
      </div>
      <div class="col-lg-6">
        <div class="recommend_cate"><a href="/item/recommend/hot">인기 좋은 큐</a></div>
      </div>
      <div class="col-lg-6">
        <div class="recommend_cate"><a href="/item/recommend/review">평가 좋은 큐</a></div>
      </div>
      <div class="col-lg-6">
        <div class="recommend_cate"><a href="/item/recommend/signature">선수별 시그니처큐</a></div>
      </div>
    </div>
  </div>
</div>

<!-- prettier-ignore -->
@endsection
