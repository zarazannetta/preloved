<link rel="stylesheet" href="./styles/buyer-page.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600%2C700"/>
  
<?php
include("config.php");

// query untuk mengambil data product
$query = pg_query($db, "SELECT * FROM product");

// display data
while ($allproduct = pg_fetch_array($query)) {
    echo "<div class='product-box'>\n";
    echo "<div class='square-container'>\n";    
    //image product
    echo "<img src='{$allproduct['productimage']}' alt='{$allproduct['namaproduct']}' style='max-width: 250px; max-height: 250px;'>\n";
     //nama dan harga product
    echo "<p class='product-name'>{$allproduct['namaproduct']}</p>\n";
    echo "<p class='product-price'>Rp {$allproduct['harga']}</p>\n";
    //tombol add to cart
    echo "<a href='infoproduct.php?productid={$allproduct['productid']}'><button class='add-to-cart-btn'>Add to cart</button></a>\n";



    echo "</div>\n";
    }

?>
