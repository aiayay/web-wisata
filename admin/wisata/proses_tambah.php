<?php
include '../koneksi.php';

$id_kategori = $_POST['id_kategori'];
$judul_wisata = $_POST ['judul_wisata'];
$deskripsi = $_POST ['deskripsi'];
$harga = $_POST ['harga'];

$slug = str_replace('+','-', urlencode($judul_wisata));

//ambil data file
$namafile = $_FILES['gambar_wisata']['name'];
$namaSementara = $_FILES['gambar_wisata']['tmp_name'];
//pindahkan file

$terupload = move_uploaded_file($namaSementara, '../assets/images/wisata/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO wisata (id_kategori,judul_wisata,slug,deskripsi,harga,gambar_wisata) 
VALUES ('$id_kategori','$judul_wisata','$slug','$deskripsi','$harga','$namafile')");

if ($tambah){
    echo "<script>
    alert ('data berhasil ditambahkan')
    window.location.href='index.php'
    </script>";
   }   else {
        echo "<script>
        alert ('data gagal ditambahkan')
        window.location.href='tambah.php'
        </script>";
    }

?>