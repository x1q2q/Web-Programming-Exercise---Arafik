<?php 
	function hitungDenda($tglHrsKembali,$tglKembali){
		$dt_kembali = explode('-', $tglKembali);
		$dt_hrskmbl = explode('-', $tglHrsKembali);
		$gjd2 = GregorianToJD($dt_kembali[1], $dt_kembali[2], $dt_kembali[0]);
		$gjd1 = GregorianToJD($dt_hrskmbl[1], $dt_hrskmbl[2], $dt_hrskmbl[0]);
		$tot_hari = $gjd2-$gjd1;
		return (int)$tot_hari * 3000;
	}

	echo "Besarnya denda adalah: Rp. ".hitungDenda("2021-01-03","2021-01-05")."<br/>";
	echo "Besarnya denda adalah: Rp. ".hitungDenda("2021-01-29","2021-02-01")."<br/>";
?>