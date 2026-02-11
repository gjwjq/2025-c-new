<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/sub2.css">
  <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link
      rel="stylesheet"
      href="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/공통/fontawesome/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./css/product.css">
</head>
<body>
  <!-- 헤더 -->

    <main>
      <div class="video-container">
      <video src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/B-Module/AD.mp4"></video>

      <div class="control-container">
        <div class="controls">
          <div class="ctrl01">재생</div>
          <div class="ctrl02">일시정지</div>
          <div class="ctrl03">정지</div>
          <div class="ctrl04">되감기(10초씩)</div>
          <div class="ctrl05">빨리감기(10초씩)</div>
          <div class="ctrl06">감속하기(0.1배씩)</div>
          <div class="ctrl07">배속하기(0.1배씩)</div>
          <div class="ctrl08">배속 원래대로 돌리기</div>
          <div class="ctrl09">자동재생 켜기/끄기</div>
          <div class="ctrl10">반복 켜기/끄기</div>
        </div>
        <div class="ctrl11">컨트롤러 보이기/숨기기</div>
      </div>
      </div>
    </main>
    <main>
      <div class="main-title">ALL PRODUCT</div>
      <!-- 전체상품 -->
      <div class="main-product">
        <?php 
          $catelist = ["건강식품", "디지털", "팬시", "향수", "헤어케어"];

          foreach ($catelist as $cate) {
        ?>
      <div class="mp-wrap">
        <div class="mp-title"><?= $cate ?></div>

        <?php 
          $items = db::fetchAll("select * from item where cate = '$cate' order by pop desc");
          foreach ($items as $item) {
        ?>
        <div class="product">
          <div class="pro-img">
            <img src="<?= $item['img'] ?>" alt="<?= $item['img'] ?>">
          </div>
          <div class="pro-content">
            <div class="pro-name"><?= $item['title'] ?></div>
            <div class="pro-des"><?= $item['des'] ?></div>
            <div class="pro-price">가격 : 
              <?php if($item['pop'] === '1') { ?>
              <span style="color: #ccc;text-decoration:line-through;"><?= $item['price'] ?></span> <span class="tolosc" style="font-weight: 500;color:red;"><?= $item['dis'] ?>원</span>
              <?php } else {?>
              <span ><?= $item['price'] ?>원</span>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php  } ?>
      </div>

    <?php  } ?>
      </div>
    </main>
    <main>
      <div class="orderBtn">비회원주문</div>

      <dialog>
        <div class="popWrap">
          <div class="popHeader">
            <p>ID : <span class="userId"></span></p>
            <p style="font-size: 32px; font-weight: bold;">비회원주문</p>
            <div class="popClose">닫기 X</div>
          </div>
          <div class="popMain">
            <div class="popCategory">
              <div data-cate="건강식품" class="active">건강식품</div>
              <div data-cate="디지털">디지털</div>
              <div data-cate="팬시">팬시</div>
              <div data-cate="향수">향수</div>
              <div data-cate="헤어케어">헤어케어</div>
            </div>
            <div class="cartCon"></div>
            <div class="dragCart"></div>
          </div>
          
          <div class="popFooter">
            <div>총 가격 : <span class="cost" style="color: red; font-weight: bold;"></span></div>
            <div class="popBuyBtn">구매하기</div>
          </div>
        </div>
      </dialog>
      <div class="buyAlert">
        방금<span class="user" style="color: red; font-weight: bold;"></span>님께서
        <span class="userCost" style="color: red; font-weight: bold;"></span>원을 결제하셨습니다!
      </div>
    </main>
   

<script src="./js/sub2.js"></script>
<script>
  const tolosc = document.querySelector('.tolosc');
  tolosc.textContent.toLocaleString();
</script>