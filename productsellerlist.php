<link rel="stylesheet" href="./styles/seller-page.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600%2C700"/>
  
<?php
include("config.php");
$sellerID = $_SESSION['userid'];

// query untuk mengambil data product based on seller yang login
$query = "SELECT * FROM product WHERE sellerid = $sellerID";
$result = pg_query($db,$query) or die('Query failed: ' . pg_last_error());


echo "<div class='products-container'>\n"; 
// display data
while ($productlist = pg_fetch_array($result)) {
    echo "<div class='product-box'>\n";
    echo "<div class='square-container'>\n";
    //image product
    echo "<img src='{$productlist['productimage']}' alt='{$productlist['namaproduct']}' style='max-width: 250px; max-height: 250px;'>\n";
    //nama dan harga product
    echo "<p class='product-seller-name'>{$productlist['namaproduct']}</p>\n";
    echo "<p class='product-seller-price'>Rp {$productlist['harga']}</p>\n";
    //tombol edit
    echo "<a href='formeditproduct.php?productid={$productlist['productid']}'><button class='edit-btn'>Edit</button></a>\n";
    //tombol delete
    echo "<a href='deleteproduct.php?productid={$productlist['productid']}'><button class='delete-btn'>Delete</button></a>\n";
    
    echo "</div>\n";
}
echo "</div>\n";

// free resultset
pg_free_result($result);

?>
