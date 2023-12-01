<?php
include("config.php");
// cek apakah tombol sign up sudah diklik atau belum?
if(isset($_POST['signup'])){

	// ambil data dari formulir
	$username = $_POST['username'];
	$fullname = $_POST['fullname'];
	$password = $_POST['password'];
	$phonenumber = $_POST['phonenumber'];

	// buat query
  	$query = pg_query($db, "INSERT INTO userdata (username, nama, password, notelp) VALUES ('$username', '$fullname', '$password', '$phonenumber') RETURNING userid");

  	// ambil userid yang baru saja di-generate
  	$userData = pg_fetch_assoc($query);
  	$userID = $userData['userid'];

  	// buat query untuk insert data ke Seller dan Buyer menggunakan UserID yang baru saja di-generate
  	$sellerQuery = pg_query($db, "INSERT INTO Seller (userid) VALUES ('$userID')");
  	$buyerQuery = pg_query($db, "INSERT INTO Buyer (userid) VALUES ('$userID')");

  	// apakah query simpan berhasil?    
  	if ($query && $sellerQuery && $buyerQuery) {
	  // kalau berhasil alihkan ke halaman index.php dengan status=sukses
	  header('Location: index.php?statusregister=sukses');
  	} else {
	  // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
	  header('Location: index.php?statusregister=gagal');
  	}
}
?>