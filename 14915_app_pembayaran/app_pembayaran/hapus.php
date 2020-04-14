<?php
require "core.php";
$id = $_GET['id'];


	if (delete($id) > 0) {
		echo"
			<script>
				alert('Data Berhasil Dihapus');
				document.location.href ='/praktikum/tampil.php';
			</script>";
	}else{
		echo"
			<script>
				alert('Data Gagal Dihapus');
				document.location.href ='/praktikum/tampil.php';
			</script>";
	}






?>