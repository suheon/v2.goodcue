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
      <li class="breadcrumb-item active" aria-current="page">인기 좋은 큐</li>
    </ol>
  </nav>

  <!-- <div class="filter mb-4">
    <div class="row">
      <div class="col-3 text-right filter-name">거래가격</div>
      <div class="col-9">
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="" checked />
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
  </div> -->

  <div class="item-list d-flex flex-column ">
    <div class="row">
      <div class="col-lg-6">
        <div class="item d-flex flex-row">
          <div class="item-image">
            <img class="img" src="/img/items/224.jpg" />
          </div>
          <div class="item-desc pl-4">
            <div class="title">무심타이칸 4-1</div>
            <div class="brand">제조사/브랜드 : 유니버셜</div>
            <div class="joint">조인트 : 래디얼 플랫</div>
            <div class="shaft">상대 : 유니버셜 스마트상대</div>
            <div class="rent-price">3일 : 1.2만원 / 7일 : 1.5만원</div>
            <div class="review pt-2">
              <i class="fas fa-star" style="color:#ffa500"></i> 4.5 <i class="far fa-comment pl-4"></i> 32
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="item d-flex flex-row">
          <div class="item-image">
            <img class="img" src="/img/items/321.jpg" width="140px" />
          </div>
          <div class="item-desc pl-4">
            <div class="title">무사시 버터</div>
            <div class="brand">제조사/브랜드 : 아담</div>
            <div class="joint">조인트 : 10산 파일롯</div>
            <div class="shaft">상대 : 아담 프로악스</div>
            <div class="rent-price">3일 : 5만원 / 7일 : 10만원</div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="item d-flex flex-row">
          <div class="item-image">
            <img class="img" src="/img/items/224.jpg" />
          </div>
          <div class="item-desc pl-4">
            <div class="title">무심타이칸 4-1</div>
            <div class="brand">제조사/브랜드 : 유니버셜</div>
            <div class="joint">조인트 : 래디얼 플랫</div>
            <div class="shaft">상대 : 유니버셜 스마트상대</div>
            <div class="rent-price">3일 : 1.2만원 / 7일 : 1.5만원</div>
            <div class="review pt-2">
              <i class="fas fa-star" style="color:#ffa500"></i> 4.5 <i class="far fa-comment pl-4"></i> 32
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="item d-flex flex-row">
          <div class="item-image">
            <img class="img" src="/img/items/321.jpg" width="140px" />
          </div>
          <div class="item-desc pl-4">
            <div class="title">무사시 버터</div>
            <div class="brand">제조사/브랜드 : 아담</div>
            <div class="joint">조인트 : 10산 파일롯</div>
            <div class="shaft">상대 : 아담 프로악스</div>
            <div class="rent-price">3일 : 5만원 / 7일 : 10만원</div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="item d-flex flex-row">
          <div class="item-image">
            <img class="img" src="/img/items/224.jpg" />
          </div>
          <div class="item-desc pl-4">
            <div class="title">무심타이칸 4-1</div>
            <div class="brand">제조사/브랜드 : 유니버셜</div>
            <div class="joint">조인트 : 래디얼 플랫</div>
            <div class="shaft">상대 : 유니버셜 스마트상대</div>
            <div class="rent-price">3일 : 1.2만원 / 7일 : 1.5만원</div>
            <div class="review pt-2">
              <i class="fas fa-star" style="color:#ffa500"></i> 4.5 <i class="far fa-comment pl-4"></i> 32
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="item d-flex flex-row">
          <div class="item-image">
            <img class="img" src="/img/items/321.jpg" width="140px" />
          </div>
          <div class="item-desc pl-4">
            <div class="title">무사시 버터</div>
            <div class="brand">제조사/브랜드 : 아담</div>
            <div class="joint">조인트 : 10산 파일롯</div>
            <div class="shaft">상대 : 아담 프로악스</div>
            <div class="rent-price">3일 : 5만원 / 7일 : 10만원</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- prettier-ignore -->
@endsection
