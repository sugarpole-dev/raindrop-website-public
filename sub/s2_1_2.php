<?php
	include_once('./_common.php');
	


	//화면의 성격
	$user_division = "user";
	$screen_div = "sub"; //main, sub
	$frame_div = "two";  //one, two

	$cate_name = "센터소개";
	$cate_num = "1";

	$page_name = "인사말";
	$page_num = "1";

	include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<div class="container sub2">
       

	   <div style="float:left;<?php echo $lt_style ?>">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/pic_wow_basic', $row['portfolio'], 5, 25);
        ?>
    </div>


</div>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
    $(".tab li").click(function () {
		var num = $(".tab li").index(this);
		$(".tabContent").removeClass('active');
		$(".tabContent").eq(num).addClass('active');
		$(".tab li").removeClass('active');
		$(this).addClass('active')
	});

	$(".tab2 li").click(function () {
		var num = $(".tab2 li").index(this);
		$(".tabContent2").removeClass('active');
		$(".tabContent2").eq(num).addClass('active');
		$(".tab2 li").removeClass('active');
		$(this).addClass('active')
	});




    $("input.btn_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.", "/login.php");
			location.replace('<?php echo G5_BBS_URL ?>/login.php');
        } else {
            return false;
        }
    });


</script>


