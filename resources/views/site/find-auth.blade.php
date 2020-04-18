<!-- prettier-ignore -->
@extends('layouts.app')
<!-- prettier-ignore -->
@section('title', '메인 페이지')
<!-- prettier-ignore -->
@section('content')
<div class="container find-auth d-flex flex-column justify-content-center align-items-center">
  <div class="title">아이디 / 비밀번호 찾기</div>
  <div class="auth-panel col-lg-5 col-10">
    <ul class="nav nav-tabs nav-pills nav-justified justify-content-center" id="auth-tab" role="tablist">
      <li class="nav-item">
        <a
          class="nav-link active"
          id="id-tab"
          data-toggle="tab"
          href="#findId"
          role="tab"
          aria-controls="findId"
          aria-selected="true"
          >아이디 찾기</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          id="password-tab"
          data-toggle="tab"
          href="#find-password"
          role="tab"
          aria-controls="profile"
          aria-selected="false"
          >비밀번호 찾기</a
        >
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="findId" role="tabpanel" aria-labelledby="id-tab">
        <form>
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="이름을 입력해주세요." />
          </div>
          <div class="form-group">
            <input
              type="text"
              name="hpno"
              class="form-control"
              id="name"
              placeholder="전화번호를 입력해주세요. ( - 제외 숫자만 )"
            />
          </div>

          <button type="submit" class="btn btn-primary">확인</button>
        </form>
      </div>
      <div class="tab-pane fade" id="find-password" role="tabpanel" aria-labelledby="password-tab">
        <form>
          <div class="form-group d-flex">
            <input
              type="text"
              name="userid"
              class="form-control mr-2"
              placeholder="아이디 또는 이메일을 입력해주세요."
            />
            <button class="btn">확인</button>
          </div>
          <div class="form-group d-flex">
            <input
              type="text"
              name="hpno"
              class="form-control mr-2"
              id="name"
              placeholder="전화번호를 입력해주세요. ( - 제외 숫자만 )"
            />
            <button class="btn">인증번호 받기</button>
          </div>
          <div class="form-group">
            <input type="text" name="cert-no" class="form-control" placeholder="인증번호 입력." />
          </div>

          <button type="submit" class="btn btn-primary">확인</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
