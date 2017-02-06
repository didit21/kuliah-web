<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ITCO - Register WiFi</title>
</head>
<link rel="stylesheet" href="style.css" type="text/css" />
<body id="body">
<div id="header">
<center>ITCO SMK WIRASWASTA CIMAHI</center>
</div>
<div id="frame-nav">
	<ul id="nav-bar">
    	<li><a href="index.php">Home</a></li>
    	<li><a href="regwifi.php">Daftar WiFi</a></li>
        <li><a href="info.php">Info WiFi</a></li>
        <li><a href="kritiksaran.php">Kritik & Saran</a></li>
    </ul>
</div>
<div id="context">
<h2 id="h2">
Fasilitas Registrasi Akun WiFi
</h2>
<h3 id="h3">
<table align="center">
	<tr>
    	<td>Data Anda Adalah :</td>
    </tr>
    <tr>
    	<td>
        	<?php
				//koneksi
        		include ('koneksi.php');
				//buat variabel
				$nisn=$_POST['nisn'];
				$nama=$_POST['nama'];
				$tl=$_POST['tl'];
				$tgl=$_POST['tgl'];
				$alamat=$_POST['alamat'];
				$phone=$_POST['phone'];
				$user=$_POST['user'];
				$pass=$_POST['pass'];
				//cek data
				$query="INSERT INTO `wifi`(`nisn`,`nama`,`tl`,`tgl`,`alamat`,`phone`,`user`,`pass`) VALUES ('$nisn','$nama','$tl','$tgl','$alamat','$phone','$user','$pass')";
				$result=@mysql_query($query)or die(mysql_error());
				if($result){
					echo '<h2>Registrasi Selesai, Silakan Hubungi Admin ITCO</h2><br>';
					echo '<a href="index.php">Klik Untuk Melanjutkan</a>';
				}else{
					echo '<h2>Error!! Can not save data to database!</h2>';
				}
			?> 
        </td>
    </tr>
</table>
</form>
</h3>
</div>
</body>
</html>