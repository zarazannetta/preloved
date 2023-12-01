<?php
include("config.php");
    session_start();

    if (isset($_SESSION['userid'])){
    $buyerID = $_SESSION['userid'];
    // query untuk mengambil data seller
    $query = pg_query($db, "SELECT * FROM buyer b JOIN userdata u ON b.userid = u.userid WHERE u.userid = $buyerID");
    $buyerdata = pg_fetch_array($query);
    $username = $buyerdata['username'];
    $fullname = $buyerdata['nama'];
    $phonenumber = $buyerdata['notelp'];
    $address = $buyerdata['alamat'];
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
    <link rel="stylesheet" href="./styles/profil-edit-buyer.css"/>
</head>
<body>
<div class="profil-edit-buyer-7uB">
    <div class="header-4Jd">
        <a href="buyerdashboard.php" class="home-yRb">Home</a>
        <a href="buyerdashboard.php" class="shop-toT">Shop</a>
        <a href="buyerdashboard.php" class="categories-czM">Categories</a>
        <a href="index.php" class="preloved-x2d">Preloved</a>
        <a href="profilebuyer.php" class="auto-group-ydvb-HKo">Back to Profile</a>
    </div>
    

    <div class="auto-group-v2bj-w9T">
    <img class="ellipse-1-UQH" src="./assets/ellipse-1-HD3.png"/>
    <div class="auto-group-ea7t-Qoj">
      <div class="auto-group-vl6d-LxH">
        <img class="ellipse-4-hH3" src="./assets/ellipse-4.png"/>
        <div class="data-E25">
          <div class="group-33-Lau">
            <img class="iconamoon-profile-fill-rp9" src="./assets/iconamoon-profile-fill.png"/>
          </div>
          <p class="my-profile-nC1">My Profile</p>

          <form action="proseseditbuyer.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="buyerid" value="<?php echo $buyerID; ?>"> 
            <p class="username-unR">
                <label for="username">Username</label>
                <div class="rectangle-3-dyK">
                <input type="text" name="new_username" value="<?php echo $username; ?>"/>
                </div>
            </p>
            <p class="full-name-YqP">
                <label for="fullname">Fullname</label>
                <div class="rectangle-6-GmP">
                <input type="text" name="new_nama" value="<?php echo $fullname; ?>"/>
                </div>
            </p>
            <p class="phone-number-BtM">
                <label for="phonenumber">Phone Number</label>
                <div class="rectangle-7-Kjf">
                <input type="text" name="new_notelp" value="<?php echo $phonenumber; ?>" />
                </div>
            </p>
            <p class="address-Erd">
                <label for="aboutme">Address</label>
                <div class="rectangle-9-Nhw">
                <input type="text" name="new_alamat" value="<?php echo $address; ?>"/>
                 </div>
            </p>
            <p >
                <input type="submit" value="Simpan" name="edit" class="setting-rWd"/>
            </p>    
            </form>
        </div>
      </div>
    </div>
  </div>

</div>
</body>
</html>