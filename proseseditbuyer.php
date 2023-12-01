<?php
include("config.php");
// cek apakah tombol simpan edit sudah diklik atau belum
if(isset($_POST['edit'])){
	// ambil data yang sudah diedit dari form edit
    $buyerID = $_POST['buyerid'];
    $username = $_POST['new_username'];
    $fullname = $_POST['new_nama'];
    $phonenumber = $_POST['new_notelp'];
    $address = $_POST['new_alamat'];

    //buat query
    $queryUserdata = pg_query($db, "UPDATE userdata SET username='$username', nama='$fullname', notelp='$phonenumber' WHERE userid = '$buyerID'");
    $queryBuyer = pg_query($db, "UPDATE buyer SET alamat='$address' WHERE userid = '$buyerID'");
	
    // apakah query simpan berhasil?
	if( $queryUserdata && $queryBuyer ) {
		header('Location: profilebuyer.php?prosesedit=sukses');
	} else {
		die('Location: profilebuyer.php?prosesedit=gagal');
	}
} else {
	die("Akses dilarang...");
}
?>
