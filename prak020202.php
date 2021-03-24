<!DOCTYPE html>
<html>
<head>
	<title>Tabel</title>
</head>
<body>
<?php
	$baris = 4;
	$kolom = 5;
	echo "<table style='width: 500px;height: 200px' border='1'>";
	for($i =0; $i < $baris; $i++){
		echo "<tr>";
			for ($j = 1 ; $j <= $kolom; $j++){
				$no=($kolom*$i)+$j;
				echo "<td> No.urut ke-".$no."</td>";
			}
	 	echo "</tr>";
	}
	echo "</table>";
?>
</body>
</html>