<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<div class="login_box" style="">
<div id="mb_login">
    <div class="mbskin">
	<h2 class="login_title">Login</h2>
        <div id="login_frm">
            <input type="text" name="mb_id" id="user_id" placeholder="Username or Email address" required class="frm_input required" maxLength="30">
				<a href="./find/user_password.php" class="">Forgot password?</a>
            <input type="password" name="mb_password" id="user_pw" placeholder="Password" required class="frm_input required" maxLength="20">
            <button class="login_button" style="margin-top:2em;color:#fff;background-color:#008be4;border:none"  onclick='userLogin();'>Sign in</button>
        </div>    
        <div class="login_more">
            <div class="mem_btn">New to Sugarpole? 
				<a href="./register/signup.php" class="btn01">Create account</a>
            </div>
        </div>
    
    </div>
</div>
</div>

<script>
$("#login_frm").keypress(function (e) {
        if (e.keyCode === 13) {
            userLogin();
				}
			});

            function userLogin() {
                if ($("#user_id").val() == "") {
                        alert("Enter your username!");
                        $('#user_id').focus();
                        return false;
                    } else if ($("#user_pw").val() == "") {
                       alert("Enter your password!");
                        $('#user_pw').focus();
                        return false;
                    }

			 $.ajax({
                    url: 'ajax.action.php',
                    type: 'POST',
                    data: {
                        'user_id': $('#user_id').val(),
                        'user_pw': $('#user_pw').val(),
							'type':'login'
                    },
                    dataType: 'html',
                    success: function (data) {
                       // alert(data);
														if (data=="suc")
													{
														location.href = location.href;
													}else{
														alert("Incorrect username or password.");
														$('#user_pw').focus();
													} 
						
                    }
                });
}

</script>
