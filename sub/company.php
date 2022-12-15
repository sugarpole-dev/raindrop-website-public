<?php
	include_once('./_common.php');
	$menu_title="About";
	$sub_title="Company";
	include_once('../inc/sub_head.php');
?>

<div class="container" style="text-align:center;padding-top:5em">
	<div class="company_title" style="">
		<div>
			<h3 style=""><?=$company_1?></h3>
			<h4 style=""><?=$company_2?></h4>
		</div>
		<div class="company_point" style="">
			<div>
				<p style="margin-bottom:1em"><img src="/public/img/company_icon_01.png"></p>
				<p class="company_text"><?=$company_3_1?></p>
			</div>
			<div>
				<p style="margin-bottom:1em"><img src="/public/img/company_icon_02.png"></p>
				<p class="company_text"><?=$company_3_2?></p>
			</div>
			<div>
				<p style="margin-bottom:1em"><img src="/public/img/company_icon_03.png"></p>
				<p class="company_text"><?=$company_3_3?></p>
			</div>
			<img class="company_circle" src="/public/img/company_bg_f.png">
		</div>
		
	</div>
</div>

<div class="container s1_1" style="">
<h2 style="">Sugarpole <b>History</b></h2>
<div style="display: flex; justify-content: flex-end;">
<div class="history" style="">
	<div class="history_year">
	<h3>2022</h3>
	<ul>
		<li><?=$history_2022_1?></li>
		<li><?=$history_2022_2?></li>
		<li><?=$history_2022_3?></li>
		<li><?=$history_2022_4?></li>
		<li><?=$history_2022_5?></li>
	</ul>
	</div>
	<div class="history_year">
	<h3>2021</h3>
	<ul>
		<li><?=$history_2021_1?></li>
		<li><?=$history_2021_2?></li>
	</ul>
	</div>
	<div class="history_year">
	<h3>2020</h3>
	<ul>
		<li><?=$history_2020_1?></li>
		<li><?=$history_2020_2?></li>
	</ul>
	</div>
	<div class="history_year">
	<h3>2019</h3>
	<ul>
		<li><?=$history_2019_1?></li>
		<li><?=$history_2019_2?></li>
	</ul>
	</div>
	<div class="history_year">
	<h3>2018</h3>
	<ul>
	<li><?=$history_2018_1?></li>
	<li><?=$history_2018_2?></li>
	<li><?=$history_2018_3?></li>
	<li><?=$history_2018_4?></li>
	</ul>
	</div>
	<div class="history_year">
	<h3>2017</h3>
	<ul>
	<li><?=$history_2017_1?></li>
	<li><?=$history_2017_2?></li>
	<li><?=$history_2017_3?></li>
	<li><?=$history_2017_4?></li>
	<li><?=$history_2017_5?></li>
	<li><?=$history_2017_6?></li>
	</ul>
	</div>
	<div class="history_year">
	<h3>2016</h3>
	<ul>
	<li><?=$history_2016_1?></li>
	<li><?=$history_2016_2?></li>
	<li><?=$history_2016_3?></li>
	<li><?=$history_2016_4?></li>
	<li><?=$history_2016_5?></li>
	<li><?=$history_2016_6?></li>
	</ul>
	</div>
	<div class="history_year">
	<h3>2015</h3>
	<ul>
	<li><?=$history_2015_1?></li>
	<li><?=$history_2015_2?></li>
	<li><?=$history_2015_3?></li>

	</ul>
	</div>
	<div class="history_year">
	<h3>2014</h3>
	<ul>
	<li><?=$history_2014_1?></li>
	<li><?=$history_2014_2?></li>
	</ul>
	</div>
</div>
</div>

</div>



	<div class="about_bg2">
		<p><?=$history_bottom1?></p>
		<h3><?=$history_bottom2?></h3>
	</div>

</div>



<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/public/inc/tail.php');
?>