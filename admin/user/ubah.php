<?php
include "../layout/header.php";
include "../layout/navbar.php";

include '../koneksi.php';
$getid = $_GET['id_user'];

$search = mysqli_query($koneksi,"SELECT * FROM user where id_user ='$getid'");
$item = mysqli_fetch_array($search);

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
                            <h5 class="m-b-10">Form Elements</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Elements</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">

            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Component</h5>
                    </div>
                    <div class="card-body">
                        <h5>Form controls</h5>
                        <hr>
                        <form action="proses_ubah.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_user" value="<?=$item['id_user']?>">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label for="exampleInputEmail1">username</label>
                                        <input type="text" class="form-control" name="username"
                                            placeholder="Masukan Username" value="<?php echo $item ['username'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder=" Masukan Password" value="<?php echo $item ['password'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama lengkap</label>
                                        <input type="text" class="form-control" name="nama_lengkap"
                                            placeholder="Masukan Nama Lengkap"
                                            value="<?php echo $item ['nama_lengkap'];?>">
                                    </div>
                                    <button type="submit" class="btn  btn-primary" name="submit">Submit</button>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No hp</label>
                                        <input type="number" class="form-control" name="no_hp"
                                            placeholder="Masukan Nomor Hp" value="<?php echo $item ['no_hp'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Foto</label><br>
                                        <img src="../assets/images/user/<?=$item ['foto']?>" width="100px">
                                        <input type="hidden" name="foto_lama" value="<?= $item['foto']?>">
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>






                        <!-- [ form-element ] end -->
                    </div>
                    <!-- [ Main Content ] end -->

                </div>
            </div>
</section>
<!-- [ Main Content ] end -->
<!-- Warning Section start -->
<!-- Older IE warning message -->
<!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
<!-- Warning Section Ends -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>


<?php
if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $nama_lengkap=$_POST['nama_lengkap'];
    $no_hp=$_POST['no_hp'];
    $foto=$_POST['foto'];

    $update="UPDATE user SET id_user='$id_user',password='$password',
    nama_lengkap='$nama_lengkap',no_hp='$no_hp',foto='$foto'";

    $hasil = mysqli_query($koneksi, $update) or die;
    
    if($hasil){
        echo '<script language="javascript">';
        echo 'alert("data berhasil diubah")';
        echo '</script>';
    }
}

include "../layout/footer.php"
?>