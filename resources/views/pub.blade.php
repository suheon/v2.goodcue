<?php
  $no = 1;
?>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <style>
      body {
        padding: 20px;
      }
      .text-danger {
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <h3>퍼블리싱 결과파일</h3>

    <h4><span class="text-danger">publishing 작업 진행 된거는 확인 하신 후에 comment 주세요!! </span></h4>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No.</th>
          <th>페이지 이름</th>
          <th>LINK URL (가칭)</th>
          <th>publishing 진행</th>
          <th>Description OR Question</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$no++}}</td>
          <td>메인화면(로그인 전)</td>
          <td><a href="/" target="_blank">/</a></td>
          <td>O</td>
          <td>
            <span class="text-danger">메인 배너 및 메인 메뉴 디자인 요소 필요</span>
          </td>
        </tr>
        <tr>
          <td>{{$no++}}</td>
          <td>메인화면(로그인 후)</td>
          <td><a href="/site/main_1" target="_blank">/site/main_1</a></td>
          <td>O</td>
          <td></td>
        </tr>
        <tr>
          <td>{{$no++}}</td>
          <td>회원가입-step01</td>
          <td><a href="/site/register/step01">/site/register/step01</a></td>
          <td>O</td>
          <td>
            본인인증 이후에.. 직접가입 OR SNS 가입 갈라치기 선택하도록..
          </td>
        </tr>

        <tr>
          <td>{{$no++}}</td>
          <td>회원가입-step02</td>
          <td><a href="/site/register/step02">/site/register/step02</a></td>
          <td>O</td>
          <td>프로필 이미지를 아예 빼버리고 회원 정보 관리에서 입력 하도록 할까.. (여기에 있으면 어려울수도.)</td>
        </tr>

        <tr>
          <td>{{$no++}}</td>
          <td>회원가입(SNS)</td>
          <td><a href="/site/register/step02-sns">/site/register/step02-sns</a></td>
          <td>O</td>
          <td></td>
        </tr>

        <tr>
          <td>{{$no++}}</td>
          <td>아이디/비밀번호 찾기</td>
          <td><a href="/site/find-auth">/site/find-auth</a></td>
          <td>O</td>
          <td>
            <ol>
              <li>메일 사용 포기..</li>
              <li>아이디 찾기 입력시 아이디 바로 알려줌( 두글자 정도 마스킹처리하고)</li>
              <li>비밀번호 찾기 시 휴대폰 인증번호(카톡 or 메세지 활용) 입력 시 변경 비밀번호 설정 후 알려줌.</li>
            </ol>
          </td>
        </tr>

        <tr>
          <td>{{$no++}}</td>
          <td>검색(모바일)</td>
          <td><a href="/site/search">/site/search</a></td>
          <td>O</td>
          <td>모바일에서만.</td>
        </tr>

        <tr>
          <td>{{$no++}}</td>
          <td>뭐치지? (구분)</td>
          <td><a href="/item/recommend" target="_blank">/item/recommend</a></td>
          <td>O</td>
          <td><span class="text-danger">디자인 요소 필요</span></td>
        </tr>
        <tr>
          <td>{{$no++}}</td>
          <td>좋은큐연구소 추천</td>
          <td><a href="/item/recommend/goodcue-blank" target="_blank">/item/recommend/goodcue-blank</a></td>
          <td>O</td>
          <td></td>
        </tr>
        <tr>
          <td>{{$no++}}</td>
          <td>좋은큐연구소 추천</td>
          <td><a href="/item/recommend/goodcue" target="_blank">/item/recommend/goodcue</a></td>
          <td>O</td>
          <td></td>
        </tr>

        <tr>
          <td>{{$no++}}</td>
          <td>인기 좋은 큐</td>
          <td><a href="/item/recommend/hot">/item/recommend/hot</a></td>
          <td>O</td>
          <td></td>
        </tr>
        <tr>
          <td>{{$no++}}</td>
          <td>평가 좋은 큐</td>
          <td><a href="/item/recommend/review">/item/recommend/review</a></td>
          <td>X</td>
          <td>위와 동일</td>
        </tr>
        <tr>
          <td>{{$no++}}</td>
          <td>시그니처 큐</td>
          <td><a href="/item/recommend/signature">/item/recommend/signature</a></td>
          <td>X</td>
          <td>좋은큐 연구소 추천과 동일 상단 상품 필터에 선수명(?)</td>
        </tr>
        <tr>
          <td>{{$no++}}</td>
          <td>시타 구분 페이지</td>
          <td><a href="/item/rent" target="_blank">/item/rent</a></td>
          <td>O</td>
          <td><span class="text-danger">디자인 요소 필요</span></td>
        </tr>
        <tr>
          <td>{{$no++}}</td>
          <td>시타 - 큐</td>
          <td><a href="/item/rent/cue" target="_blank">/item/rent/cue</a></td>
          <td>X</td>
          <td>롱고니, 한밭, 아담, JBS, 빌킹, 몰리나리, 유니버셜, 나머지 기타</td>
        </tr>
        <tr>
          <td>{{$no++}}</td>
          <td>시타 - 상대</td>
          <td><a href="/item/rent/shaft" target="_blank">/item/rent/shaft</a></td>
          <td>X</td>
          <td><span class="text-danger"></span></td>
        </tr>
        <tr>
          <td>{{$no++}}</td>
          <td>시타 - 방문시타</td>
          <td><a href="/item/rent/visit" target="_blank">/item/rent/visit</a></td>
          <td>X</td>
          <td><span class="text-danger"></span></td>
        </tr>
        <tr>
          <td>{{$no++}}</td>
          <td>시타 - visa</td>
          <td><a href="/item/rent/visa" target="_blank">/item/rent/visa</a></td>
          <td>X</td>
          <td><span class="text-danger"></span></td>
        </tr>
        <tr>
          <td>{{$no++}}</td>
          <td>상품 상세 페이지</td>
          <td><a href="/item/1" target="_blank">/item/1</a></td>
          <td>X</td>
          <td><span class="text-danger"></span></td>
        </tr>
      </tbody>
    </table>

    <br />
    <br /><br /><br /><br /><br /><br />

    <h3>Q&A</h3>
    <p>
      전문가 큐 블로그 어디갔나?
    </p>
    <p>테마샵, 큐 블로그의 한 카테고리로 넣는게 맞니 않나?</p>

    <p>아니면 테마샵만 살리고, youtube , 큐 블로그 등은 외부 컨텐츠로 만 남기는게 맞니 않나?</p>
  </body>
</html>
