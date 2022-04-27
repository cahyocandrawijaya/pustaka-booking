<html>
<head>
 <title>Tampil Data Matakuliah</title>
</head>
<body>
 <center>
 <table>
 <tr>
 <th colspan="3">
 Tampil Data Siswa
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <th>Nama Siswa</th>
 <th>:</th>
 <td>
 <?= $nama; ?>
 </td>
 </tr>
 <tr>
 <th>NIS</th>
 <th>:</th>
 <td>
 <?= $nis; ?>
 </td>
 </tr>
 <tr>
 <th>kelas</th>
 <th>:</th>
 <td>
 <?= $kelas; ?>
 </td>
 </tr>
 <tr>
 <th>Tanggal Lahir</th>
 <th>:</th>
 <td>
 <?= $tanggal; ?>
 </td>
 </tr>
 <tr>
 <th>Tempat Lahir</th>
 <th>:</th>
 <td>
 <?= $tempat; ?>
 </td>
 </tr>
 <tr>
 <th>Alamat</th>
 <th>:</th>
 <td>
 <?= $alamat; ?>
 </td>
 </tr>
 <tr>
 <th>Jenis Kelamin</th>
 <th>:</th>
 <td>
 <?= $kelamin; ?>
 </td>
 </tr>
 <th>Agama</th>
 <th>:</th>
 <td>
 <?= $agama; ?>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
     <br>
 <a href="<?= base_url('admin'); 
?>">Kembali</a>
 </td>
 </tr>
 </table>
</center>
</body>
</html>
