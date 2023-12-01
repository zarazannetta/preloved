<?php
include("config.php");
// cek apakah tombol simpan edit sudah diklik atau belum
if(isset($_POST['edit'])){
	// ambil data yang sudah diedit dari form edit
    $sellerID = $_POST['sellerid'];
    $username = $_POST['new_username'];
    $fullname = $_POST['new_nama'];
    $phonenumber = $_POST['new_notelp'];
    $aboutme = $_POST['new_deskripsiseller'];

    //buat query
    $queryUserdata = pg_query($db, "UPDATE userdata SET username='$username', nama='$fullname', notelp='$phonenumber' WHERE userid = '$sellerID'");
    $querySeller = pg_query($db, "UPDATE seller SET deskripsiseller='$aboutme' WHERE userid = '$sellerID'");
	
    // apakah query simpan berhasil?
	if( $queryUserdata && $querySeller ) {
		header('Location: profileseller.php?prosesedit=sukses');
	} else {
		die('Location: profileseller.php?prosesedit=gagal');
	}
} else {
	die("Akses dilarang...");
}
?>
