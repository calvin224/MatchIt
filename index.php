<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content = "width-device-width, initial-scale=1.0">
    <title>Match-It!</title>
    <link rel="stylesheet" href="css/Welcome.css">
</head>
<body>
<div class = "header">
    <nav>
        <div class="logo">
            <img src="css/images/logoplain.png">
            <span>match-it!</span>
        </div>
        <ul>

            <li><a href="LoginPage.php">Login</a></li>
            <li><a href="SignUpPage.php">Sign Up</a></li>
        </ul>
    </nav>

    <!-- Image Gallery !-->
    <div class="content">
        <h2 class="stand">Don't just wing it...</h2>
        <h1 class="slide-left">match-it!</h1>
        <div class="links slide-left">
            <a href="#aboutsec" class="btn">Learn More</a>
            <a href="SignUpPage.php" class="btn">Sign Up</a>
        </div>
    </div>

    <div class="successstories">
        <h1>Successful Matches:</h1>
    </div>

    <style>
        div.gallery {
            margin-left: 4%;
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 25px;
            float: left;
            width: 20%;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            border-top-left-radius:  25px;
            border-top-right-radius: 25px;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
            color: white;
        }
    </style>

    <div class="gallery">
        <a target="_blank">
            <img src="css/images/Couple1.jpg" alt="Joe and Anna" width="600" height="400">
        </a>
        <div class="desc"> Anna (23) and Joe (25)</div>
    </div>

    <div class="gallery">
        <a target="_blank">
            <img src="css/images/Couple2.jpg" alt="Leah and Kate" width="600" height="400">
        </a>
        <div class="desc">Leah (27) and Kate (31)</div>
    </div>

    <div class="gallery">
        <a target="_blank">
            <img src="css/images/Couple3.jpg" alt="Jake and Meabh" width="600" height="400">
        </a>
        <div class="desc">Jake (20) and Méabh (21)</div>
    </div>

    <div class="gallery">
        <a target="_blank">
            <img src="css/images/Couple4.jpg" alt="Martin and Olivia" width="600" height="400">
        </a>
        <div class="desc">Martin (45) and Olivia (39)</div>
    </div>
<!-- Image Gallery End !-->

<!-- About !-->
    <div class="about">

        <h1 id="aboutsec">What is 'match-it!' ?</h1>
        <p>'match-it!' is a brand new data-driven coupling and online-dating service. We use your past and current dating experiences
        to provide you with curated suggestions of other users. By doing this, we hope that we can help you learn from your mistakes and fine 'the one' !</p>
        <br>
        <br>
        <p>Traits:</p>
        <br>
        <p>match-it uses a 'traits' system where the way you use match it will be reflected to other users. Have several people viewed
            your profile recently ? Looks like you're in hot demand and this will be reflected by a &#128293 on your profile !</p>
        <br>
        <br>
        <p>Don't be 'Frosty'!</p>
        <br>
        <p>Have you ever been on a dating app, matched with someone who you'd only love to get deep in conversation with, you send that greeting message
        and... Nothing, no reply... Why !?! Well, here at match-it! we're hoping to rectify this; when you match with a user, you must send
        a message within 24hrs, after this, your match must reply within 24hrs. If you don't message your match you'll be marked with the 'Frosty' trait
            and a &#10052 will appear beside your profile to let everyone else know you didn't communicate with a match within the last 24hrs.
        Maybe they'll think twice before deciding to like your profile because of this...</p>
        <br>
        <p>You should use these initial messages to 'break-the-ice!' because after this period you're free to communicate as frequently (or infrequently)
            as you both desire.</p>
    </div>
<!-- About End !-->

    <!-- Footer !-->
    <div class="footer">
        <img src="css/images/logo.png" alt="Logo">
        <p>© 2022 "match-it" All Rights Reserved.</p>
    </div>
    <!-- Footer End !-->

</div>
</body>
</html>