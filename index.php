<?
include_once('../public/inc/head.php');
?>
<section id="home">
	<div class="overlay"></div>
	<div class="home-content-table">
		<video width="100%" autoplay loop muted style="position:absolute;object-fit:cover;height:100%">
		<source src="/public/img/earth.mp4" type="video/mp4">
		</video>

		<div class="home-content-tablecell">
			<div class="row">
				<div class="col-twelve">
					<h1 class="animate-intro main_text_1">
					We Create with You
					</h1>
					<p class="animate-intro main_text_2">experiences·interfaces·software products·brand identity</p>

					<div class="more animate-intro">
						<a class="smoothscroll button stroke" href="#about">
						Learn More
						</a>
					</div>

				</div>
				<!-- end col-twelve -->
			</div>
			<!-- end row -->
		</div>
		<!-- end home-content-tablecell -->
	</div>
	<!-- end home-content-table -->

	<ul class="home-social-list">
		<li class="animate-intro">
			<a href="https://www.facebook.com/Sugarpole-110731198272780"  target="_blank"><i class="fa fa-facebook-square"></i></a>
		</li>
	</ul>
	<!-- end home-social-list -->

	<div class="scrolldown">
		<a href="#about" class="scroll-icon smoothscroll">
		Scroll Down
		<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
		</a>
	</div>

</section>
<!-- end home -->


<!-- about
   ================================================== -->
<section id="about">

	<div class="swiper-container main-slider loading">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<figure class="slide-bgimg" style="background-image:url(../public/img/main01.jpg)">
				<img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85" class="entity-img" />
				</figure>
				<div class="content">
					<p class="title"></p>
					<span class="caption"></span>
				</div>
			</div>
			<div class="swiper-slide">
				<figure class="slide-bgimg" style="background-image:url(../public/img/main02.jpg)">
				<img src="https://images.unsplash.com/photo-1500643752441-4dc90cda350a?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85" class="entity-img" />
				</figure>
				<div class="content">
					<p class="title"></p>
					<span class="caption"></span>
				</div>
			</div>
			<div class="swiper-slide">
				<figure class="slide-bgimg" style="background-image:url(../public/img/main03.jpg)">
				<img src="https://images.unsplash.com/photo-1500643752441-4dc90cda350a?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85" class="entity-img" />
				</figure>
				<div class="content">
					<p class="title"></p>
					<span class="caption"></span>
				</div>
			</div>


		</div>
		<!-- If we need navigation buttons -->
	</div>

	<!-- Thumbnail navigation -->
	<div class="swiper-container nav-slider loading">
		<div class="swiper-wrapper" role="navigation">
			<div class="swiper-slide">
				<figure class="slide-bgimg" style="background-image:url(../public/img/medical.jpg);">
				<img src="/public/img/medical.jpg" class="entity-img" />
				</figure>
				<div class="content">
					<p class="title">Medical</p>
				</div>
				<div class="content_bottom">
					<p class="title">Sugarpole Medical Software</p>
					<p>DR Viewer / Vet DR Viewer / Mammography</p>
				</div>
			</div>

			<div class="swiper-slide">
				<figure class="slide-bgimg" style="background-image:url(../public/img/dental.jpg);">
				<img src="/public/img/dental.jpg" class="entity-img" />
				</figure>
				<div class="content">
					<p class="title">Dental</p>
				</div>
				<div class="content_bottom">
					<p class="title">Sugarpole Dental Software</p>
					<p>Raindrop / Rainforest</p>
				</div>
			</div>

			<div class="swiper-slide">
				<figure class="slide-bgimg" style="background-image:url(../public/img/3dviewer.jpg);">
				<img src="/public/img/3dviewer.jpg" class="entity-img" />
				</figure>
				<div class="content">
					<p class="title">3D Viewer</p>
				</div>
				<div class="content_bottom">
					<p class="title">Sugarpole 3D Viewer</p>
					<p>3D Vet Viewer / 3D Dental Viewer</p>
				</div>
			</div>

		</div>
	</div>

</section>
<!-- end about -->


<!-- about
   ================================================== -->
<section id="services">
	<div class="row narrow section-intro with-bottom-sep animate-this">
		<div class="col-full">
			<h1 style="">What We Do.</h1>
			<p class="lead" style=""><?=$index_header2_title ?></p>
		</div>
		<!-- end col-full -->
	</div>
	<div class="services_background">
		<div class="overlay"></div>
		<div class="gradient-overlay"></div>
		<div class="row services-content">

			<div class="services-list block-1-2 block-tab-full group">

				<div class="bgrid service-item animate-this">

					<span class="icon"><img src="/public/img/main_icon_1.png" alt="Experiences"></span>

					<div class="service-content">
						<h3 class="h05">Experiences</h3>

						<p><?=$index_header3_1_con ?>
						</p>
					</div>

				</div>
				<!-- end bgrid -->

				<div class="bgrid service-item animate-this">

					<span class="icon"><img src="/public/img/main_icon_2.png" alt="Interfaces"></span>

					<div class="service-content">
						<h3 class="h05">Interfaces</h3>

						<p><?=$index_header3_2_con ?>
						</p>
					</div>

				</div>
				<!-- end bgrid -->

				<div class="bgrid service-item animate-this">

					<span class="icon"><img src="/public/img/main_icon_3.png" alt="Software product"></span>

					<div class="service-content">
						<h3 class="h05">Software product</h3>

						<p><?=$index_header3_3_con ?>
						</p>
					</div>

				</div>
				<!-- end bgrid -->

				<div class="bgrid service-item animate-this">

					<span class="icon"><img src="/public/img/main_icon_4.png" alt="Design"></span>

					<div class="service-content">
						<h3 class="h05">Design</h3>

						<p><?=$index_header3_1_con ?>
						</p>
					</div>

				</div>
				<!-- end bgrid -->

			</div>
			<!-- end services-list -->

		</div>
		<!-- end services-content -->
	</div>
</section>
<!-- end services -->
<!--
<section id="partner">
	<div class="main_bg">
		<div style="color:#111;padding-top:260px">
			<h3 style="font-size:36px">Customer satisfaction service</h3>
			<h2 style="font-size:48px;font-weight:bold">Best business partner</h2>
		</div>
	</div>
</section>
-->



<!-- contact
   ================================================== -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js'></script>
<script  src="../public/js/script1.js"></script>
<!-- footer
   ================================================== -->

<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/tail.php');
?>
