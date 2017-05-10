<?php
session_start();
$connect = mysqli_connect("localhost","root","","data_b4s3") or die('Database could not connect');
//$select = mysqli_select_db($connect,"sampah_db" ) or die('Database could not select');

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		chckusername($username, $password,$connect);
		// chcklogin($username,$password,$connect);
	}

	function chckusername($username, $password, $connect){
		// include_once 'sql.php';
		$check = "SELECT * FROM login_tb WHERE user_name='$username'";
		$check_q = mysqli_query($connect,$check) or die("<div class='loginmsg'>Error on checking Username<div>");

		if (mysqli_num_rows($check_q) == 1) {
			chcklogin($username, $password,$connect);
		}
		else{
			echo "<div id='loginmsg'>Username salah</div>";
		}
	}

	function chcklogin($username, $password,$connect){
		// $login = "SELECT * FROM admin_tb;";
		$login_q = mysqli_query($connect,"SELECT * FROM login_tb WHERE user_name='$username' and user_pass='$password'") or die('Error on checking Username and Password');


		// Mysql_num_row is counting table row
		//if (mysql_num_rows($login_q) == 1){
		//$rows = mysql_fetch_array($login_q);
		// if(mysqli_multi_query($connect,$login)){
			if(mysqli_num_rows($login_q)==1){
			echo "<div id='loginmsg'> Logged in as $username </div>";
			$_SESSION['username'] = $username;
			$_SESSION['is_logged_in'] = true;
			header('Location: coba.php');
			}
		// }
		else {
			echo "<span class='label label-danger'>Password Salah</span>";
			// echo $login;
			//header('Location: login-problem.php');
		}
	}
	// ' or ''='
?>
