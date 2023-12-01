<?php
include("config.php");

if (isset($_GET['productid'])){
    $productid = $_GET['productid'];

    $query = pg_query($db, "SELECT * FROM product WHERE productid='$productid'");
    $product = pg_fetch_array($query);
    $nama = $product['namaproduct'];
	$kondisi = $product['kondisiproduct'];
	$lokasi = $product['lokasiproduct'];
	$harga = $product['harga'];
    $kategori = $product['kategori'];
	$productimage = $product['productimage'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
  	<link rel="icon" href="/favicon.ico" />
  	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<meta name="theme-color" content="#000000" />
  	<title>Edit Selling Form</title>
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=%3F%3F%3F%3F%3F%3A400"/>
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600"/>
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600"/>
  	<link rel="stylesheet" href="./styles/page-edit.css"/>
</head>
<body>
<div class="page-edit-UAV">
  <div class="rectangle-1-cXb">
  </div>
  <div class="header-igR">
    <a href="sellerdashboard.php" class="home-rGq">Home</a>
    <a href="sellerdashboard.php" class="products-ysF">Products</a>
    <a href="index.php" class="preloved-i49">Preloved</a>
	<a href="profileseller.php"><img class="vector-SF3" src="./assets/vector-mjo.png"/></a>
  </div>
  <div class="data-Bj7">
    <form action="proseseditproduct.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="productid" value="<?php echo $productid; ?>"> 
		<?php echo "<img src='{$product['productimage']}' alt='{$product['namaproduct']}' class='baranng-W4Z' style='width: 400px; height: auto;'>\n";?>
        

		<p class="nama-produk--JYq">
    		<label for="namaproduk">Nama Produk:</label>
    		<div class="rectangle-3-cZX">
        	<input type="text" name="new_namaproduct" value="<?php echo $nama; ?>"/>
    		</div>
		</p>
		<p class="kondisi-produk--Kyj">
    		<label for="kondisiproduk">Kondisi Produk:</label>
    		<div class="rectangle-6-eFK">
        	<input type="text" name="new_kondisiproduct" value="<?php echo $kondisi; ?>"/>
    		</div>
		</p>
		<p class="lokasi--MQd">
    		<label for="lokasi">Lokasi:</label>
    		<div class="rectangle-7-tQZ">
        	<input type="text" name="new_lokasiproduct" value="<?php echo $lokasi; ?>" />
    		</div>
		</p>
		<p class="harga--bpm">
    		<label for="hargaproduk">Harga Produk:</label>
    		<div class="rectangle-9-XTX">
        	<input type="number" name="new_harga" placeholder="Rp" value="<?php echo $harga; ?>"/>
    		</div>
		</p>
		<p class="kategori--TMB">
    		<label for="kategoriproduk">Kategori Produk:</label>
    		<div class="rectangle-3-yqK">
        	<select name="new_kategori" value="<?php echo $kategori; ?>">
            <option value="furnitures">Furnitures</option>
            <option value="electronics">Electronics</option>
            <option value="clothing">Clothing</option>
            <option value="books_stationary">Books & Stationary</option>
            <option value="kitchen">Kitchen</option>
        	</select>
    		</div>
		</p>

		<p>
			<input type="submit" value="Simpan" name="edit" class="simpan-button"/>
		</p>	
	</form>
	</div>
</div>
</body>
</html>