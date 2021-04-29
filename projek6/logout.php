<?php
// menghapus cookie 
unset($_COOKIE['namauser']); 
setcookie('namauser', null, -1, '/'); 

header("Location: form.html");
?>