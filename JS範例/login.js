function login(){
	//取得輸入值
	var user = $("#user").val();
	var pass = $("#pass").val();
	//判斷輸入是否為空值
	if(user=="" && pass==""){
		$('#error').text('帳號、密碼不能空白');
		return false;
	}
	if(user == ""){ 
		$('#error').text("帳號不能空白");
		$('#user').focus();
		return false;
	}else if(pass == ""){
	 	$('#error').text("密碼不能空白");
		$('#pass').focus();
		return false;
	}
//傳送帳號密碼到rpc驗證
$.ajax({
    url: 'rpc.php',
    type: 'POST',
    data: "user="+user+"&pass="+pass,
    
    success:function(msg){
		if(msg ==1){
			$('#error').show();
			$('#error').html("驗證帳號密碼成功");
		}else{
			$('#error').show();
			$('#error').html("沒有此用戶或密碼不正確");
		}
	},
	error: function(xhr) {
      $('#error').text("Ajax request 發生錯誤");
    }
	
  });
	
}
//自動驗證
$(document).ready(function(){
	$("#user").blur(function(){
 		$("#submit").click();
	});
});
