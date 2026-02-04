<?php
if(!isset($_SESSION)) session_start();
require_once 'db.php';
require_once 'lib.php';

?>

  <header>
      <a href="./index.html"
        ><img src="./images/logo.png" alt="logo" title="logo"
      /></a>
      <div class="dropdown">
        <ul>
          <a href="./sub1.html">소개</a>
          <ul class="drop">
            <li><a href="#">-</a></li>
            <li><a href="#">-</a></li>
          </ul>
        </ul>
        <ul>
          <a href="./sub2.html">전체상품</a>
          <ul class="drop">
            <li><a href="./sub2.html">판매상품</a></li>
            <li><a href="./sub3.html">인기상품</a></li>
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
          <a href="./sub4.html">장바구니</a>
          <ul class="drop">
            <li><a href="#">-</a></li>
            <li><a href="#">-</a></li>
          </ul>
        </ul>
      </div>
      <div class="hdabox">
        <a href="#">장바구니</a>
        <a href="#">관리자</a>
        <a href="#">로그인</a>
        <a href="#">회원가입</a>
      </div>
    </header>