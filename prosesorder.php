<?php
include("config.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buyerID = $_SESSION['userid'];
    $productID = $_POST['productid'];
    $kuantitas = $_POST['kuantitas'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    // hitung total harga
    $totalharga = $kuantitas * $harga;

    // insert data ke tabel order
    $orderQuery = pg_query($db,"INSERT INTO orderdata (kuantitas, totalharga, productID, buyerID) VALUES ('$kuantitas', '$totalharga', '$productID', '$buyerID') RETURNING orderid");
    $orderRecord = pg_fetch_assoc($orderQuery);
    $orderID = $orderRecord['orderid'];

    if ($orderQuery) {
        // update tabel transaction
        $transactionQuery = pg_query($db, "INSERT INTO transaction (status, orderid) VALUES ('$status', '$orderID')");
        
        if ($transactionQuery) {
            echo 'Status updated successfully.';
        } else {
            echo 'Error updating status.';
        }
    }

    if ($orderQuery && $transactionQuery) {
    // kalau berhasil alihkan ke halaman ordercompleted dengan status=sukses
    header('Location: ordercompleted.php?statusorder=sukses');
    } else {
    // kalau gagal tetap di halaman order dengan status=gagal
    header("Location: order.php?productid={$productID}&statusorder=gagal");
    }       
}

?>
