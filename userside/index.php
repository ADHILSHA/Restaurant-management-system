<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<style>
			#bg{
				margin: auto 0px;
				background-image:url("images/bg.jpg");
				background-size:cover;
			}
			#container_div{
				height:550px;
				width:500px;
				position:absolute;
				left:500px;
				top:85px;
				background-color:#0f1011;
				opacity:0.4;
				
			}
			
			#inputstyler{
				position:relative;
				left:85px;
				top:200px;
				height:40px;
				width:330px;
				border:transparent;
				outline:none;
				background-color:#fff;
				color:red;
				font-size:25px;	
			}
			#submitstyler{
				position:absolute;
				left:180px;
				top:370px;
				height:35px;
				width:120px;
				border:transparent;
				outline:none;
				/*background-color:#fff;
				color:red;
				font-size:25px;	
				font-family:Agency FB;*/
			}
			
			#heading{
				font-size:50px;
				font-family:Agency FB;
				position:absolute;
				right:190px;
				top:80px;
				text-align:center;
				color:#fff;
				border:3px solid #fff;
			}
			#link{
				position:absolute;
				left:125px;
				top:470px;
				color:#fff;
				text-decoration:none;
				font-size:20px;
			}
			::placeholder {
			    font-family:Agency FB;
			    padding-left:5px;
			    font-size:25px;
			    color:#ff0000;
			}

			:-ms-input-placeholder { /* Internet Explorer 10-11 */
			   font-family:Agency FB;
			   padding-left:40px;
			   font-size:25px;
			   color:#ff0000;
			}

			::-ms-input-placeholder { /* Microsoft Edge */
			   font-family:Agency FB;
			   padding-left:40px;
			   font-size:25px;
			   color:#ff0000;
			}
			
		</style>
		
	</head>
	<body id="bg">
		
		<div id="container_div">
			<h1 id="heading">SIGNIN</h1>
			<form class="form-group" name="signinform" method="post" action="signinaction.php">
				<input id="inputstyler" class="form-control" type="text" name="username" placeholder="Username"><br><br><br>
				<input id="inputstyler" class="form-control" name="password" placeholder="*********">
				<input id="submitstyler" class="btn btn-primary" type="submit" value="Login">
			</form>
			<a id="link" href="forgetpassword.php">Forget Password? Don't worry</a>
		</div>
		
		
		
	</body>
</html>