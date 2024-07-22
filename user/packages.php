<?php
include '../koneksi.php';
include '../layout/header.php';
include '../layout/navbar.php';
?>

<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center"
            data-background="../assets/img/hero/contact_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Our Packages</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Favourite Places Start -->
    <div class="favourite-place place-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>FEATURED TOURS Packages</span>
                        <h2>Favourite Places</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                        <?php
                          $user = mysqli_query($koneksi,"SELECT * FROM wisata JOIN kategori ON wisata.id_kategori=kategori.id_kategori ORDER BY id_wisata DESC");
                            while($data= mysqli_fetch_array($user)):
                        ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-place mb-30">
                                <div class="place-img">
                                <td><img src="../admin/assets/images/wisata/<?= $data['gambar_wisata']?>" width="100px" height="300px" alt=""></td>
                                </div>
                                <div class="place-cap">
                                    <div class="place-cap-top">
                                        <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                                        <h3><a href="#"><?php echo $data['judul_wisata']?></a></h3>
                                        <p class="dolor"><?php echo $data['harga']?><span>/ Per Person</span></p>
                                    </div>
                                    <div class="place-cap-bottom">
                                        <ul>
                                            <li><i>Deskripsi : </i><?php echo $data['deskripsi']?></li>
                                            <br><br>
                                            <li><i class="fas fa-map-marker-alt"> <?php echo $data['nama_kategori']?></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
            </div>
        </div>
        <!-- Favourite Places End -->

        <!-- Pagination-area Start -->
        <div class="pagination-area pb-100 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><span
                                                class="flaticon-arrow roted left-arrow"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span
                                                class="flaticon-arrow right-arrow"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination-area End -->
</main>



<?php
    include '../layout/footer.php';
    ?>