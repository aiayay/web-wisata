<?php
include '../koneksi.php';

$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];


// if($_FILES['foto']['name']==''){
//     // jika gambar kosong
//     $namafile= $_POST['foto_lama'];
// }else{
//     // ambil data file
//     $namafile = $_FILES['foto']['name'];
//     $namaSementara= $_FILES['foto']['tmp_name'];

//     $terupload = move_uploaded_file($namaSementara, '../assets/images/user/' . $namafile);
// }

// //ambil data file
// $namafile = $_FILES['foto']['name'];
// $namaSementara = $_FILES['foto']['tmp_name'];
// //pindahkan file



$update = mysqli_query($koneksi, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");

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