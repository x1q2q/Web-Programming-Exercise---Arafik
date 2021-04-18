<?php 
$namaFile = "myfile.txt";
$myFile = fopen($namaFile, "r") or die ('tidak bisa membuka file');
echo fread($myFile,filesize($namaFile));
fclose($myFile);
?>