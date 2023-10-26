<?php
if(isset($_POST['simpan'])){
    include_once('koneksi.php');
    $nama = $_POST['nama'];
    $alamat    = $_POST['alamat'];
    $kontak       = $_POST['kontak'];

    $sql="INSERT INTO supplier SET nama='$nama', alamat='$alamat', kontak='$kontak' ";
    $simpan=mysqli_query($koneksi, $sql);
    if($simpan) {
        header('location:index.php');
    } else {
        include "index.php?m=supplier=";
        echo 'script language="JavaScipt">';
        echo 'alert("data gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "<script>window.history.back()</script>";
}
?>