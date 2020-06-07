<!DOCTYPE html>
<html lang="kor">
<head>
  <!--타이틀 :	title 태그와 파비콘만 사용-->
	<title>광천제재소</title>
	<link rel="shortcut icon" href="/img/favicon.png">

	<!--메타 : 메타 태그만 사용-->
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

	<!--내부 기본 CSS : 내부에서 생성한 CSS만 사용-->
	<link rel="stylesheet" href="/css/common.css">
	<link rel="stylesheet" href="/css/p_common.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/swiper.css">
	<link href="/css/select2.min.css" rel="stylesheet">
	<link href="/css/summernote.css" rel="stylesheet">

  <!--내부 기본 JS : 내부에서 생성한 JS 경우만 사용 하며. 이를 사용하기 위한 라이브러만사용(jquery.js) -->
  <script src="/js/jquery-1.12.4.min.js"></script>
  <script src="/js/jquery-ui.js"></script>
  <script src="/js/common.js"></script>
  <script src="/js/script.js"></script>
  <script src="/js/swiper.js"></script>
  <script src="/js/select2.min.js"></script>
  <script src="/js/summernote.js"></script>
  <script src="/lang/summernote-ko-KR.js"></script>

	<!--외부 CSS : 외부 모듈에서 제공된 CSS만 사용-->

	<!--외부 CSS 커스텀 : 외부 모듈 적용 후 자체적으로 CSS변경 한 경우만 사용-->

	<!--외부 JS : 외부 모듈에서 제공된 JS만 사용-->


</head>
<body class="main_wraper">

  <header>
    <div class="content-wrap header-contents">
			<img onclick="location.href='#';" src="/p_images/logo_white.png" alt="">
			<ul>
				<li><a href="#">오시는 길</a></li>
				<li><a href="#">견적문의</a></li>
				<li><a href="#">제품소개</a></li>
				<li><a href="#">회사소개</a></li>
			</ul>
		</div>
  </header>

  <div class="content-body">
    <div class="content-wrap"></div>

		<!-- swiper : s -->
		<div class="swiper-container main_banner" style="height:1080px;">
			<ul class="swiper-wrapper" >
				<li class="swiper-slide img_box img_box_main" >
					<div class="img_box_black"></div>
					<img src="/p_images/visual_img_01.png"  alt="">
					<div class="content-wrap img_box_text" >
						<p style="margin-top: 384px;font-size: 40px;">SINCE 1955</p>
						<p style="font-size: 50px;font-weight:bold;display:inline;margin-bottom:20px;">원목 제재, 목재 파렛트</p>
						<p style="font-size: 50px;display:inline;margin-left:18px;margin-bottom:20px;">제작 전문업체 광천제재소</p>
						<p style="font-size: 20px;margin-top: 31px;">광천제재소는 1955년 이래로 60년 이상의 오랜 경험과 3대째 이어온</p>
						<p style="font-size: 20px;">전문성으로 목재 제재 및 목재 파렛트 생산에 몰두해왔습니다.</p>
					</div>
				</li>
				<li class="swiper-slide img_box">
					<div class="img_box_black"></div>
					<img src="/p_images/visual_img_02.png" alt="">
					<div class="content-wrap img_box_text" style="padding-top: 440px;">
						<p style="font-size: 50px;font-weight:bold;display:inline;margin-bottom:20px;">원목 제재, 목재 파렛트</p>
						<p style="font-size: 50px;display:inline;margin-left:18px;margin-bottom:20px;">제작 전문업체 광천제재소</p>
						<p style="font-size: 20px;margin-top: 31px;">광천제재소는 1955년 이래로 60년 이상의 오랜 경험과 3대째 이어온</p>
						<p style="font-size: 20px;">전문성으로 목재 제재 및 목재 파렛트 생산에 몰두해왔습니다.</p>
					</div>
				</li>
				<li class="swiper-slide img_box">
					<div class="img_box_black"></div>
					<img src="/p_images/visual_img_03.png" alt="">
					<div class="content-wrap img_box_text"  style="padding-top: 440px;">
						<p style="font-size: 50px;font-weight:bold;display:inline;margin-top: 440px;">원목 제재, 목재 파렛트</p>
						<p style="font-size: 50px;display:inline;margin-left:18px;margin-top: 440px;">제작 전문업체 광천제재소</p>
						<p style="font-size: 20px;margin-top: 31px;">광천제재소는 1955년 이래로 60년 이상의 오랜 경험과 3대째 이어온</p>
						<p style="font-size: 20px;">전문성으로 목재 제재 및 목재 파렛트 생산에 몰두해왔습니다.</p>
					</div>
				</li>
				<li class="swiper-slide img_box">
					<div class="img_box_black"></div>
					<img src="/p_images/visual_img_04.png"  alt="">
					<div class="content-wrap img_box_text" style="padding-top: 440px;" >
						<p style="font-size: 50px;font-weight:bold;display:inline;margin-top: 440px;">원목 제재, 목재 파렛트</p>
						<p style="font-size: 50px;display:inline;margin-left:18px;margin-bottom:20px;">제작 전문업체 광천제재소</p>
						<p style="font-size: 20px;margin-top: 31px;">광천제재소는 1955년 이래로 60년 이상의 오랜 경험과 3대째 이어온</p>
						<p style="font-size: 20px;">전문성으로 목재 제재 및 목재 파렛트 생산에 몰두해왔습니다.</p>
					</div>
				</li>
			</ul>
			<!-- paging 버튼 -->
			<div class="swiper-pagination"></div>
		</div>
		<!-- swiper : e -->
  </div>

  <footer>
    <div class="content-wrap">
			<div style="width:700px;height:100px;float:left;">
				<p style="margin-top:30px;">충남 홍성군 광천읍 홍남로 744번길 1 (광천리 36-3, 광천IC 5분거리)</p>
				<p style="margin-top:10px;">Copyright (c) 광천제재소 All rights reserved.</p>
			</div>
			<img onclick="location.href='#';" src="/p_images/logo_naver.png" alt="">
			<img onclick="location.href='#';" src="/p_images/logo_namu.png" alt="">

		</div>
  </footer>

</body>

</html>

<style>

/* style.css 레이아웃 */
html{height:1080px;}
body{width:1920px;height:auto;position:relative;}
header{width:100%;height:107px;background: rgba(0, 0, 0, 0.6);position:relative;z-index: 10;}
.header-contents img{height:100%;float: left;margin-top: 20px;}
.header-contents ul{width:700px;height:100px;float: right;}
.header-contents li{width:100px;height:100px;float:right; margin-left: 46px;}
.header-contents li > a{color:#ffffff; font: Bold 22px/30px Noto Sans;line-height: 107px;}

footer{width:100%;height:100px;background: rgba(0, 0, 0, 0.6);position: relative;top:-207px;z-index: 10;}
footer img{float: right;margin-top: 30px;margin-left: 15px;}
footer > div > div p{color: #ffffff;font: Regular 15px/20px Noto Sans;}

.content-body{width:100%;position: relative;top:-107px;z-index: 5;}
.content-wrap{width:1300px;margin:0px auto;}
.main_banner img{width:1920px;height:1080px;overflow: hidden;position: relative;top:-1080px;z-index: 1;}
</style>

<style>
/* style.css 레이아웃 */
.main_wraper{height:1080px;}
.content-body{width:100%;}
.img_box_main{width:1920px;height:1080px;}
.img_box_black{width:1920px;height:1080px;background: #000000 0% 0% no-repeat padding-box;opacity: 0.25;position: relative; z-index: 3;}
.img_box_text{height:1080px;position: relative;z-index: 5;text-align: center;}
.img_box_text p{position: relative;z-index: 7;top:-2160px; color: #ffffff;letter-spacing: 1.2px;margin-bottom: 10px;}
.swiper-pagination{margin-bottom: 110px;}
.swiper-pagination-bullet-active{background:#ffffff;}
</style>


<script>
$(function(){
	var swiper = new Swiper('.main_banner', {
	  loop: true,
    slides: true,

		// 현재 페이지를 나타내는 점이 생깁니다. 클릭하면 이동합니다.
	  pagination: {
	    el: '.swiper-pagination',
	    type: 'bullets',
	  },
	});
});

</script>
