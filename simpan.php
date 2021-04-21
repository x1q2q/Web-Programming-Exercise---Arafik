<?php 
$namaFile = "datamhs.dat";
$myfile = fopen($namaFile, "a") or die("Tidak bisa membuka file!");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tgl_lhr = $_POST['tgllhr'];
$tmpt_lhr = $_POST['tmptlhr'];
fwrite($myfile,"\n".$nim."|".$nama."|".$tgl_lhr."|".$tmpt_lhr); 

echo "<script type='text/javascript'>alert('Berhasil menambahkan data!');</script> "; 
fclose($myfile); 
?>