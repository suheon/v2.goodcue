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
        <a href="/"><span class="material-icons">home</span></a>
      </li>
      <li class="breadcrumb-item"><a href="/item/recommend">뭐 치지 ?</a></li>
      <li class="breadcrumb-item active" aria-current="page">좋은큐 연구소 추천</li>
    </ol>
  </nav>


  <!-- 

    거래가격
    브랜드

  -->
  
  <div class="cate d-flex flex-column justify-content-center align-items-center">
    <div class="row">
      <div class="col-lg-4">
        <div class="recommend_cate"><a href="/item/recommend/goodcue/list">가성비 좋은큐 <br> <small>(거래가 150만원 이상)</small></a></div>
      </div>
      <div class="col-lg-4">
        <div class="recommend_cate"><a href="">가성비 좋은큐 <br> <small>(거래가 100~150만원)</small></a></div>
      </div>
      <div class="col-lg-4">
        <div class="recommend_cate"><a href="">가성비 좋은큐 <br> <small>(거래가 100만원)</small></a></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="recommend_cate"><a href="">힘이 좋은 큐</a></div>
      </div>
      <div class="col-lg-4">
        <div class="recommend_cate"><a href="">잘 끌리는 큐</a></div>
      </div>
      <div class="col-lg-4">
        <div class="recommend_cate"><a href="">잘 밀리는 큐</a></div>
      </div>
    </div>
  </div>

  
</div>

<!-- prettier-ignore -->
@endsection
