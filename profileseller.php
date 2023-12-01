<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Profile seller</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=%3F%3F%3F%3F%3F%3A400"/>
  <link rel="stylesheet" href="./styles/profil-seller.css"/>
</head>
<body>
<div class="profil-seller-j7P">
      <div class="header-GND">
        <a href="sellerdashboard.php" class="home-ath">Home</a>
        <a href="sellerdashboard.php" class="products-6s3">Products</a>
        <a href="index.php" class="preloved-pHF">Preloved</a>
        <a href="login.php" class="auto-group-6jsx-9KX">Sign Out</a>
      </div>
      <div class="auto-group-vver-oQ5">
        <img class="ellipse-1-xGy" src="./assets/ellipse-1-9L5.png"/>
        <div class="auto-group-2s3s-HKF">
          <div class="auto-group-xpuu-DCu">
            <img class="ellipse-4-ZXf" src="./assets/ellipse-4-Rvh.png"/>
            <div class="data-t49">
              <div class="group-33-oS1">
                <img class="iconamoon-profile-fill-vWd" src="./assets/iconamoon-profile-fill-FkM.png"/>
              </div>

              <?php
                include("config.php");
                session_start();
                $sellerID = $_SESSION['userid'];

                // query untuk mengambil data seller
                $query = "SELECT * FROM seller s JOIN userdata u ON s.userid = u.userid WHERE u.userid = $sellerID";
                $result = pg_query($db,$query) or die('Query failed: ' . pg_last_error());

                // display data
                echo "<p class='my-profile-EXK'>My Profile</p>\n";

                while($sellerdata = pg_fetch_array($result)){
                    echo "<div class='sellerdata-box'>\n";
                    // seller data
                    echo "<p class='username-xTK'>Username</p>\n";
                    echo "<input type='text' class='rectangle-3-HEh font-echo-data' value='{$sellerdata['username']}'/>\n";
                    echo "<p class='full-name-nSM'>Full Name</p>\n";
                    echo "<input type='text' class='rectangle-6-W7T font-echo-data' value='{$sellerdata['nama']}'/>\n";
                    echo "<p class='phone-number-QyX'>Phone Number</p>\n";
                    echo "<input type='text' class='rectangle-7-LcH font-echo-data' value='{$sellerdata['notelp']}'/>\n";
                    echo "<p class='about-me-FjF'>About Me</p>\n";
                    echo "<input type='text' class='rectangle-9-zB3 font-echo-data' value='{$sellerdata['deskripsiseller']}'/>\n";
                    echo "</div>\n";
                }
                // free resultset
                pg_free_result($result);
                ?>

            </div>
            <div class="setting-7mT">
            <img class="vector-ELH" src="./assets/vector-UHw.png"/>
            <a href="formeditseller.php"><p class="account-setting-MA1">Account Setting</p></a>
            </div>
        </div>
      </div>
    </div>
</body>
</html>

