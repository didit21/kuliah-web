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
<form name="form1" action="rkritiksaran.php" method="post">
<table>
	<tr>
    	<td colspan="4">Masukkan Kritik dan Saran Anda</td>
    </tr>
    <tr>
    	<td valign="top">Nama</td>
        <td valign="top">:</td>
        <td valign="top"><input type="text" name="nama" /></td>
    </tr>
    <tr>
    	<td valign="top">Kritik atau Saran</td>
        <td valign="top">:</td>
        <td valign="top"><textarea name="kritik" rows="3"></textarea></td>
    </tr>
    	<td valign="top"><input name="kirim" value="KIRIM" type="submit" /></td>
        <td valign="top"></td>
        <td valign="top"><input type="reset" value="BATAL" name="reset" /></td>
    </tr>
</table>
<hr />
Kritik Dan Saran Anda Semua <br />
</form>
<form method="get">
<?PHP
	//koneksi database
	include('koneksi.php');
	//ambil data
	$sql=mysql_query("SELECT * FROM pesan ORDER BY no ASC");
	if(!$sql){
		echo 'Data Kosong'.mysql_error();
		exit;
		}
		while($row=mysql_fetch_array($sql)){
			echo("<b><u>$row[1]<br></u></b>");
			echo("$row[2]<br>");
			echo("<hr>");
		}
?>
</form>
</h3>
</div>
</body>
</html>