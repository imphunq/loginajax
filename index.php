<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</head>
<body>
	<form method="post" action="">
		Username: <input type="text" name="username" id="username"><br>
		Password: <input type="password" name="password" id="password"><br>
		<button onclick="myFunc()">Login</button>
	</form>
	<script type="text/javascript">
		function myFunc(){
			var user = $('#username').val();
			var pass = $('#password').val();
			$.ajax({
				url:'do_login.php',
				type:'post',
				dataType:'json',
				data: {'name':user,'password':pass},
				success: function(response)
				{
					if(response.success==1)
					{
						alert(response.messages);
					}else{
						alert(response.messages);
					}
				}
			});
		}
	</script>
</body>
</html>