<!DOCTYPE html>
<html>
<head>
	<title>Headings</title>
</head>
<body>
<?php 
	$i=0;
	do{
		$i++;
		$class= ($i%2==0)?'txt-merah':'';
		echo "<h".$i." class='".$class."'>Heading ".$i."</h".$i.">";
	}while($i<6);
?>
<style type="text/css">
	.txt-merah{
		color:red;
	}
</style>
</body>
</html>