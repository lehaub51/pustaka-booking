<!DOCTYPE html>
<html>
<head>
	<title>Tampil Pemesanan Sepatu</title>
</head>
<body>
<center>
 <table>
 <tr><th colspan="3">Tampil Data Pemesanan Sepatu</th></tr>
 <tr><td colspan="3"><hr></td></tr>
 <tr><th>Nama Pembeli</th><th>: </th>
 <td><?= $nama; ?></td></tr>
 <tr>
 <td>No. Telepon</td><td>: </td>
 <td><?= $telepon; ?></td></tr>
 <tr>
 <td>Merk Sepatu</td><td>: </td>
 <td><?= $merk; ?></td></tr>
 <tr>
 <tr>
 <td>Ukuran Sepatu</td><td>: </td>
 <td><?= $ukuran; ?></td></tr>
 <tr>
   <td colspan="3" align="center">
 <a href="<?= base_url('Toko_sepatu');?>">Kembali</a></td></tr>
 </table></center></body></html>