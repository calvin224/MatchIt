<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content = "width-device-width, initial-scale=1.0">
    <title>Match-it!</title>
    <link rel="stylesheet" href="LoginPage.css">
    <script src="https://kit.fontawesome.com/b17df002ae.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <section class="login form">
            <header>match-it!</header>
            <form action="LogIn.php" method="post">
                <div class="error-messsage">This is an error message!</div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name ="Email" placeholder="Email  Address">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name ="password" placeholder="Enter your password">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue">
                </div>
            </form>
            <div class="link">Not a member? <a href="SignUpPage.php">Sign up now</a></div>
        </section>
    </div>

    <script src="JavaScript/password-show-hide.js"></script>

</body>
</html>
