<?php
include '../koneksi.php';
include '../layout/header.php';
include '../layout/navbar.php';
?>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="../assets/img/hero/contact_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Our Transportation</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- slider Area End-->
	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<h3 class="mb-30">List Transportation</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">#</div>
							<div class="country">Transportation</div>
							<div class="visit">Name</div>
							<div class="visit">Price</div>
							<div class="visit">Description</div>
						</div>
						<?php
						$no=1;
                          $user = mysqli_query($koneksi,"SELECT * FROM armada");
                            while($data= mysqli_fetch_array($user)):
                        ?>
						<div class="table-row">
							<div class="serial"><?= $no++?></div>
							<div class="country"> <img src="../admin/assets/images/armada/<?= $data['gambar_armada']?>" width="200px" height="150px" alt=""></div>
							<div class="visit"><?php echo $data['nama_armada']?></div>
							<div class="visit"><?php echo $data['harga']?></div>
							<div class="visit"><?php echo $data['deskripsi']?></div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			<div class="section-top-border">
				<h3>Image Gallery</h3>
				<div class="row gallery-item">
				<?php
						$no=1;
                          $user = mysqli_query($koneksi,"SELECT * FROM armada");
                            while($data= mysqli_fetch_array($user)):
                        ?>
					<div class="col-md-4">
						<img src="../admin/assets/images/armada/<?= $data['gambar_armada']?>" width="200px" height="150px" alt="" class="img-pop-up">

						</a>
					</div>
					
					<?php endwhile; ?>
				</div>
			</div>
	
		</div>
	</div>
	<!-- End Align Area -->
    
	<?php
    include '../layout/footer.php';
    ?>