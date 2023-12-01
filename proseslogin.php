<?php
include("config.php");
//mulai session
session_start();
// cek form sudah disubmit
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

   // cek user sebagai seller atau buyer
if (isset($_POST['seller_login']) || isset($_POST['buyer_login'])) {
    $query = "SELECT userid FROM UserData WHERE Username = '$username' AND Password = '$password'";
    $result = pg_query($db, $query) or die('Query failed: ' . pg_last_error());

    if (pg_num_rows($result) == 1) {
        $userData = pg_fetch_assoc($result);
        $userID = $userData['userid'];

        $_SESSION['userid'] = $userData['userid'];

        //cek user sebagai seller
        if (isset($_POST['seller_login'])) {
            $userID = (int)$userID;
            $sellerQuery = "SELECT * FROM Seller WHERE userid = '$userID'";
            $sellerResult = pg_query($db, $sellerQuery) or die('Seller query failed: ' . pg_last_error());

            if (pg_num_rows($sellerResult) == 1) {
                // redirect ke seller dashboard
                header("Location: sellerdashboard.php");
                exit();
            } else {
                echo "User is not a seller";
            }
        //cek user sebagai buyer
        } elseif (isset($_POST['buyer_login'])) {
            $userID = (int)$userID;
            $buyerQuery = "SELECT * FROM Buyer WHERE userid = '$userID'";
            $buyerResult = pg_query($db, $buyerQuery) or die('Buyer query failed: ' . pg_last_error());

            if (pg_num_rows($buyerResult) == 1) {
                // redirect ke buyer dashboard
                header("Location: buyerdashboard.php");
                exit();
            } else {
                echo "User is not a buyer";
            }
        }
    } else {
        echo "Username or Password Invalid";
    }
}
}

?>
<?php if(isset($loginError)) { ?>
    <p style="color: red;"><?php echo $loginError; ?></p>
<?php } ?>