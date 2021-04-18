<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<h3 style="text-align: center;font-weight: bolder">DATA MAHASISWA</h3>
<?php 
	function hitungThn($thnLahir,$thnSkrg){
		$skrg = new DateTime($thnSkrg);
		$lhr = new DateTime($thnLahir);
		$diff = $lhr->diff($skrg);
		return $diff->y;
	}

	$namaFile = "datamhs.dat";
	$myFile = fopen($namaFile, "r") or die ('tidak bisa membuka file');
	$newDt =[];
	while(!feof($myFile)){
		$dtMhs = explode('|',fgets($myFile));
		array_push($newDt, $dtMhs);
	}
?>


<p>Jumlah Data : <?= count($newDt); ?></p>
<table border="1">
	<tr>
		<td>NO.</td>
		<td>NIM</td>
		<td>NAMA MHS</td>
		<td>TANGGAL LAHIR</td>
		<td>TEMPAT LAHIR</td>
		<td>USIA (THN)</td>
	</tr>
	
		<?php 
			for($i=0; $i<count($newDt); $i++):
		?>
		<tr>
		<td><?= $i+1; ?></td>
		<td><?= $newDt[$i][0]; ?></td>
		<td><?= $newDt[$i][1]; ?></td>
		<td><?= $newDt[$i][2]; ?></td>
		<td><?= $newDt[$i][3]; ?></td>
		<td><?= hitungThn($newDt[$i][2],date('Y-m-d')); ?></td>
		</tr>
		<?php endfor; ?>
	
</table>

<?php fclose($myFile); ?>
</body>
</html>