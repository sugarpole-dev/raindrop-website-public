document.write(
    "<script src='//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js' ><" +
    "/script>"
);

function userLogin() {
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

														if (data=="suc")
													{
														location.href = 'index.php';
													}else{
														alert("아이디 또는 비밀번호를 확인해주세요.");
														$('#user_pw').focus();
													} 
						
                    }
                });
}






function UpdateRecipientStatus() {
	if (confirm("전송하시겠습니까?"))
	{
	var formData = $("#frm_modify_recipient").serialize();
			formData += "&type=status_update_recipient";
			 $.ajax({
                    url: '../ajax.action.php',
                    type: 'POST',
                    data: formData,
                    dataType: 'html',
                    success: function (data) {
						//alert(data);
						if (data == "1")
						{
							location.href = "complete.php";
						}else{
							alert("데이터 처리중 오류 발생");
						}
                    }

                });
	}else return false;
}




function DaumSearchAddress(str_type) {
    new daum
        .Postcode({
            oncomplete: function (data) {
                var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.txt_sender_zip_code
                document
                    .getElementById("txt_"+str_type+'_zip_code')
                    .value = data.zonecode;
                document
                    .getElementById("txt_"+str_type+"_address")
                    .value = addr;
                // document.getElementById("jibunAddress").value = data.jibunAddress;
                document
                    .getElementById("txt_"+str_type+"_address_detail")
                    .focus();
                // 참고항목 문자열이 있을 경우 해당 필드에 넣는다.
                if (addr !== '') {
                    //document.getElementById("extraAddress").value = extraRoadAddr;
                } else {
                    // document.getElementById("extraAddress").value = '';
                }

                var guideTextBox = document.getElementById("guide");
                // 사용자가 '선택 안함'을 클릭한 경우, 예상 주소라는 표시를 해준다.
             /*   if (data.autoRoadAddress) {
                    var expRoadAddr = data.autoRoadAddress + extraRoadAddr;
                    guideTextBox.innerHTML = '(예상 도로명 주소 : ' + expRoadAddr + ')';
                    guideTextBox.style.display = 'block';

                } else if (data.autoJibunAddress) {
                    var expJibunAddr = data.autoJibunAddress;
                    guideTextBox.innerHTML = '(예상 지번 주소 : ' + expJibunAddr + ')';
                    guideTextBox.style.display = 'block';
                } else {
                    guideTextBox.innerHTML = '';
                    guideTextBox.style.display = 'none';
                } */
            }
        })
        .open();
}

function CheckMobile(){
	var ua = navigator.userAgent.toLowerCase();
	//alert(ua)
	if(ua.indexOf("kakaotalk") > -1){
		//카카오톡 
		location.href = "kakaotalk://inappbrowser/close";
	}else if(ua.indexOf("android") > -1){
		self.close();
	}else if(ua.indexOf("iphone") > -1 || ua.indexOf("ipad") > -1 || ua.indexOf("ipod") > -1){
		self.close();
	}else{
		self.close();
	}
	
}