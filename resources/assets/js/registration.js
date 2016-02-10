$(document).ready(function(){


	$("#userName").keypress(function(e){
	    if(e.which == 13 )
	    {
			var userName = $("#userName").val();
			if(userName==""){
				alert("Please enter username");
				$("#userName").focus();
				return false;
			}else{
				$("#userEmail").focus();
			}
		}
	});
	
	$("#userEmail").keypress(function(e){
		if(e.which == 13 )
	    {
			var userEmail = $("#userEmail").val();
			if(userEmail==""){
				alert("Please enter email");
				$("#userEmail").focus();
				return false;
			}else{
				$("#userMobile").focus();
			}
		}	
	});
	
	
	$("#userMobile").keypress(function(e){
		if(e.which == 13 )
	    {	
			var userMobile = $("#userMobile").val();
			if(userMobile==""){
				alert("Please enter mobile number");
				$("#userMobile").focus();
				return false;
			}else{
				$("#userPassword").focus();
			}
		}	
	});	
	
	$("#userPassword").keypress(function(e){
		if(e.which == 13 )
	    {
			var userPassword = $("#userPassword").val();
			if(userPassword==""){
				alert("Please enter password");
				$("#userPassword").focus();
				return false;
			}else{
				$("#userPassword").focus();
			}
		}	
	});

	
	var user_reg = function(){
		var userName = $("#userName").val();
		var userEmail = $("#userEmail").val();
		var userMobile = $("#userMobile").val();
		var userPassword = $("#userPassword").val();
		
		var dataStr = "userName="+userName+"&userEmail="+userEmail
						+"&userMobile="+userMobile+"&userPassword="+userPassword;
						
		if(userName==""){
		    alert("Please enter username");
			$("#userName").focus();
			return false;
		}
		else if(userEmail==""){
		    alert("Please enter email address");
			$("#userEmail").focus();
			return false;
		}
		else if(userMobile==""){
		    alert("Please enter mobile number");
			$("#userMobile").focus();
			return false;
		}
		else if(userPassword==""){
		    alert("Please enter password");
			$("#userPassword").focus();
			return false;
		}
		else{
			$.ajax({
				type:"POST" ,
				url:"reg.php",
				data:dataStr ,
				cache:false ,
				async:true , 
				success:function(st) {
					console.log(st);	
				}
			});	
		}	
	}
	
	$("#reg_btn").click(function(){
		user_reg();
	});
	
	
});