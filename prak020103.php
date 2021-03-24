<!DOCTYPE html>
<html>
<head>
	<title>Headings</title>
</head>
<body>
<?php 
	for($i=1; $i<=6; $i++){
		$class= ($i%2==0)?'txt-merah':'';
		echo "<h".$i." class='".$class."'>Heading ".$i."</h".$i.">";
	}
?>
<style type="text/css">
	.txt-merah{
		color:red;
	}
</style>
</body>
</html>