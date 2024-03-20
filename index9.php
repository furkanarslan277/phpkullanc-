<!DOCTYPE html>
<html>
<head>
	<title>form gönder</title>
</head>
<body>
<?php
/* 
echo $_POST['soyad'];
*/
echo($_POST['ad']);
echo $_POST['soyad'];
/*baglantı veri çekme okuma*/
?>
<form action="" method="POST">
Ad<input type="text" name="ad" placeholder="Adınız girin">
Soyad <input type="text" name="soyad" placeholder="Soyadınız girin">
<input type="submit" value="Formu Gönder" name="">
</form>


</body>
</html>