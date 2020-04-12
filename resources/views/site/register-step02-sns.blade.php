@extends('layouts.app')

@section('title', '메인 페이지')

@section('content')
<div class="container register d-flex flex-column justify-content-center align-items-center">
  <div class="register-panel col-lg-5 col-10">
    <form class="form" method="" action="">
      <div class="card card-register card-hidden">
        <div class="card-body ">
          <h3 class="card-title text-center">회 원 가 입</h3>
                    
          <div class="col-12">
            <span class="bmd-form-group">
              <div class="input-group">
                <input type="text" class="form-control nickname" placeholder="닉네임" />
                <button type="button" class="help-btn"><i class="material-icons">help_outline</i></button>
              </div>
            </span>
          </div>
          
          <div class="col-12">
            <div class="input-group">
              <select class="selectpicker" data-style="select-with-transition" title="3쿠션 점수 선택" data-size="7">
                @for($i=1; $i<=40; $i++) 
                  <option value="{{$i}}">{{$i}}</option>
                @endfor
              </select>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group form-file-upload form-file-multiple">
              <input type="file" multiple="" class="inputFileHidden">
              <div class="input-group">
                <input type="text" class="form-control inputFileVisible" placeholder="프로필 이미지 (옵션)">
                <span class="input-group-btn">
                  <button type="button" class="btn btn-link btn-fab btn-primary">
                    <i class="material-icons">attach_file</i>
                  </button>
                </span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <span class="bmd-form-group">
              <div class="input-group">
                <input type="text" class="form-control cue" placeholder="현재 사용하고 계신 큐가 있으시면 입력해주세요." />
              </div>
            </span>
          </div>
        </div>

        <div class="agree">

          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="">아래 내용에 모두 동의합니다
              <span class="form-check-sign"><span class="check"></span></span>
            </label>
          </div>

          <div class="clause-form">
            <ul>
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="">[필수] 이용약관 동의
                    <span class="form-check-sign"><span class="check"></span></span>
                  </label>
                </div>
                <div class="more"><a href="/static/stipulation">상세보기</a></div>
              </li>
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="">[필수] 개인정보취급방침 동의
                    <span class="form-check-sign"><span class="check"></span></span>
                  </label>
                </div>
                <div class="more"><a href="/static/privacy">상세보기</a></div>
              </li>
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="">[선택] 전자금융거래이용약관
                    <span class="form-check-sign"><span class="check"></span></span>
                  </label>
                </div>
                <div class="more"><a href="/static/finance">상세보기</a></div>
              </li>
            </ul>
          </div>
        </div>


        <div class="card-footer justify-content-center flex-fill p-4">
          <button type="submit" class="btn btn-primary">회 원 가 입</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection