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
    <link rel="stylesheet" href="css/FindTemplate.css">
    <link rel="stylesheet" href="css/teststyle.css">
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
        <div class="header find button">
            <a href="Find.php" title="Find Someone"<i class="fa-solid fa-magnifying-glass"></i> </a>
        </div>
        <div class="header logo">
            <a href="index.php">
                <img src="https://github.com/calvin224/MatchIt/blob/pagelinkingtest/css/images/title.png?raw=true">
                <img src="https://github.com/calvin224/MatchIt/blob/pagelinkingtest/css/images/titlealt.png?raw=true" class="hover">
            </a>
        </div>
        <div class="search">
            <button id="searchBtn"><i class="fas fa-search"></i></button>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <section class="form login">
                    <form action="#" method="POST">
                        <input type="checkbox" id="cycling" name="cycling" value="Cycling">
                        <label for="cycling">Cycling</label><br>
                        <input type="checkbox" id="running" name="running" value="Running">
                        <label for="running">Running</label><br>
                        <input type="checkbox" id="cooking" name="cooking" value="Cooking">
                        <label for="cooking">Cooking</label><br>
                        <input type="checkbox" id="soccer" name="soccer" value="Soccer">
                        <label for="cooking">Soccer</label><br>
                        <input type="checkbox" id="rugby" name="rugby" value="Rugby">
                        <label for="cycling">Rugby</label><br>
                        <input type="checkbox" id="tennis" name="tennis" value="Tennis">
                        <label for="running">Tennis</label><br>
                        <input type="checkbox" id="walking" name="walking" value="Walking">
                        <label for="cooking">Walking</label><br>
                        <input type="checkbox" id="art" name="art" value="Art">
                        <label for="cycling">Art</label><br>
                        <input type="checkbox" id="gaming" name="gaming" value="Gaming">
                        <label for="running">Gaming</label><br>
                        <div class="field button">
                            <input type="submit" name="submit" value="Continue to Match!">
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <div class="header notifications">
            <a href="Notifications.php" title="Notifications"> <i class="fa-solid fa-bell"></i> </a>
        </div>
        <div class="header profilepicture">
            <a href="Profile.php"> <img src="php/images/<?php echo $row['img']; ?>" alt=""> </a>
        </div>
    </header>
    <hr>
    <div class="find-list">

    </div>
    <hr>
    <footer>
        <div class="footer logo">
            <a href="Welcome.php"> <img src="https://github.com/calvin224/MatchIt/blob/pagelinkingtest/css/images/logo.png?raw=true" alt="Logo"> </a>
        </div>
    </footer>
</div>

<script src="JavaScript/FindUsersTable.js"></script>

</body>
</html>