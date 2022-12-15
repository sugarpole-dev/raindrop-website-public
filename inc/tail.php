    </div>
</div>

<div class="footer_help">
	<h2 style=""><?=$footer_help?></h2>
	<div class="footer_icon">
		<div class="">
			<a href="/public/sub/directions.php"><img src="/public/img/map_icon.png" style="width:40%">
			<p>Directions</p></a>
		</div>
		<div class="">
			<a href="/public/sub/contact.php"><img src="/public/img/contact_icon.png" style="width:40%">
			<p>Contact</p></a>
		</div>
	</div>
</div>
<div id="ft">
    <div id="ft_copy" class="col-lg-12">
		<div class="footer_content">
			<a><?=$footer_1?></a>
			<a><?=$footer_2?></a>
		</div>
		<div style="margin-top:4em">
			<?=$footer_3?>
		</div>
		
	</div>
	<div id="go-top">
		   <a class="smoothscroll" title="Back to Top" href="#hd">
		   	<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
		   </a>
	</div>
</div>






<script>
$(function() {
    $("#top_btn").on("click", function() {
        $("html, body").animate({scrollTop:0}, '500');
        return false;
    });
});
</script>



<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/tail.sub.php');
?>