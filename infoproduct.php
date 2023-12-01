<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Deskripsi Produk</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=%3F%3F%3F%3F%3F%3A400"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="./styles/deskripsi-produk.css"/>
</head>
<body>
<div class="deskripsi-produk-Bcu">
    <div class="rectangle-50-Xgm">
    </div>
    <div class="header-gTB">
        <a href="buyerdashboard.php" class="home-QPB">Home</a>
        <a href="buyerdashboard.php" class="shop-Wh7">Shop</a>
        <a href="buyerdashboard.php" class="categories-Ed7">Categories</a>
        <a href="index.php" class="preloved-krM">Preloved</a>
    <div class="group-7-4s3">
      <p class="search-for-anything-and-everything-N73">Search for anything and everything</p>
      <img class="gg-search-spV" src="./assets/gg-search-uQm.png"/>
        </div>
    </div>


    <?php
    include("config.php");

    // cek productid di url
    if (isset($_GET['productid'])) {
        $productid = $_GET['productid'];

        // query berdasarkan productid
        $query = pg_query($db, "SELECT * FROM product WHERE productid = $productid");

        // cek query apakah berhasil
        if ($query) {
            $productinfo = pg_fetch_assoc($query);

            // display deskripsi produk
            echo "<div class='product-details'>\n";
            echo "<div class='product-image'><img src='{$productinfo['productimage']}' alt='{$productinfo['namaproduct']}' style='max-width: 300px; height: auto;'></div>\n";
            echo "<p class='harga-zGq'>Rp {$productinfo['harga']}</p>\n";
            echo "<div class='data-DfP'>\n";
            echo "<p class='nama-product'>{$productinfo['namaproduct']}</p>\n";

            echo "<div class='kondisi-produk--1LM'>Kondisi Produk:</div>";
            echo "<div class='auto-group-xvhf-uwX'><p>{$productinfo['kondisiproduct']}</p>\n";
           
            echo "<div class='lokasi--U7T'>Lokasi:</div>";
            echo "<div class='auto-group-fh2r-ndw'><p>{$productinfo['lokasiproduct']}</p>\n";
            echo "</div>\n";

            echo "<a href='order.php?productid={$productinfo['productid']}'><button class='checkout-button'>Checkout</button></a>\n";
            
            echo "</div>\n";
        } else {
            echo "Error: " . pg_last_error($db);
        }
    }
    ?>

</div>
</body>
</html>
