<?php
require "core.php";
$data = query("SELECT tb_siswa.*,tb_pembayaran.*,tb_jenispembayaran.* FROM tb_pembayaran LEFT JOIN tb_siswa ON tb_pembayaran.nis = tb_siswa.nis LEFT JOIN tb_jenispembayaran ON tb_pembayaran.id_jenispembayaran = tb_jenispembayaran.id_jenispembayaran") ;

// print_r($data);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran Sekolah</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div class="container">
<h3 class="title">Data Pembayaran Uang Sekolah</h3>
<div class="btn-tambah">
<a href="tambah.php">Tambah Data</a>
</div>
<table border="1" cellspacing="0" cellpadding="10" >
	<tr>
		<th width="13">Kode Pembayaran</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Tanggal Pembayaran</th>
		<th>Jenis Pembayaran</th>
		<th>Nominal Pembayaran</th>
		<th>Opsi</th>
	</tr>
	<?php
      foreach ($data as $value) { ?>
      	<tr>
      		<td><?= $value['id_pembayaran'] ?></td>
      		<td><?= $value['nis'] ?></td>
      		<td><?= $value['nama_siswa'] ?></td>
      		<td><?= $value['tgl_pembayaran'] ?></td>
      		<td><?= $value['nama_jenispembayaran'] ?></td>
      		<td><?= $value['nominal_pembayaran'] ?></td>
      		<td>
      			<a href="hapus.php/?id=<?= $value['id_pembayaran']?>" onclick="return confirm('Apaka anda yakin akan menghapus data dengan ID pembayaran <?= $value['id_pembayaran'] ?> ?')" class="btn">Hapus</a> -
      			<a href="ubah.php/?id=<?= $value['id_pembayaran'] ?>" class="btn">Ubah</a>
      		</td>
      	</tr>
      <?php } ?>
</table>
</div>
</body>
</html>