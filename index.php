<?php
$koneksi=mysqli_connect("localhost","root","","db_bongkarmuat");
if (isset($_POST["tblsubmit"])) 
{
$nik=$_POST ["fnik"];
$username=$_POST ["fusername"];
$password=$_POST ["fpassword"];

$query="INSERT INTO id_datauser VALUES (null,'$nik','$username','$password')";
mysqli_query($koneksi,$query);
}
?>

<html>
<head>
<title>FORM INPUT</title>
</head>
<body>
<table border='1'align="center cellspacing="0">
<tr>
<td>
<form method="post" name form siswa"action="">
<table>
<tr>
<td colspan="3 align="center height="24">
<b>INPUT DATA AKUN</b></td>
</tr>
<tr>
<td>NIK</td>
<td align="center">:</td>
<td><input type="text" name="fnik" required></td></tr>

<tr>
<td>USERNAME</td>
<td align="center">:</td>
<td><input type="text" name="fusername" required></td></tr>

<tr>
<td>PASSWORD</td>
<td align="center">:</td>
<td><input type="text" name="fpassword" required></td></tr>

<tr>
<td colspan="2" align="center"><button type="submit" name="tblsubmit">SIMPAN</button>
</td>

<td>
<button type="reset"  name="tblreset">BATAL</button></td>
</tr>
</table>
</form>
</html>
