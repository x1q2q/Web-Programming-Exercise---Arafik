<?php
$namaFile = "myfile.txt";
$myFile = fopen($namaFile, "r") or die("Tidak bisa membuka file!");

 while(!feof($myFile)) {   
 	echo fgets($myFile);
} 
fclose($myFile);

?>
