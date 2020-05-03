<!-- prettier-ignore -->
@extends('layouts.no-header-app')
<!-- prettier-ignore -->
@section('title', '메인 페이지')
<!-- prettier-ignore -->
@section('content')

<div class="container search d-flex flex-column">
  <div class="header">
    좋은큐 연구소 검색
    <a class="back" href="javascript:history.back();">
      <span class="material-icons">keyboard_backspace</span>
    </a>
  </div>

  <div class="input">
    <div class="card card-raised card-form-horizontal">
      <div class="card-body">
        <form method="" action="">
          <div class="row">
            <div class="col-9">
              <div class="input-group">
                <input type="text" value="" placeholder="검색어를 입력해주세요." class="form-control" />
              </div>
            </div>
            <div class="col-3">
              <button type="button" class="btn btn-primary btn-block">검색</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- prettier-ignore -->
@endsection
