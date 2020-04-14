<?php
require "core.php";
if (isset($_POST['submit'])) {
	if (edit($_POST) > 0) {
		echo"
			<script>
				alert('Data Berhasil Diubah');
				document.location.href ='/praktikum/tampil.php';
			</script>";
	}else{
		echo"
			<script>
				alert('Data Gagal Diubah');
				document.location.href ='/praktikum/tampil.php';
			</script>";
	}
}

$id = $_GET['id'];
$data = query("SELECT * FROM tb_pembayaran WHERE id_pembayaran = $id")[0];
// var_dump($data);

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
		<input type="hidden" name="id" value="<?= $data['id_pembayaran']?>">
		<h3>Ubah data Pembayaran</h3>
		<div>
		<label>NIS</label>
		<input type="number" name="nis" value="<?= $data['nis'] ?>" >
		</div>
		<div>
		<label>Jenis Pembayaran</label>
		<select name="jenis">
				<?php foreach($jenis as $content) {?>
					
				<option value="<?= $content['id_jenispembayaran']?>" ><?= $content['nama_jenispembayaran']?></option>
				
			<?php } ?>
		</select>
		</div>
		<div>
		<label>Tanggal Pembayaran</label>
		<input type="date" name="tgl_pembayaran" value="<?= $data['tgl_pembayaran'] ?>" >
		</div>
		<div>
		<label>Nominal Pembayaran</label>
		<input type="number" name="nominal" value="<?= $data['nominal_pembayaran'] ?>" >
		</div>
		
		<button type="submit" name="submit" class="btn-form">Edit</button>
		<input type="reset" name="RESET" class="btn-form">
	</form>
</body>
</html>