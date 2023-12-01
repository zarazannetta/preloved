<?php
include("config.php");
// cek apakah tombol simpan edit sudah diklik atau belum
if(isset($_POST['edit'])){
	// ambil data yang sudah diedit dari form edit
    $productid = $_POST['productid'];
    $nama = $_POST['new_namaproduct'];
	$kondisi = $_POST['new_kondisiproduct'];
	$lokasi = $_POST['new_lokasiproduct'];
	$harga = $_POST['new_harga'];
    $kategori = $_POST['new_kategori'];

    //buat query
    $query = pg_query($db, "UPDATE product SET namaproduct='$nama', kondisiproduct='$kondisi', lokasiproduct='$lokasi', harga='$harga', kategori='$kategori' WHERE productid = '$productid'");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		header('Location: sellerdashboard.php?prosesedit=sukses');
	} else {
		die('Location: sellerdashboard.php?prosesedit=gagal');
	}
} else {
	die("Akses dilarang...");
}
?>
