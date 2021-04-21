<?php 
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];

$op = $_POST['operasi'];

if($op == '+'){
	$hasil = $bil1+$bil2;
}else if($op == '-'){
	$hasil = $bil1-$bil2;
}else if($op == '*'){
	$hasil = $bil1*$bil2;
}else if($op == '/'){
	$hasil = $bil1/$bil2;
}else if($op == '^'){
	$hasil = pow($bil1,$bil2);
}

echo "<h2> Hasil perhitungan dari ".$bil1." ".$op." ".$bil2." = ".$hasil."<h2>";
?>