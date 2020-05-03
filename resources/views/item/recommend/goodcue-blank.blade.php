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

  <div class="filter mb-4">
    <div class="row">
      <div class="col-3 text-right filter-name">거래가격</div>
      <div class="col-9">
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" />
            100만원 이하
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>

        <div class=" form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" />
            100~200 만원
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>

        <div class=" form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" />
            200 만원 이상
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-3 text-right filter-name">성능</div>
      <div class="col-9">
        <div class=" form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" />
            끌림
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>
        <div class=" form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" />
            밀림
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>
        <div class=" form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" />
            힘
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>
        <div class=" form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" />
            회전
            <span class="form-check-sign">
              <span class="check"></span>
            </span>
          </label>
        </div>
      </div>
    </div>
  </div>

  <div class="item-list d-flex flex-column">
    <div class="container">
      <div class="row">원하시는 조건을 선택해주세요.</div>
    </div>
  </div>
</div>

<!-- prettier-ignore -->
@endsection
