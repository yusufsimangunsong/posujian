<?php
if(isset($_POST['simpan'])){
    include_once('koneksi.php');
    $supplier_id = $_POST['supplier_id'];
    $total    = $_POST['total'];

    $sql="INSERT INTO penjualan SET supplier_id='$supplier_id', total='$total' ";
    $simpan=mysqli_query($koneksi, $sql);
    if($simpan) {
        header('location:index.php');
    } else {
        include "index.php?m=penjualan=";
        echo 'script language="JavaScipt">';
        echo 'alert("data gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "<script>window.history.back()</script>";
}
?>