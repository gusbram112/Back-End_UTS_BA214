<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
	<title>SignUp SI Perpus</title>
	<link rel="stylesheet" type="text/css" href="css/mainstyle.css">
</head>

<body>



  <form class="modal-content" method="post" action="proses-signup.php" style="margin-top: 120px;">
    <div class="container">
      <center>
        <img src="img/stikombali1.png" style="width:10%; padding-top:20px">
        <h1>SIGN UP</h1>
        <p>Masukkan Identitas Pegawai Perpustakaan.</p>
      </center>
      <hr>
      <label for="petugas_nama"><b>Nama Petugas</b></label>
      <p></p>
      <input type="text" placeholder="Masukkan Nama" name="petugas_nama" required>
      <p></p>

      <label for="username"><b>Username</b></label>
      <p></p>
      <input type="text" placeholder="Masukkan Username" name="username" required>
      <p></p>

      <label for="password_petugas"><b>Password</b></label>
      <p></p>
      <input type="password" placeholder="Enter Password" name="password_petugas" required>
      <p></p>

      <!-- <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      <p></p> -->

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-signup"><a href="login.php" style="color:white">Cancel</a></button>
        <button type="submit" class="btn btn-submit">Sign Up</button>
      </div>
    </div>
  </form>


</body>
</html>
