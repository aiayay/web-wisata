<?php
include "../layout/header.php";
include "../layout/navbar.php";
?>

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Bootstrap Basic Tables</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Bootstrap Table</a></li>
                            <li class="breadcrumb-item"><a href="#!">Basic Tables</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
 
            <!-- [ stiped-table ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Nama Wisata</th>
                                        <th>Deskripsi</th>                                    
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                include "../koneksi.php";
                                $no =1;
                                $user = mysqli_query($koneksi,"SELECT * FROM wisata JOIN kategori ON wisata.id_kategori=kategori.id_kategori ORDER BY id_wisata DESC");
                                while($item = mysqli_fetch_array($user)){
                                    ?>
                                    <tr>
                                        <td><?=  $no++; ?></td>
                                        <td><?= $item['nama_kategori']; ?></td>
                                        <td><?= $item['judul_wisata']; ?></td>
                                        <td><?= $item['deskripsi']; ?></td>                                        
                                        <td><?= $item['harga']; ?></td>
                                        <td><img src="../assets/images/wisata/<?= $item['gambar_wisata']?>" width="100px"=""></td>
                                        <td>
                                        <a class="btn btn-warning" href="ubah.php?id_wisata=<?php echo $item['id_wisata'];?>">Ubah</a>
                                        <a class="btn btn-danger" href="hapus.php?id_wisata=<?php echo $item['id_wisata'];?>">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] end -->
          
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
<?php
include "../layout/footer.php";
?>