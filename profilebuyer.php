<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Profile buyer</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=%3F%3F%3F%3F%3F%3A400"/>
    <link rel="stylesheet" href="./styles/profil-buyer.css"/>
</head>
<body>
<div class="profil-buyer-NTK">
    <div class="header-tAm">
    <a href="buyerdashboard.php" class="home-XzR">Home</a>
    <a href="buyerdashboard.php" class="shop-E89">Shop</a>
    <a href="buyerdashboard.php" class="categories-MTf">Categories</a>
    <a href="index.php" class="preloved-fDT">Preloved</a>
    <a href="login.php" class="auto-group-adgu-CDP">Sign Out</a>
  </div>
    
    

    <div class="auto-group-q9t5-2CR">
    <img class="ellipse-1-NXB" src="./assets/ellipse-1-qow.png"/>
    <div class="auto-group-3tam-i5F">
      <div class="auto-group-mqku-rBT">
        <img class="ellipse-4-oMb" src="./assets/ellipse-4-FSh.png"/>
        <div class="data-vx1">
          <div class="group-33-FUV">
            <img class="iconamoon-profile-fill-JLH" src="./assets/iconamoon-profile-fill-4Mw.png"/>
          </div>

          <?php
            include("config.php");
            session_start();
            $buyerID = $_SESSION['userid'];

            // query untuk mengambil data seller
            $query = "SELECT * FROM buyer b JOIN userdata u ON b.userid = u.userid WHERE u.userid = $buyerID";
            $result = pg_query($db,$query) or die('Query failed: ' . pg_last_error());


            echo "<p class='my-profile-RQu'>My Profile</p>\n";
            // display data
            while($buyerdata = pg_fetch_array($result)){
            echo "<div class='buyerdata-box'>\n";
            //data buyer
            echo "<p class='username-YVX'>Username</p>\n";
            echo "<input type='text' class='rectangle-3-rFK font-echo-data' value='{$buyerdata['username']}'/>\n";
            echo "<p class='full-name-MC5'>Full Name</p>\n";
            echo "<input type='text' class='rectangle-6-585 font-echo-data' value='{$buyerdata['nama']}'/>\n";
            echo "<p class='phone-number-nYH'>Phone Number</p>\n";
            echo "<input type='text' class='rectangle-7-KHK font-echo-data' value='{$buyerdata['notelp']}'/>\n";
            echo "<p class='address-oyB'>Address</p>\n";
            echo "<input type='text' class='rectangle-9-w3o font-echo-data' value='{$buyerdata['alamat']}'/>\n";
            echo "</div>\n";
            }
            // free resultset
            pg_free_result($result);
            ?>

        
        </div>
        <div class="setting-T29">
        <img class="vector-kX3" src="./assets/vector-Sx1.png"/>
        <a href="formeditbuyer.php"><p class="account-setting-g9o">Account Setting</p></a>
      </div>
    </div>
  </div>
</div>
</body>
</html>

