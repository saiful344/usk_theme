<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/style.css">
<body>
	<div class="padding"></div>
	<form method="post" action="<?= site_url() ?>/core/save_edit">
		<input type="hidden" name="id" value="<?= $data['id_pembayaran']?>">
		<h3>Ubah data Pembayaran</h3>
		<div>
		<label>NIS</label>
		<input type="number" name="nis" value="<?= $data['nis'] ?>" >
		</div>
		<div>
		<label>Jenis Pembayaran</label>
		<select name="jenis">
			<?php foreach($content as $content) { ?>
				<?php if ($content['id_jenispembayaran'] == $data['id_jenispembayaran']) {?>
					<option value="<?= $content['id_jenispembayaran']?>" selected><?= $content['nama_jenispembayaran']?></option>
				<?php } else { ?>
					<option value="<?= $content['id_jenispembayaran']?>"><?= $content['nama_jenispembayaran']?></option>
			<?php }} ?>
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