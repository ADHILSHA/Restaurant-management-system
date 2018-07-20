<html>
	<head>
		<style>
			#bg{
				margin:auto 0px;
				background-image:url("images/resetbg.jpg");
				background-size:cover;
			}
			#container_div{
				height:400px;
				width:400px;
				position:absolute;
				left:560px;
				top:175px;
				background-color:#fff;
			}
			#label{
				position:relative;
				top:50px;
				left:90px;
			}
			#inputstyler{
				position:relative;
				left:90px;
				top:50px;
				height:30px;
				width:225px;
			}
			#submitstyler{
				position:absolute;
				left:140px;
				top:310px;
				height:35px;
				width:120px;
				border:transparent;
				outline:none;
				background-color:#26282b;
				color:#fff;
				font-size:25px;	
			}
			#heading{
				position:relative;
				left:92px;
				top:20px;
			}
		</style>
	</head>
	<body id="bg">
		<div id="container_div">
			<h1 id="heading">Reset Password</h1>
			<form name="resetpassword" method="post" action="resetpasswordaction.php">
				<label id="label">New password</label><br>
				<input id="inputstyler" type="password" name="password"><br><br><br>
				<label id="label">Confirm your new password</label><br>
				<input id="inputstyler" type="password" name="confirm"><br><br><br>
				<input id="submitstyler" type="submit" value="change">
			</form>
		</div>
	</body>
</html>