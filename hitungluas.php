<?php 
$nm = $_GET['n'];
$dm = $_GET['d'];
$tg = $_GET['t'];

function hitungLuasTabung($d,$t){
	$r = $d/2;
	return (2*(3.14*$r))*($r+$t);
}

$hsl = hitungLuasTabung($dm,$tg);

echo "<br/><hr/>";
echo "<h3>Luas Tabung ".$nm." dengan diameter ".$dm.
	" dan tinggi ".$tg." adalah ".$hsl." satuan luas.</h3>";
echo "<hr/>";
?>