<?php
include("config.php");
    session_start();

    if (isset($_SESSION['userid'])){
    $sellerID = $_SESSION['userid'];
    // query untuk mengambil data seller
    $query = pg_query($db, "SELECT * FROM seller s JOIN userdata u ON s.userid = u.userid WHERE u.userid = $sellerID");
    $sellerdata = pg_fetch_array($query);
    $username = $sellerdata['username'];
    $fullname = $sellerdata['nama'];
    $phonenumber = $sellerdata['notelp'];
    $aboutme = $sellerdata['deskripsiseller'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Edit Seller Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=%3F%3F%3F%3F%3F%3A400"/>
    <link rel="stylesheet" href="./styles/profil-edit-seller.css"/>
</head>
<body>
<div class="profil-edit-seller-LpR">
  <div class="header-GCH">
    <a href="sellerdashboard.php" class="home-BKF">Home</a>
    <a href="sellerdashboard.php" class="products-HdB">Products</a>
    <a href="index.php" class="preloved-D13">Preloved</a>
    <a href="profileseller.php" class="auto-group-ggxr-LbT">Back to Profile</a>
  </div>
  <div class="auto-group-gjfj-yuK">
    <img class="ellipse-1-Xvq" src="./assets/ellipse-1.png"/>
    <div class="auto-group-tscq-TZb">
      <div class="auto-group-pzuf-bvh">
        <img class="ellipse-4-xWM" src="./assets/ellipse-4-nVo.png"/>
        <div class="data-gx9">
          <div class="group-33-1jX">
            <img class="iconamoon-profile-fill-vLh" src="./assets/iconamoon-profile-fill-wxd.png"/>
          </div>
          <p class="my-profile-qyT">My Profile</p>
          
          <form action="proseseditseller.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="sellerid" value="<?php echo $sellerID; ?>"> 
            <p class="username-B1j">
                <label for="username">Username</label>
                <div class="input-style rectangle-3-VYD">
                    <input type="text" name="new_username" value="<?php echo $username; ?>"/>
                </div>
            </p>
            <p class="full-name-PtV">
                <label for="fullname">Fullname</label>
                <div class="input-style rectangle-6-ifs">
                    <input type="text" name="new_nama" value="<?php echo $fullname; ?>"/>
                </div>
            </p>
            <p class="phone-number-EPK">
                <label for="phonenumber">Phone Number</label>
                <div class="input-style rectangle-7-k6m">
                    <input type="text" name="new_notelp" value="<?php echo $phonenumber; ?>" />
                </div>
            </p>
            <p class="about-me-47T">
                <label for="aboutme">About Me</label>
                <div class="input-style rectangle-9-Bhs">
                    <input type="text" name="new_deskripsiseller" value="<?php echo $aboutme; ?>"/>
                </div>
            </p>
            <p>
                <input type="submit" value="Simpan" name="edit" class="setting-hw7"/>
            </p>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>