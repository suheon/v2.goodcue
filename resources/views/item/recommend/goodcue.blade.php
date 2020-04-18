<!-- prettier-ignore -->
@extends('layouts.app')
<!-- prettier-ignore -->
@section('title', '메인 페이지')
<!-- prettier-ignore -->
@section('content')

<div class="container item">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">
          <span class="material-icons">
            home
          </span>
        </a>
      </li>
      <li class="breadcrumb-item"><a href="/">뭐 치지 ?</a></li>
      <li class="breadcrumb-item active" aria-current="page">좋은큐 연구소 추천</li>
    </ol>
  </nav>

  <div class="item">
    <div class="header">상품 구분</div>
    <div class="body">상품 리스트</div>
  </div>
</div>

<!-- prettier-ignore -->
@endsection
