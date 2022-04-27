<html>
<head>
 <title>Form Input Matakuliah</title>
</head>
<body>
 <center>
 <form action="<?= base_url('admin/cetak'); ?>"
method="post">
 <table>
 <tr>
 <th colspan="3">
 Form Input Data Siswa
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
 <input type="text" name="nama" id="nama">
 </td>
 </tr>
 <tr>
 <th>NIS</th>
 <th>:</th>
 <td>
 <input type="text" name="nis" id="nis">
 </td>
 </tr>
 <tr>
 <th>Kelas</th>
 <th>:</th>
 <td>
 <input type="text" name="kelas" id="kelas">
 </td>
 </tr>
 <tr>
 <th>Tanggal Lahir</th>
 <th>:</th>
 <td>
 <input type="text" name="tanggal" id="tanggal">
 </td>
 </tr>
 <tr>
 <th>Tempat Lahir</th>
 <th>:</th>
 <td>
 <input type="text" name="tempat" id="tempat">
 </td>
 </tr>
 <tr>
 <th>Alamat</th>
 <th>:</th>
 <td>
 <input type="text" name="alamat" id="alamat">
 </td>
 </tr>
 <tr>
 <th>Pilih Jenis Kelamin</th>
 <td>:</td>
 <td>
 <input type="radio" name="kelamin" id="kelamin" value="laki-laki">Laki-laki
 <input type="radio" name="kelamin" id="kelamin" value="perempuan">Perempuan
</td>
 </tr>
 <tr>
 <th>Agama</th>
 <td>:</td>
 <td>
 <select name="agama" id="agama">
 <option value="">Pilih Agama</option>
 <option value="islam">Islam</option>
 <option value="kristen">Kristen</option>
 <option value="Katolik">Katolik</option>
 <option value="budha">Budha</option>
 <option value="hindu">Hindu</option>
 <option value="protestan">Protestan</option>
 <option value="khonghucu">Khonghucu</option>
 </select>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
     <br>
 <input type="submit" value="Submit">
 </td>
 </tr>
 </table>
 </form>
 </center>
</body>
</html>
