<?php
// Koeneksi Database 
$koneksi = mysqli_connect("localhost", "root", "", "belajar_php");


// matkul
function queryMatkul($query_matkul) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query_matkul);
	$rows = [];
	while ($matkul = mysqli_fetch_assoc($result)) {
		$rows[] = $matkul;
	}
	return $rows;
}

function tambahMatkul($data){
	global $koneksi;

	$kdmk = htmlspecialchars($data['kdmk']);
	$matkul = htmlspecialchars($data['matkul']);
	$sks = htmlspecialchars($data['sks']);
    

	$query_matkul = "INSERT INTO matkul VALUES
				('','$kdmk','$matkul','$sks')";
	mysqli_query($koneksi, $query_matkul);
	return mysqli_affected_rows($koneksi);

    
}

function editMatkul($data){
	global $koneksi;

	$id_mk = ($data['id']);
	$kdmk = ($data['kdmk']);
	$matkul = ($data['matkul']);
	$sks = ($data['sks']);

	$query_matkul = "UPDATE matkul SET
				kdmk = '$kdmk',
				matkul = '$matkul',
				sks = '$sks'
				WHERE 
				id_mk = $id_mk";
	mysqli_query($koneksi, $query_matkul);
	return mysqli_affected_rows($koneksi);
}



function hapusMatkul($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM matkul WHERE id_mk = $id");
	return mysqli_affected_rows($koneksi);
}
