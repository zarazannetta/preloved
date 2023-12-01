<?php
include("config.php");
session_start();

if( isset($_GET['productid']) ){
    //ambil id dari query string
    $productid = $_GET['productid'];

    //buat query hapus
    $query = pg_query($db, "DELETE FROM product WHERE productid=$productid");
   
    //apakah query hapus berhasil?
    if ($query){
        header('Location: sellerdashboard.php?deleteproduct=sukses');
    } else{
        die('Location: sellerdashboard.php?deleteproduct=gagal');
    }
}else{
    die("akses dilarang...");
}
?>
