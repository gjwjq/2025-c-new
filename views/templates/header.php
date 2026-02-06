<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>main</title>
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="/css/main.css" />
  <link rel="stylesheet" href="/css/sub1.css" />
  <link rel="stylesheet" href="/css/sub2.css" />
  <link rel="stylesheet" href="/css/sub4.css" />
  <link
    rel="stylesheet"
    href="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/공통/fontawesome/css/font-awesome.min.css" />
</head>

<body>
  <header>
    <div class="header-con">
      <a href="/"><img src="./images/logo.png" alt="logo" title="logo" /></a>
      <div class="dropdown">
        <ul>
          <a href="/sub1">소개</a>
          <ul class="drop">
            <li><a href="#">-</a></li>
            <li><a href="#">-</a></li>
          </ul>
        </ul>
        <ul>
          <a href="/sub2">전체상품</a>
          <ul class="drop">
            <li><a href="/sub2">판매상품</a></li>
            <li><a href="/sub3">인기상품</a></li>
          </ul>
        </ul>
        <ul>
          <a href="#">가맹점</a>
          <ul class="drop">
            <li><a href="#">-</a></li>
            <li><a href="#">-</a></li>
          </ul>
        </ul>
        <ul>
          <a href="/sub4">장바구니</a>
          <ul class="drop">
            <li><a href="#">-</a></li>
            <li><a href="#">-</a></li>
          </ul>
        </ul>
      </div>
      <div class="hdabox">
        <a href="#">장바구니</a>
        <?php if (!ss()) { ?>
          <a href="/signIn">로그인</a>
          <a href="/signUp">회원가입</a>
        <?php } ?>
        <?php if (ss()) { ?>
          <a href="/logout">로그아웃</a>
        <?php } ?>
        <?php if(ss() && ss()['id'] === 'admin') { ?>
          <div class="dropdown">
            <ul>
              <a href="/admin">관리자</a>
              <ul class="drop">
                <li><a href="#">공지사항관리</a></li>
                <li><a href="#">판매상품관리</a></li>
              </ul>
            </ul>
          </div>
        <?php } ?>
           <div style="display: flex;align-items:center;">
      <?php if (ss()) { ?>
        <h4><?= ss()['name'] ?></h4>로 로그인됨
      <?php } ?>
      </div>
   
    </div>
  </header>