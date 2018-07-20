<html>
	<head>
		<style>
			#bg{
				margin:auto 0px;
			}
			#header{
				height:65px;
				width:auto;
				background-color:#a50404;
			}
			#main_heading{
				position:absolute;
				left:550px;
				top:-8px;
				color:#fff;
				font-family:serif;
			}
			#btn_styler{
				height:50px;
				width:220px;
				position:relative;
				top:180px;
				left:630px;
				border-radius:10px;
				outline:none;
			}
			#logoutbtn{
				background-image:url("images/adminbtn.png");
				height:50px;
				width:50px;
				background-size:contain;
				background-color:#a50404;
				border:transparent;
				outline:none;
				position:absolute;
				top:6px;
				right:40px;
			}
		</style>
	</head>
	<body id="bg">
		<div id="header">
			<h1 id="main_heading">Canteen Management System</h1>
			<a href="adminlogin.php"><button id="logoutbtn"></button</a>
		</div>
		<a href="staffsignup.php"><button id="btn_styler">Add New Staff</button></a><br><br>
		<a href="updatestaff.php"><button id="btn_styler">Manage Staff</button></a><br><br>
		<a href="deletestaff.php"><button id="btn_styler">Remove Staff</button></a>
	</body>
</html>