<?php 
session_start();

$users = array(
		array("username1","Rosihan Ari Yuana","123456"),
		array("username2","Dwi Amalia Fitriani","654321"),
		array("username3","Faza Fauzan Khosyiyarrohman","112233")
	);

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	foreach ($users as $val) {
		if(($val[0] == $username) && ($val[2] == $password)){
			$_SESSION['namauser'] = $val[1];

			header("Location: page1.php");
		}
	}
	echo "<h3>Login Gagal</h3>";
		echo "<p>Silakan <a href='form.html'>Login Kembali</a></p>";
}

?>