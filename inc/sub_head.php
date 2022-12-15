<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/head.sub.php');
 ?>

<!--- basic page needs
   ================================================== -->


</head>

<?php
//ini_set("display_errors","1");
?>

<header id="hd">
<h1 id="hd_h1"></h1>
<div class="to_content"><a href="#container">본문 바로가기</a></div>
<nav id="gnb" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<h2>최상단 고정 카테고리</h2>
	<!-- 상단 기본 고정 메뉴 -->

	<div class="navbar-header">
		<a class="logo" href="/public/index.php"><img src="/public/img/logo_black.png"></a></span>
		<div style="position: fixed;right: 50px;top:10px;z-index:99999">
			<div>
				<a style="color:#333" href="javascript:changeLang('ko');" class="<?=$select_ko?>">KOR</a>
				<a style="color:#333" href="javascript:changeLang('en');" class="<?=$select_en?>">ENG</a>
			</div>
		</div>
	</div>
	<!-- 메뉴바 -->
	<div class="leftmenu" id="device_auto">
		<input class="burger-check" type="checkbox" id="burger-check" /><label class="burger-icon" for="burger-check"><span class="burger-sticks"></span></label>
		<div class="panel left">
			<!-- 메뉴의 내용부분 -->
			<span class="panel_logo">
			<a href="/public/index.php"><img src="/public/img/logo_black.png"></a></span>
			<ul id="device_auto" class="nav navbar-nav ">
				<li class="active dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="/public/sub/company.php" target="_self" style="padding:15px 20px">About</a>
					<ul class="dropdown-menu" role="menu">
						<li class="s_li" style="background-color:#f5f5f5"><a class="a_hv" href="/public/sub/company.php" target="_self"><span></span>Company</a></li>
						<li class="s_li" style="background-color:#f5f5f5"><a class="a_hv" href="/public/sub/directions.php" target="_self"><span></span>Directions</a></li>
					</ul>
				</li>
				<li class="active dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="/public/sub/medical.php" target="_self" style="padding:15px 20px">Software</a>
					<ul class="dropdown-menu" role="menu">
						<li class="s_li" style="background-color:#f5f5f5"><a class="a_hv" href="/public/sub/medical.php" target="_self"><span></span>Medical</a></li>
						<li class="s_li" style="background-color:#f5f5f5"><a class="a_hv" href="/public/sub/dental.php" target="_self"><span></span>Dental</a></li>
						<li class="s_li" style="background-color:#f5f5f5"><a class="a_hv" href="/public/sub/3dviewer.php" target="_self"><span></span>3D Viewer</a></li>
						<li class="s_li" style="background-color:#f5f5f5"><a class="a_hv" href="/public/sub/etc.php" target="_self"><span></span>Etc</a></li>
					</ul>
				</li>
				<li class="active dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="/public/sub/contact.php" target="_self" style="padding:15px 20px">Contact</a>
					<ul class="dropdown-menu" role="menu">
						<li class="s_li" style="background-color:#f5f5f5"><a class="a_hv" href="/public/sub/contact.php" target="_self"><span></span>Contact</a></li>
					</ul>
				</li>
				<li class="active dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="/public/sub/membership.php" target="_self" style="padding:15px 20px">Registration</a>
					<ul class="dropdown-menu" role="menu">
						<li class="s_li" style="background-color:#f5f5f5"><a class="a_hv" href="/public/sub/membership.php" target="_self"><span></span>Registration</a></li>
						<li class="s_li" style="background-color:#f5f5f5"><a class="a_hv" href="/public/sub/download.php" target="_self"><span></span>Download</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- 메뉴바 -->
	<div class="collapse navbar-collapse top_menu_bar" id="bs-example-navbar-collapse-1" style="max-height:100% !important">


		<!-- 로고 -->
		<div class="logo">
			<a href="/public/index.php"><img src="/public/img/logo.png"></a>
		</div>
		<div class="menu_bar">
			<ul id="gnb_1dul" class="nav navbar-nav text-center" style="background:#111">
				<li class="dropdown gnb_1dli ">
					<a style="color:#fff !important" href="/public/sub/company.php" target="_self" class="gnb_1da">About</a>
					<ul class="dropdown-menu gnb_2dul">
						<li class="gnb_2dli"><a href="/public/sub/company.php" target="_self"><span></span>Company</a></li>
						<li class="gnb_2dli"><a href="/public/sub/directions.php" target="_self"><span></span>Directions</a></li>
					</ul>
				</li>
				<li class="dropdown gnb_1dli ">
					<a style="color:#fff !important" href="/public/sub/medical.php" target="_self" class="gnb_1da"><img src="/public/img/ai.png" style="margin-bottom: 1px; padding-right: 5px;">Software</a>
					<ul class="dropdown-menu gnb_2dul">
						<li class="gnb_2dli"><a href="/public/sub/medical.php" target="_self">Medical</a></li>
						<li class="gnb_2dli"><a href="/public/sub/dental.php" target="_self">Dental</a></li>
						<li class="gnb_2dli"><a href="/public/sub/3dviewer.php" target="_self">3D Viewer</a></li>
						<li class="gnb_2dli"><a href="/public/sub/etc.php" target="_self"><span></span>Government S/W</a></li>
					</ul>
				</li>
				<li class="dropdown gnb_1dli ">
					<a style="color:#fff !important" href="/public/sub/contact.php" target="_self" class="gnb_1da">Contact</a>
					<ul class="dropdown-menu gnb_2dul">
						<li class="gnb_2dli"><a href="/public/sub/contact.php" target="_self"><span></span>Contact</a></li>
					</ul>
				</li>
				<li class="dropdown gnb_1dli ">
					<a style="color:#fff !important" href="/public/sub/membership.php" target="_self" class="gnb_1da">Registration</a>
					<ul class="dropdown-menu gnb_2dul">
						<li class="gnb_2dli"><a href="/public/sub/membership.php" target="_self"><span></span>Registration</a></li>
						<li class="gnb_2dli"><a class="a_hv" href="/public/sub/download.php" target="_self"><span></span>Download</a></li>
					</ul>
				</li>
			</ul>
			<!--<a id="header-menu-trigger" href="#0" class="">
		  	<span class="header-menu-icon"></span>
		</a>-->
		</div>
		<div style="position: fixed;right: 20px;top:26px;">
			<div>
				<img src="/public/img/global_icon.png" style="width:18px;height:18px">
				<a style="color:#fff" href="javascript:changeLang('ko');" class="<?=$select_ko?>">KOR</a>
				<a style="color:#fff" href="javascript:changeLang('en');" class="<?=$select_en?>">ENG</a>
			</div>
		</div>
	</div>
</div>

<!-- 로그인 -->



<!-- 모바일 메뉴 버튼 -->


</nav>

</div>
<script>
$(document).ready(function() {
$(".burger-check:checkbox").on('click', function() {
if ( $(this).prop('checked') ) {
$( '.panel' ).addClass("active");
} else {
$( '.panel' ).removeClass("active");
}
});
});
</script>

</header>

<body id="top">
<div id="container_title" style="background-image:url(<?php $_SERVER["DOCUMENT_ROOT"]?>/public/img/sub_bg_<?php echo $sub_title ?>.jpg);">
<p><?php echo $sub_title ?></p>
<ul class="title_nav" style="">
<li><a href="/public/index.php"><img src="/public/img/navi_icon.png" style="width:28px"></a></li>
<li><?php echo $menu_title ?></li>
<li style="font-weight:bold;color:#008be4;text-decoration: underline;"><?php echo $sub_title ?></li>
</ul>
</div>
