<?php 
			 session_start();
?>
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
				left:50px;
				top:-25px;
				color:#fff;
				font-family:Viner Hand ITC Regular;
				font-size:40px;
			}
			#btn_styler{
				height:50px;
				width:220px;
				position:absolute;
				top:180px;
				left:630px;
				border-radius:10px;
				outline:none;
			}
			#lis li{
				display:inline
			}
			#user_name{
				position:absolute;
				right:20px;
				color:#fff;
			}
		</style>
	</head>
	<body id="bg">
		<div id="header">
			<h1 id="main_heading">Food Court</h1>
			<h2 id="user_name"><?php 
			echo $_SESSION["USERNAME"];
		 ?>	</h2>
		</div>
		<ul id="lis">
		<li><a href="view_food.php"><button id="btn_styler">See todays dishes</button></a></li>
		
		</ul>
		
		
		 
	</body>
</html>