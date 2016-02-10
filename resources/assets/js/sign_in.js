$(function(){

	$("#mobile_number").focus();

	$("#signin_btn").click(function(){
		var mobile_number = $("#mobile_number").val();
		var password = $("#password").val();

		var dataStr = "mob="+mobile_number+"&password="+password;

		if(mobile_number=="")
		{
			alert("Please Enter Mobile Number or User Name");
			$("#mobile_number").focus();			
			return false;
		}else if(password=="")
		{
			alert("Please Enter Password");
			$("#password").focus();
			return false;
		}else
		{
			$.ajax({
				type:"POST" ,
				url:"login_check.php" ,
				data: dataStr ,
				async:true ,
				cache:false ,
				success: function(st) {
					if(st==1) {
						location.href = "index.php";
					}
					else
					{
						location.href = "signin.html";
					}	
				}
			});			
		}
		//console.log(dataStr);


	});


});