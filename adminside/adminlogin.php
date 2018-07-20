<html>
	<head>
		<style>
			#bg{
				margin: auto 0px;
				background-color:#d6d6cf;
			}
			#contentdiv{
				height:450px;
				width:700px;
				background-color:#e5b2ae;
				position:absolute;
				top:150px;
				left:400px;
				opacity:
			}
			#admin_image_div{
				height:250px;
				width:250px;
				background-image:url("images/admin.png");
				position:absolute;
				left:240px;
				top:-120px;
			}
			#heading{
				position:absolute;
				left:270px;
				top:115px;
				font-family:Agency FB;
			}
			#input_styler1{
				height:40px;
				width:250px;
				position:absolute;
				left:240px;
				top:220px;
				outline:none;
			}
			#input_styler2{
				height:40px;
				width:250px;
				position:absolute;
				left:240px;
				top:280px;
				outline:none;
			}
			#btn_styler{
				height:40px;
				width:100px;
				position:absolute;
				left:315px;
				top:345px;
				background-color:#2d2b2b;
				color:#fff;
				border:transparent;
				border-radius:10px;
				outline:none;
			}
		</style>
	</head>
	<body id="bg">
		<div id="contentdiv">
		<div id="admin_image_div"></div>
		<h1 id="heading">Admin Panel Login</h1>
		<form id="adminlogin" name="adminlogin" method="post" action="signinaction.php">
			<input id="input_styler1" type="text" name="admin" placeholder="admin">
			<input id="input_styler2" type="password" name="password" placeholder="**********">
			<input id="btn_styler" type="submit" value="Login">
		</form>
		</div>
	</body>
</html>