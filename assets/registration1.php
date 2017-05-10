<?php

$connect = mysqli_connect("localhost","root","","data_b4s3") or die('Database could not connect');
//$select = mysqli_select_db($connect,"sampah_db" ) or die('Database could not select');

	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$email=$_POST['email']
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];

		chckusername($username,$password1,$password2, $nama, $email,  $connect);
		// chcklogin($username,$password,$connect);
	}
	function chckpassword($username,$password1,$password2, $nama, $email,  $connect){
		if($password1==$password2){
			echo "benar";
		} else {
			echo "salah";
		}

	}

	function chckusername($username,$password1,$password2, $nama, $email,  $connect){
		// include_once 'sql.php';
		$check = "SELECT * FROM login_tb WHERE user_name=$username";
		$check_q = mysqli_query($connect,$check) or die("<div class='loginmsg'>Error on checking Username<div>");

		if (mysqli_num_rows($check_q) == 1) {
			echo "<div id='loginmsg'>Username telah dipakai</div>";

		}
		else{
			chckpassword($username,$password1,$password2, $nama, $email,  $connect);
		}
	}

	// ' or ''='
?>
