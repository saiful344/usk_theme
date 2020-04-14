<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran Sekolah</title>
</head>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/style.css">
<body>
<div class="container">
<h3 class="title">Data Pembayaran Uang Sekolah</h3>
<span class="new_message"><?= $this->session->flashdata('value');?></span>
<div class="btn-tambah">
<a href="<?= site_url() ;?>/core/view_create">Tambah Data</a>
<a href="<?= site_url() ;?>/core/view_create" id="ubah" style="margin-left: 66%;">Ubah</a>
<a href="<?= site_url() ;?>/core/view_create" id="hapus" onclick="">Hapus</a>
</div>
<table border="1" cellspacing="0" cellpadding="10" id="core">
	<tr>
		<th width="13">Kode Pembayaran</th>
		<th>NIS</th>
		<th>Nama Siswa</th>
		<th>Tanggal Pembayaran</th>
		<th>Jenis Pembayaran</th>
		<th>Nominal Pembayaran</th>
	</tr>
	<?php
  $no =0;
      foreach ($data as $value) { ?>
      	<tr id="isi">
      		<td data-id="<?= $value['id_pembayaran'] ?>" id="id"><?= $value['id_pembayaran'] ?></td>
      		<td data-id="<?= $value['id_pembayaran'] ?>" ><?= $value['nis'] ?></td>
      		<td data-id="<?= $value['id_pembayaran'] ?>" ><?= $value['nama_siswa'] ?></td>
      		<td data-id="<?= $value['id_pembayaran'] ?>" ><?= $value['tgl_pembayaran'] ?></td>
      		<td data-id="<?= $value['id_pembayaran'] ?>" ><?= $value['nama_jenispembayaran'] ?></td>
      		<td data-id="<?= $value['id_pembayaran'] ?>" ondblcLick="myfunction(<?= $value['nis'] ?>)"><?= $value['nominal_pembayaran'] ?></td>
      	</tr>
      <?php } ?>
</table>
</div>
<script type="text/javascript" src="<?= base_url() ?>assets/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#isi > #id").bind("contextmenu",function(e){
  e.preventDefault();  
  var id =$(this).attr("data-id"); 
  $(this).attr("style","background: #c1bcff;");
  $("#ubah").attr("href","<?= site_url('/core/view_edit') ;?>"+"/"+id);   
  $("#hapus").attr("href","<?= site_url('/core/delete_data');?>"+"/"+id);  
  $("#hapus").attr("onclick","return confirm('Apaka anda yakin akan menghapus data dengan ID pembayaran "+id+"?')");  
});
});


function myfunction($id){
  var hapus = document.getElementById('ubah');
  hapus.setAttribute('href','eaeaeaea');
}

</script>
</body>
</html>