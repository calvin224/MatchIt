<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location: LoginPage.php");
}
?>
<?php include_once "header.php"; ?>
<html>
<head>
    <link rel="stylesheet" href="css/Template.css">
    <script src="https://kit.fontawesome.com/b17df002ae.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
    <header>
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
        }
        ?>
        <div class="header metrics button">
            <a href="Metrics.php" title="User Metrics"> <i class="fa-solid fa-rocket"></i> </a>
        </div>
        <div class="header chat button">
            <a href="users.php" title="Chat"> <i class="fa-solid fa-comments"></i> </a>
        </div>
        <div class="header search button">
            <a href="Find.php" title="Find Someone"<i class="fa-solid fa-magnifying-glass"></i> </a>
        </div>
        <div class="header logo">
            <a href="Welcome.php">
                <img src="css/images/title.png">
                <img src="css/images/titlealt.png" class="hover">
            </a>
        </div>
        <div class="header notifications">
            <a href="Notifications.php" title="Notifications"> <i class="fa-solid fa-bell"></i> </a>
        </div>
        <div class="header profilepicture">
            <a href="Profile.php"> <img src="php/images/<?php echo $row['img']; ?>" alt=""> </a>
        </div>
    </header>
    <hr>
    <div class="profile columns">
        <div class="profile col1">
            <div class="profile picture">
                <img src="php/images/<?php echo $row['img']; ?>" alt="">
            </div>
            <div class="profile attributes">
                <img src="css/images/freshhatch.png" title="New Hatch">
                <img src="css/images/frosty.png" title="Frosty!">
                <img src="css/images/inshell.png" title="In Your Shell">
                <img src="css/images/onfire.png" title="On Fire!">
            </div>
            <div class="profile details">
                <p>Jack</p>
                <p>20</p>
                <p>Limerick</p>
            </div>
            <div class="profile about">
                <p>Fusce mattis pulvinar tortor a vehicula. Mauris turpis tellus, porttitor sit amet egestas id, congue et dui. Phasellus feugiat, risus quis tincidunt auctor, augue est mattis erat, id volutpat lectus nunc in leo. Aliquam non efficitur mi. Etiam sagittis, turpis at mollis bibendum, eros tellus consectetur felis, eu convallis felis lacus sed nisi. Cras aliquet feugiat leo vel mollis. Quisque vitae libero vehicula, rhoncus erat vel, auctor purus. Nam venenatis laoreet pharetra. Quisque mauris mauris, condimentum ac nunc nec, ultrices semper massaFusce mattis pulvinar tortor a vehicula. Mauris turpis tellus, porttitor sit amet egestas id, congue et dui. Phasellus feugiat, risus quis tincidunt auctor, augue est mattis erat, id volutpat lectus nunc in leo. Aliquam non efficitur mi. Etiam sagittis, turpis at mollis bibendum, eros tellus consectetur felis, eu convallis felis lacus sed nisi. Cras aliquet feugiat leo vel mollis. Quisque vitae libero vehicula, rhoncus erat vel, auctor purus. Nam venenatis laoreet pharetra. Quisque mauris mauris, condimentum ac nunc nec, ultrices semper massa.</p>
            </div>
        </div>
        <div class="profile col2">
            <div class="bioheader">
                <p>User Bio</p>
            </div>
            <div class="bio">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tincidunt vehicula dictum. In hac habitasse platea dictumst. Vestibulum aliquet imperdiet velit, et euismod nunc blandit sed. Curabitur hendrerit elit in tincidunt semper. Nulla semper ex tellus, sit amet dictum nisi ultrices ac. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin consectetur, lacus in suscipit pharetra, nisi leo ultricies diam, quis suscipit dolor sem vitae ipsum. Pellentesque faucibus euismod condimentum.</p>
            </div>
        </div>
        <div class="profile col3">
            <div class="gallery">
                <img src="css/images/1646743105discordpic.png">
                <img src="css/images/1646743105discordpic.png">
                <img src="css/images/1646743105discordpic.png">
            </div>
        </div>
    </div>
    <hr>
    <footer>
        <div class="footer logo">
            <a href="Welcome.php"> <img src="css/images/logo.png" alt="Logo"> </a>
        </div>
    </footer>
</div>

<script src="javascript/users.js"></script>

</body>
</html>