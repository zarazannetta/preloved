<?php
include("config.php");
session_start();
// cek apakah tombol sell sudah diklik atau belum?
if(isset($_POST['sell'])){
	//ambil userid dari session pada login
    $sellerID = $_SESSION['userid'];

	// ambil data dari formulir
	$namaproduk = $_POST['namaproduk'];
	$kondisiproduk = $_POST['kondisiproduk'];
	$lokasi = $_POST['lokasi'];
	$hargaproduk = $_POST['hargaproduk'];
    $kategoriproduk = $_POST['kategoriproduk'];

	// menetapkan target directory image
    $targetDir = "uploadproduct/";
    $targetFile = $targetDir . basename($_FILES["productimage"]["name"]);
    $uploadstatus = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // cek apakah file sudah ada
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // cek file size
    if ($_FILES["productimage"]["size"] > 500000) {
        echo "Sorry, your file is too large. Please only upload image under 450 KB (0.45 MB)";
        $uploadstatus = 0;
    }

    // file format
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadstatus = 0;
    }
	// cek apakah $uploadstatus error (==0)
    if ($uploadstatus == 0) {
        echo "Sorry, your file was not uploaded.";
    // jika tidak ada error, upload file ke directory
    } else {
        if (move_uploaded_file($_FILES["productimage"]["tmp_name"], $targetFile)) {
            // insert data ke database
            $query = pg_query($db, "INSERT INTO product (namaproduct, kondisiproduct, lokasiproduct, harga, kategori, sellerid, productimage) VALUES ('$namaproduk', '$kondisiproduk', '$lokasi','$hargaproduk', '$kategoriproduk', '$sellerID', '$targetFile')");
            
		// apakah query sell berhasil?    
		if( $query==TRUE ) {
			// kalau berhasil alihkan ke halaman sellerdashboard dengan status=sukses
			header('Location: sellerdashboard.php?sell=sukses');
		} else {
			// kalau gagal alihkan ke halaman sellerdashboard dengan status=gagal
			header('Location: sellerdashboard.php?sell=gagal');
		}
		} else {
		echo "Sorry, there was an error uploading your file.";
		}
	}
}
?>
