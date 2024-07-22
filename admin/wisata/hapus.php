<?php
include '../koneksi.php';

$id_wisata = $_GET['id_wisata'];

$hapus = mysqli_query($koneksi, "DELETE FROM wisata WHERE id_wisata='$id_wisata'");

if($hapus){
	echo "<script>
			alert ('data berhasil dihapus');
			window.location.href='index.php';
			</script>";
}else {
	echo "<script>
			alert ('data gagal dihapus');
			window.location.href='index.php';
			</script>";
}
?>