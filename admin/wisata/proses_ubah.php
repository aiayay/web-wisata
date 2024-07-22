<?php
include '../koneksi.php';

$id_wisata = $_POST['id_wisata'];
$id_kategori = $_POST['id_kategori'];
$judul_wisata = $_POST ['judul_wisata'];
$deskripsi = $_POST ['deskripsi'];
$harga = $_POST ['harga'];

if($_FILES['gambar_wisata']['name']==''){
    // jika gambar kosong
    $namafile= $_POST['foto_lama'];
}else{
    // ambil data file
    $namafile = $_FILES['gambar_wisata']['name'];
    $namaSementara= $_FILES['gambar_wisata']['tmp_name'];

    $terupload = move_uploaded_file($namaSementara, '../assets/images/wisata/' . $namafile);
}

// //ambil data file
// $namafile = $_FILES['foto']['name'];
// $namaSementara = $_FILES['foto']['tmp_name'];
// //pindahkan file



$update = mysqli_query($koneksi, "UPDATE wisata SET id_kategori='$id_kategori', judul_wisata='$judul_wisata', deskripsi='$deskripsi', harga='$harga', gambar_wisata='$namafile' 
WHERE id_wisata='$id_wisata'");

if ($update){
    echo "<script>
        alert ('data berhasil diubah')
        window.location.href='index.php'
        </script>";
   }   else {
        echo "<script>
        alert ('data gagal diubah')
        window.location.href='ubah.php'
        </script>";
    }

?>