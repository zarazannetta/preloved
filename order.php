<?php
include("config.php");

if (isset($_GET['productid'])){
    $productID = $_GET['productid'];

    $query = pg_query($db, "SELECT * FROM product WHERE productid='$productID'");
    $product = pg_fetch_array($query);
	$productimage = $product['productimage'];
    $namaproduk = $product['namaproduct'];
    $harga = $product['harga'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Order</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=%3F%3F%3F%3F%3F%3A400"/>
    <link rel="stylesheet" href="./styles/order.css"/>
<body>
<div class="order-XMT">
    <div class="rectangle-1-G49">
    </div>
    <div class="header-3TX">
        <a href="buyerdashboard.php" class="home-AY9">Home</a>
        <a href="buyerdashboard.php" class="shop-h2H">Shop</a>
        <a href="buyerdashboard.php" class="categories-pch">Categories</a>
        <a href="index.php" class="preloved-xD7">Preloved</a>
        <div class="group-7-J25">
            <p class="search-for-anything-and-everything-oUd">Search for anything and everything</p>
            <img class="gg-search-u1s" src="./assets/gg-search-Psw.png"/>
        </div>
    </div>

    <div class="a7401c5e704d8399140400747a5-1-14u">
    </div>
        <p class="pastikan-pesananmu-sudah-benar-ya-t8h">
        Pastikan
        <br/>
        pesananmu sudah
        <br/>
        benar ya!
        </p>

    <form action="prosesorder.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="productid" value="<?php echo $productID; ?>"> 
		<?php 
        if (isset($product)) {
            echo "<img src='{$product['productimage']}' alt='{$product['namaproduct']}' class= 'product-image' style='max-width: 250px; max-height: 250px;'>\n";
        }?>
        
        <p class="kuantitas-4xy">
			<label for="kuantitas" class="kuantitas--off">Kuantitas:</label>
			<input type="number" id="kuantitas" class="rectangle-6-8C9" name="kuantitas" min="1" oninput="hitungTotalHarga()"/>
		</p>

        <p class="totalharga-posisi" id="totalharga" >Rp </p>
        <input type="hidden" id="harga" name="harga" value="<?php echo $harga; ?>">
       
        <input type="hidden" id="status" name="status" value=""> 

        <div class="belum-bayar-wi1">
            <button type="button" name="status" onclick="setStatus('belum bayar')">
                <div class="group-10-ekq">Belum Bayar</div>
            </button>
        </div>

        <div class="sudah-bayar-ghX">
            <button type="button" name="status" onclick="setStatus('sudah bayar')">
                <div class="group-10-cr5">Sudah Bayar</div>
            </button>
        </div>
		<p>
			<input type="submit" value="Buat Pesanan" name="order" class="buat-pesanan-bcD"/>
		</p>
	</form>
    <script>
        function hitungTotalHarga() {
            // ambil data kuantitas dan harga
            var kuantitas = document.getElementById('kuantitas').value;
            var harga = document.getElementById('harga').value;
            // hitung total harga
            var totalharga = kuantitas * harga;
            // display total harga
            document.getElementById('totalharga').innerHTML = 'Rp ' + totalharga;
        }
        function setStatus(status) {
            // set value status
            document.getElementById('status').value = status;
        }
    </script>
</div>
</body>
</html>