<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content = "width-device-width, initial-scale=1.0">
    <title>Match-It!</title>
    <link rel="stylesheet" href="SignUpPage.css">
    <script src="https://kit.fontawesome.com/b17df002ae.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <section class="signup form">
            <header>match-it!</header>
            <form action="#">
                <div class="error-messsage">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="firstname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lastname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Email Address" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter a password" required>
                    <i class="fa-solid fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue">
                </div>
            </form>
            <div class="link">Already a member? <a href="LoginPage.php">Login now</a></div>
        </section>
    </div>

    <script src="JavaScript/password-show-hide.js"></script>
    <script src="JavaScript/signup.js"></script>
    
</body>
</html>
