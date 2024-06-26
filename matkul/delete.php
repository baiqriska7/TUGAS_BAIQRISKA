<?php 
require '../config/matkul.php';

$id = $_GET["id"];

// cek kondisi
if( hapusMatkul($id) > 0 ) {
	// kondisi pertama
	echo "
		<script>
			alert('Data berhasil di hapus');
				document.location.href= 'index.php';
		</script>
	";
} else {
	// kondisi kedua
	echo "
		<script>
			alert('Data gagal ditambahkan!');
			document.location.href = 'index.php';
		</script>
	";
}

?>