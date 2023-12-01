<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
  	<link rel="icon" href="/favicon.ico" />
  	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<meta name="theme-color" content="#000000" />
  	<title>Selling Form</title>
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600"/>
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600"/>
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=%3F%3F%3F%3F%3F%3A400"/>
  	<link rel="stylesheet" href="./styles/dia-mau-jual-apa.css"/>
</head>
<body>
<div class="dia-mau-jual-apa-kcR">
	<div class="rectangle-1-JP3"></div>
	<div class="header-Cc9">
    	<a href="sellerdashboard.php" class="home-iqP">Home</a>
    	<a href="sellerdashboard.php" class="products-ej3">Products</a>
    	<a href="index.php" class="preloved-n4Z">Preloved</a>
		<a href="profileseller.php"><img class="vector-7cd" src="./assets/vector-VEZ.png"/></a>
  	</div>

	<div class="data-ZTP">
    <form action="proses_sell.php" method="POST" enctype="multipart/form-data">
		<p class="nama-produk--4Q9">
            <label for="namaproduk">Nama Produk:</label>
            <div class="rectangle-3-PBX">
                <input type="text" name="namaproduk" />
            </div>
        </p>
        <p class="kondisi-produk--ggR">
            <label for="kondisiproduk">Kondisi Produk:</label>
            <div class="rectangle-6-QMX">
                <input type="text" name="kondisiproduk" />
            </div>
        </p>
        <p class="lokasi--7Fw">
            <label for="lokasi">Lokasi:</label>
            <div class="rectangle-7-qhj">
                <input type="text" name="lokasi" />
            </div>
        </p>
        <p class="harga--kph">
            <label for="hargaproduk">Harga Produk:</label>
            <div class="rectangle-9-5c5">
                <input type="number" name="hargaproduk" placeholder="Rp"/>
            </div>
        </p>
        <p class="kategori--QeM">
            <label for="kategoriproduk">Kategori Produk:</label>
            <div class="rectangle-3-Lnu">
                <select name="kategoriproduk">
                    <option value="furnitures">Furnitures</option>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing & Accessories</option>
                    <option value="books_stationary">Books & Stationary</option>
                    <option value="kitchen">Kitchen</option>
                </select>
            </div>
        </p>
        <p>	
			<input type="submit" value="Sell" name="sell" class="sell-button"/>
		</p>
		<img id="imagePreview" src="" alt="Image Preview" class=preview-image style="display: none; width: 350px; height: auto;">
		<p>
            <label for="productimage"></label>
			<div>
			<input type="file" id="fileinput" name="productimage" accept="image/*" style="display: none;" onchange="displayFileName()" />
            <button type="button" class="addImageButton" onclick="document.getElementById('fileinput').click()">Add Image</button>
			</div>
		</p>
		<script>
		function displayFileName() {
    	// ambil file input
    	var fileInput = document.getElementById('fileinput');
		// ambil nama image yang diinput
    	var fileName = fileInput.files[0].name;
		// display nama file
    	alert('File Successfully Selected: ' + fileName);

		 // display image preview
		var reader = new FileReader();
    	reader.onload = function (e) {
        document.getElementById('imagePreview').src = e.target.result;
        document.getElementById('imagePreview').style.display = 'block';
    	}
    	reader.readAsDataURL(fileInput.files[0]);
		}
		</script>	
		
	</form>
	</div>
</div>
</body>
</html>

