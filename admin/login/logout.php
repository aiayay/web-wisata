<?php
// memulai session
session_start();
// menghapus session

session_destroy();

echo "<script>
alert ('anda berhasil keluar')
window.location.href='../../home/index.php'
</script>";
?>