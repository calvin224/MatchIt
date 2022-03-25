<?php
session_start();
?>

<?php include_once "header.php"; ?>
<body>
<link rel="stylesheet" href="css/SignUpPage.css">
<div class="wrapper">
    <section class="form signup">
        <header>Match-It!</header>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="name-details">
                <div class="field input">
                    <label>First Name</label>
                    <input type="text" name="Age" placeholder="Enter your Age!" required>
                </div>
                <div class="field input">
                    <label>Last Name</label>
                    <input type="text" name="Gender" placeholder="Enter your Gender!" required>
                </div>
            </div>
            <div class="field input">
                <label>Email Address</label>
                <input type="text" name="Seeking" placeholder="Who do you seek?" required>
            </div>
            <div class="field input">
                <label>Password</label>
                <input type="text" name="Description" placeholder="Enter your Description!" required>
                <i class="fas fa-eye"></i>
            </div>
            <div class="field input">
                <label>Password</label>
                <input type="text" name="Location" placeholder="Enter your Location!" required>
                <i class="fas fa-eye"></i>
            </div>
            <div class="field button">
                <input type="submit" name="submit" value="Update your Profile!">
            </div>
        </form>
    </section>
</div>
<script src="JavaScript/EditProfile.js"></script>

</body>
</html>