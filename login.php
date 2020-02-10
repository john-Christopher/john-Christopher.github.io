# john-Christopher.github.io<!DOCTYPE html>
<html>
<head>
	<title>Online Registration</title>
</head>
<style type="text/css">
	body{
		font-family: Arial, Sans-serif;
		background-image: url('try.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;	
		background-position: center;
	}
	table{
		padding-top: 20px;
		padding-right: 20px;
		padding-bottom: 20px;
		padding-left: 20px;
		margin-top: 18%;
		background-color: rgba(100,100,100,0.4);
		color: rgb(255,255,255);
		border-radius: 10px;
	}
	.field{
		width: 300px;
		height: 25px;
		font-size: 14px;
		vertical-align: middle;
		border-radius: 6px;
		border-style: groove;
		box-shadow: currentColor;
	}
	.btn-submit{
		border: none;
		background-color: rgb(255,255,255);
		color: rgb(0,0,0);
		width: 300px;
		height: 40px;
		border-radius: 6px;
		font-size: 17px;
		box-shadow: currentColor;
	}
	.btn-submit:hover{
		background-color: rgb(100,250,150);
		color: rgb(0,0,0);
	}
	.checkbox{
		width: 17px;
		height: 17px;
		vertical-align: bottom;
	}
	.col-logo{
		vertical-align: middle;
	}
/*	@media(min-width: 400px){
		table{
			margin-top: 50%;
		}
	}*/
	.img-logo{
		border-radius: 100px;
	}
</style>
<body>
	<div align="center">
		<table>
		<!-- 	<tr>
				<td class="col-logo" colspan="3" align="center">
					<img src="WWDW.png" width="125" height="125" class="img-logo">
				</td>
			</tr> -->
<!-- 			<tr>
				<td>
					<br><br><br>
				</td>
			</tr> -->
			<tr>
				<td class="col-form" colspan="3">
					<form class="main-form" action="#" method="POST">
						Username:<br>
						<input class="field" type="text" name="user" required="" "><br><br>
						Password:<br>
						<input class="field" type="password" name="pwd" required="" ><br><br>
						<input class="btn-submit" type="submit" name="login" value="Login">
					</form>
				</td>
			</tr>
		</table>
	</div>
	<?php

		if(isset($_POST['login'])){

			include 'connection.php';
			$username = $_POST['user'];
			$password = $_POST['pwd'];

			$sql = "SELECT * FROM `accounts` WHERE `username` = '$username' AND `password` = '$password'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();

			if ($result->num_rows > 0) {
				session_start();
				$_SESSION["username"] = $row['username'];
		    header('Location: index.php');
		  } 
			else {
		    echo "<h1>INVALID USERNAME AND PASSWORD!</h1>";
			}
		}


	?>
</body>
</html>
