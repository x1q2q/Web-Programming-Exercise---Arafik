<?php 
session_start();


$bilPilihan = $_SESSION['pilihan'];
echo "<h1>Hasil Tebakan</h1>";

if($_POST['submit']){

	$biluser = $_POST['angka'];	
	if($biluser == $bilPilihan){
		echo "Selamat ya… Anda benar, saya telah memilih bilangan ".$bilPilihan;
		echo "<br/><p><a href='ulangi.php'> Ulangi Lagi </a> </p>";	
	}else{
		// tampilkan lagi
		if($biluser > 10){
			include('textbil.php');
			echo "<p style='color:red;'>Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi<br/><br/></p>";
			include('formbil.php');
		}else if($biluser < 10){
			include('textbil.php');
			echo "<p style='color:red;'>Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah<br/><br/></p>";
			include('formbil.php');
		}
	}
}

?>