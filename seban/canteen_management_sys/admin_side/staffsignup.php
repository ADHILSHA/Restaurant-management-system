<html>
<head>
	<style>
		#bg{
			margin:auto 0px;
		}
		
		#signupdiv{
				/*height:400px;
				width:600px;*/
				height:550px;
				width:937px;
				background-color:black;
				position:absolute;
				/*left:460px;
				top:130px;*/
				left:291px;
				top:80px;
				opacity:0.5;
			}
		#fieldstyler{
				border:transparent;
				outline:none;
				height:40px;
				width:350px;

			}
			#signinbtn{
				height:40px;
				width:180px;
				position:absolute;
				right:385px;
				top:450px;
				background-color:#fff;
				opacity:0.8;
				border:2px solid black;
				outline:none;
				border-radius:5px;
				
			}
			#signerheading{
				font-size:40px;
				color:#fff;
				position:absolute;
				left:340px;
				top:30px;
			}
			::placeholder {
			    font-family:cursive;
			    opacity: 1; /* Firefox */
			    padding-left:40px;
			    font-size:20px;
			}

			:-ms-input-placeholder { /* Internet Explorer 10-11 */
			   font-family:cursive;
			   opacity: 1;
			   padding-left:40px;
			   font-size:20px;
			}

			::-ms-input-placeholder { /* Microsoft Edge */
			   font-family:cursive;
			   opacity: 1;
			   padding-left:40px;
			   font-size:20px;
			}
	</style>
</head>
<body id="bg">
	
			<div id="signupdiv">
				<label id="signerheading">Add a new staff</label>
				<form id="sigupform" name="signupform" method="post" action="staffsignupaction.php">
					<input id="fieldstyler" style="position:absolute;left:290px;top:100px;" type="text" name="firstname" placeholder="firstname">
					<input id="fieldstyler" style="position:absolute;left:290px;top:180px;" type="text" name="lastname" placeholder="lastname">
					<input id="fieldstyler" style="position:absolute;left:290px;top:260px;" type="text" name="username" placeholder="username">
					<input id="fieldstyler" style="position:absolute;left:290px;top:330px;" type="password" name="password" placeholder="password">
					<input id="fieldstyler" style="position:absolute;left:290px;top:400px;" type="password" name="confirm" placeholder="confirm password">
					<input id="signinbtn" type="submit" value="Add">
				</form>
			</div>
		
<body>
</html>