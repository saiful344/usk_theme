<?php
require "core.php";
if (isset($_POST['submit'])) {
	if (tambah($_POST) > 0) {
		echo"
			<script>
				alert('Data Berhasil Disimpan');
				document.location.href ='tampil.php';
			</script>";
	}else{
		echo"
			<script>
				alert('Data Gagal Disimpan');
				document.location.href ='tampil.php';
			</script>";
	}
}

$jenis = query("SELECT * FROM tb_jenispembayaran");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<link rel="stylesheet" type="text/css" href="/praktikum/style.css">
<body>
	<div class="padding"></div>
	<form method="post" action="">
		<h3>Tambah data Pembayaran</h3>
		<div>
		<label>NIS</label>
		<input type="number" name="nis" >
		</div>
		<div>
		<label>Jenis Pembayaran</label>
		<select name="jenis">
			<option>-- Pilih Pembayaran --</option>
			<?php foreach($jenis as $content) {?>
				<option value="<?= $content['id_jenispembayaran']?>"><?= $content['nama_jenispembayaran']?></option>
			<?php } ?>
		</select>
		</div>
		<div>
		<label>Tanggal Pembayaran</label>
		<input type="date" name="tgl_pembayaran">
		</div>
		<div>
		<label>Nominal Pembayaran</label>
		<input type="number" name="nominal">
		</div>

		<button type="submit" name="submit" class="btn-form">Simpan</button>
		<input type="reset" name="RESET" class="btn-form">
	</form>
</body>
</html>