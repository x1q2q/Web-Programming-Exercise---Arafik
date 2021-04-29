<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Projek Cek Bilangan Random PW-Excerise</title>
</head>
<body>
	<h1>Cek Random Bilangan Bulat</h1><hr/>
	<?php 
	$digits = 3;
	$bilPilihan = rand(pow(10, $digits-1), pow(10, $digits)-1); // membuat random angka hanya 3 digit saja
	$_SESSION['pilihan'] = $bilPilihan;

	// echo $_SESSION['pilihan'];
	include('textbil.php');
	include('formbil.php');
	?>
	
</body>
</html>