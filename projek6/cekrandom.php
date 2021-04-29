<?php 
session_start();

$bilPilihan = rand();
echo $bilPilihan;
echo "<h1>Hasil Tebakan</h1>";

if($_POST['submit']){
	$_SESSION['pilihan'] = $_POST['angka'];
	$biluser = $_SESSION['pilihan'];
	while($_POST['angka'] != $bilPilihan){
		// tampilkan lagi
		if($_SESSION['count'] > 10){
			include('textbil.php');
			echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi";
		}else if($_SESSION['count'] > 10){
			include('textbil.php');
			echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi";
		}
	}

	if($_POST['angka'] == $bilPilihan){
		echo "Selamat ya… Anda benar, saya telah memilih bilangan ".$bilPilihan;
		echo "<br/><p><a href='ulangi.php'> Ulangi Lagi </a> </p>";	
	}
}

?>