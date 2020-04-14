<?php
$conn = mysqli_connect('localhost','root','root','db_pembayaran');
 
function query($query){
	global $conn;
	$result =  mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}
function tambah($data){
	global $conn;

	$nis = htmlspecialchars($data['nis']);
	$tgl_pembayaran = htmlspecialchars($data['tgl_pembayaran']);
	$jenis_pembayaran = htmlspecialchars($data['jenis']);
	$nominal = htmlspecialchars($data['nominal']);

	$query = "INSERT INTO tb_pembayaran (nis,tgl_pembayaran,id_jenispembayaran,nominal_pembayaran) VALUES ($nis,'$tgl_pembayaran',$jenis_pembayaran,$nominal)";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}
function edit($data){
	global $conn;

	$id = $data['id'];
	$nis = htmlspecialchars($data['nis']);
	$tgl_pembayaran = htmlspecialchars($data['tgl_pembayaran']);
	$jenis_pembayaran = htmlspecialchars($data['jenis']);
	$nominal = htmlspecialchars($data['nominal']);

	$query = "
			UPDATE tb_pembayaran SET
			nis = $nis,
			tgl_pembayaran = '$tgl_pembayaran',
			id_jenispembayaran = $jenis_pembayaran,
			nominal_pembayaran = $nominal
			WHERE id_pembayaran = $id
	";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function delete($id){
	global $conn;

	mysqli_query($conn,"DELETE FROM tb_pembayaran WHERE id_pembayaran = $id");

	return mysqli_affected_rows($conn);
}
?>