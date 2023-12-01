<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=%3F%3F%3F%3F%3F%3A400"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="./styles/register.css"/>
</head>
<body>
    <div class="register-s7X">
        <div class="auto-group-wz7b-Q7T">
            <div class="hello-XC5">
                <p class="hello-G9f">Hello!</p>
                <p class="please-provide-the-information-to-register-your-account-ypm">
                    Please provide the
                    <br/>
                    information to register
                    <br/>
                    your account
                </p>
                <div class="already-have-an-account-login-gjB">Already have an account? Login</div>
                <a href="login.php"><div class="button-login-CBj">Login</div></a>
            </div>
            <img class="ellipse-1-1ey" src="./assets/ellipse-1-cY1.png"/>
        </div>
        <div class="auto-group-zuo3-XtD">
            <form action="prosesregister.php" method="POST">
            <div class="data-Gqo">
                <p class="create-account-b7P">Create Account</p>
                <p class="username-hAR">Username</p>
                <div class="rectangle-3-ojF">
                    <input type="text" name="username" />
                </div>
                <p class="full-name-7E9">Full Name</p>
                <div class="rectangle-6-qfw">
                    <input type="text" name="fullname" />
                </div>
                <p class="password-xEm">Password</p>
                <div class="rectangle-7-ssX">
                    <input type="password" name="password" placeholder="Enter New Password" />
                </div>
                <p class="phone-number-b2q">Phone Number</p>
                <div class="rectangle-9-7ms">
                    <input type="text" name="phonenumber" />
                </div>
            </div>
            <p >
                <input type="submit" value="Sign Up" name="signup" class="sign-up-RXf"/>
            </p>
            </form>
        </div>
    </div>
</body>
</html>
