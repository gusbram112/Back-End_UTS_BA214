<?php

session_start();

// jika sudah login, alihkan ke halaman list
if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login SI Perpus</title>
	<link rel="stylesheet" type="text/css" href="css/mainstyle.css">

</head>
<body>
	<form method="post" name="form_login" id="form_login" action="proses-login.php" style="margin-top: 120px;">
		<table class="form">
			<tr>
				<td colspan="2">
					<center>
						<img src="img/stikombali1.png" style="width:25%; padding-top:20px">
					</center>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h1 align="center">LOGIN PETUGAS</h1>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" placeholder="Masukkan Username" name="username" id="username" />
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" placeholder="Masukkan Password" name="password_petugas" id="password_petugas" />
				</td>
			</tr>
			<tr style="height:10px"></tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="login" id="login" value="Login" class="btn btn-submit" />
				</td>
			</tr>
			<tr style="height:10px"></tr>
			<tr>
				<td colspan="2" align="right">
					<a href="signup.php" class="btn btn-signup">Signup</a>
				</td>
			</tr>
			<tr style="height:10px"></tr>
		</table>
	</form>
</body>
</html>
