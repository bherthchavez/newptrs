$(document).ready(function(){
	$error = $('<center><h4 >Please fill up the required field!</h4 ></center>');
	$error1 = $('<center><h4 >Invalid username or password</h4></center>');
	

	
/*   User Login  */	
	$('#login').click(function(){
		$loading = $('<center><img src = "images/loadingdot.gif" height = "70px"/></center>');
		$error.remove();
		$error1.remove();
		$username = $('#username').val();
		$password = $('#password').val();
		if($username == "" && $password == ""){
			$error.appendTo('#loading');
		}else{
			$loading.appendTo('#loading');
			setTimeout(function(){	
				$.post('check_user.php',{username: $username, password: $password},
					function(result){
						
						if(result == "Success")
						{
							window.location = "Home.php";

						}
						else if(result == "Success1")
						{

                          window.location = "Home_No.php";
                        } 
						else
						{	
							$('#username').val('');
							$('#password').val('');
							$loading.remove();
							$error1.appendTo('#loading');
						}
					}
				)
			}, 5000);
		}
	});



	/*   Administrator Login  */	
	$('#admin').click(function(){
		$loading = $('<center><img src = "../images/loadingdot.gif" height = "70px"/></center>');
		$error.remove();
		$error1.remove();
		$username = $('#username').val();
		$password = $('#password').val();
		if($username == "" && $password == ""){
			$error.appendTo('#loading');
		}else{
			$loading.appendTo('#loading');
			setTimeout(function(){	
				$.post('check_admin.php',{username: $username, password: $password},
					function(result){
						
						if(result == "Success")
						{
							window.location = "Player.php";

						
                        } 
						else
						{	
							$('#username').val('');
							$('#password').val('');
							$loading.remove();
							$error1.appendTo('#loading');
						}
					}
				)
			}, 5000);
		}
	});
	

});	