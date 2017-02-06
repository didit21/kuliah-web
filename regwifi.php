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
<form name="form1" action="rregwifi.php" method="post">
<table>
	<tr>
    	<td colspan="4">Masukkan Data Sesuai Identitas Asli</td>
    </tr>
    <tr>
    	<td valign="top">NISN</td>
        <td valign="top">:</td>
        <td valign="top"><input type="text" name="nisn" />*</td>
    </tr>
    <tr>
    	<td valign="top">Nama Lengkap</td>
        <td valign="top">:</td>
        <td valign="top"><input type="text" name="nama" />*</td>
    </tr>
    <tr>
    	<td valign="top">Tempat Lahir</td>
        <td valign="top">:</td>
        <td valign="top"><input name="tl" type="text" /></td>
    </tr>
    <tr>
    	<td valign="top">Tanggal Lahir</td>
        <td valign="top">:</td>
        <td valign="top"><input name="tgl" type="datetime" /></td>
    </tr>
    <tr>
    	<td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td valign="top"><textarea name="alamat" rows="3"></textarea>*</td>
    </tr>
    <tr>
    	<td valign="top">No. Telepon</td>
        <td valign="top">:</td>
        <td valign="top"><input name="phone" type="number" />*</td>
    </tr>
    <tr>
    	<td valign="top">Nama User</td>
        <td valign="top">:</td>
        <td valign="top"><input name="user" type="text" />**</td>
    </tr>
    <tr>
    	<td valign="top">Password</td>
        <td valign="top">:</td>
        <td valign="top"><input name="pass" type="password" />**</td>
    </tr>
    <tr>
    	<td valign="top"><input name="kirim" value="DAFTAR" type="submit" /></td>
        <td valign="top"></td>
        <td valign="top"><input type="reset" value="BATAL" name="reset" /></td>
    </tr>
    <tr>
    	<td valign="top">*</td>
        <td valign="top"></td>
        <td valign="top">Wajib diisi dan harus sama dengan KTP</td>
    </tr>
    <tr>
    	<td valign="top">**</td>
        <td valign="top"></td>
        <td valign="top">Wajib diisi dan harus tidak boleh ada yang tahu user dan pass max 20 karakter</td>
    </tr>
</table>
</form>
</h3>
</div>
</body>
</html>