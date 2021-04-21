<!DOCTYPE html>
<html>
<head>
	<title>Data Tabung</title>
</head>
<body>
	<h3 style="font-weight: bolder">DATA UKURANG TABUNG</h3>
<?php 
	$namaFile = "datatabung.dat";
	$myFile = fopen($namaFile, "r") or die ('tidak bisa membuka file');
	$newDt =[];
	while(!feof($myFile)){
		$dtMhs = explode(',',fgets($myFile));
		array_push($newDt, $dtMhs);
	}
?>


<p>Jumlah Data : <?= count($newDt); ?></p>
<table border="1">
	<tr>
		<td>NO.</td>
		<td>NAMA TABUNG</td>
		<td>DIAMETER</td>
		<td>TINGGI</td>
		<td>LUAS</td>
	</tr>
	
		<?php 
			for($i=0; $i<count($newDt); $i++):
				$nmTbng = $newDt[$i][0];
				$dmTbng = $newDt[$i][1];
				$tgTbng = $newDt[$i][2];

				$urlView = "hitungluas.php?n=".$nmTbng."&d=".$dmTbng."&t=".$tgTbng; 
		?>
		<tr>
		<td><?= $i+1; ?></td>
		<td><?= $nmTbng; ?></td>
		<td><?= $dmTbng; ?></td>
		<td><?= $tgTbng; ?></td>
		<td>
			<a href="<?= $urlView; ?>">VIEW</a>
		</td>
		</tr>
		<?php endfor; ?>
	
</table>

<?php fclose($myFile); ?>
</body>
</html>