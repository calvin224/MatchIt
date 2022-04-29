<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location: LoginPage.php");
}

$insert_query = mysqli_query($conn,"SELECT * from hobbiestable JOIN availablehobbiestable ON hobbiestable.InterestID = availablehobbiestable.InterestID WHERE unique_id = {$_SESSION['unique_id']}");
$hobbies = array();
while($row2 = mysqli_fetch_assoc($insert_query)) {
    array_push($hobbies,$row2['Name']);
}
/*$rand = mt_rand(0,sizeof($hobbies)-1);
$recommendation = $hobbies[$rand] ;*/
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
                <img src="css/images/title.png">
                <img src="css/images/titlealt.png" class="hover">
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
                        <div>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="acting" name="acting" value="Acting">
                            <label for="acting">Acting</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="americanfootball" name="americanfootball" value="American Football">
                            <label for="americanfootball">American Football</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="animals" name="animals" value="Animals">
                            <label for="animals">Animals</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="archery" name="archery" value="Archery">
                            <label for="archery">Archery</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="art" name="art" value="Art">
                            <label for="art">Art</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="badminton" name="badminton" value="Badminton">
                            <label for="badminton">Badminton</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="baseball" name="baseball" value="Baseball">
                            <label for="baseball">Baseball</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="basketball" name="basketball" value="Basketball">
                            <label for="basketball">Basketball</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="boardgames" name="boardgames" value="Board Games">
                            <label for="boardgames">Board Games</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="boxing" name="boxing" value="Boxing">
                            <label for="boxing">Boxing</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="camogie" name="camogie" value="Camogie">
                            <label for="camogie">Camogie</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="camping" name="camping" value="Camping">
                            <label for="camping">Camping</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="carnivore" name="carnivore" value="Carnivore">
                            <label for="carnivore">Carnivore</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="cars" name="cars" value="Cars">
                            <label for="cars">Cars</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="catperson" name="catperson" value="Cat Person">
                            <label for="catperson">Cat Person</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="coffee" name="coffee" value="Coffee">
                            <label for="coffee">Coffee</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="comedy" name="comedy" value="Comedy">
                            <label for="comedy">Comedy</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="cooking" name="cooking" value="Cooking">
                            <label for="cooking">Cooking</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="cricket" name="cricket" value="Cricket">
                            <label for="cricket">Cricket</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="crypto" name="crypto" value="Crypto">
                            <label for="crypto">Crypto</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="cycling" name="cycling" value="Cycling">
                            <label for="cycling">Cycling</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="dancing" name="dancing" value="Dancing">
                            <label for="dancing">Dancing</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="disney" name="disney" value="Disney">
                            <label for="disney">Disney</label><br>
                        </div>
                        <div>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="dogperson" name="dogperson" value="Dog Person">
                            <label for="dogperson">Dog Person</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="farming" name="farming" value="Farming">
                            <label for="farming">Farming</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="fashion" name="fashion" value="Fashion">
                            <label for="fashion">Fashion</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="fishing" name="fishing" value="2Fishing7">
                            <label for="fishing">Fishing</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="food" name="food" value="Food">
                            <label for="food">Food</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="formula1" name="formula1" value="Formula 1">
                            <label for="formula1">Formula 1</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="gaelicfootball" name="gaelicfootball" value="Gaelic Football">
                            <label for=”gaelicfootball">Gaelic Football</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="gaming" name="gaming" value="Gaming">
                            <label for="gaming">Gaming</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="gardening" name="gardening" value="Gardening">
                            <label for="gardening">Gardening</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="golf" name="golf" value="Golf">
                            <label for="golf">Golf</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="gym" name="gym" value="Gym">
                            <label for="gym">Gym</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="handball" name="handball" value="Handball">
                            <label for="handball">Handball</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="hiking" name="hiking" value="Hiking">
                            <label for="hiking">Hiking</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="hockey" name="hockey" value="Hockey">
                            <label for="hockey">Hockey</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="hurling" name="hurling" value="Hurling">
                            <label for="hurling">Hurling</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="mma" name="mma" value="MMA">
                            <label for="mma">MMA</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="marvel" name="marvel" value="Marvel">
                            <label for="marvel">Marvel</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="movies" name="movies" value="Movies">
                            <label for="movies">Movies</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="music" name="music" value="Music">
                            <label for="music">Music</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="nfts" name="nfts" value="NFTs">
                            <label for="nfts">NFTs</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="netflix" name="netflix" value="Netflix">
                            <label for="netflix">Netflix</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="omnivore" name="omnivore" value="Omnivore">
                            <label for="omnivore">Omnivore</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="technology" name="technology" value="Outdoors">
                            <label for="outdoors">Outdoors</label><br>
                        </div>
                        <div>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="pescitarian" name="pescitarian" value="Pescitarian">
                            <label for="pescitarian">Pescitarian</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="photography" name="photography" value="Photography">
                            <label for="photography">Photography</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="reading" name="reading" value="Reading">
                            <label for="reading">Reading</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="rugby" name="rugby" value="Rugby">
                            <label for="rugby">Rugby</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="running" name="running" value="Running">
                            <label for="running">Running</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="sailing" name="sailing" value="Sailing">
                            <label for="sailing">Sailing</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="shopping" name="shopping" value="Shopping">
                            <label for="shopping">Shopping</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="singing" name="singing" value="Singing">
                            <label for="singing">Singing</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="soccer" name="soccer" value="Soccer">
                            <label for="soccer">Soccer</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="socialnetworking" name="socialnetworking" value="Social Networking">
                            <label for="socialnetworking">Social Networking</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="starwars" name="starwars" value="Star Wars">
                            <label for="starwars">Star Wars</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="surfing" name="surfing" value="Surfing">
                            <label for="surfing">Surfing</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="swimming" name="swimming" value="Swimming">
                            <label for="swimming">Swimming</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="tea" name="tea" value="Tea">
                            <label for="tea">Tea</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="technology" name="technology" value="Technology">
                            <label for="technology">Technology</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="tennis" name="tennis" value="Tennis">
                            <label for="tennis">Tennis</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="vegan" name="vegan" value="Vegan">
                            <label for="vegan">Vegan</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="vegetarian" name="vegetarian" value="Vegetarian">
                            <label for="vegetarian">Vegetarian</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="volunteering" name="volunteering" value="Volunteering">
                            <label for="volunteering">Volunteering</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="walking" name="walking" value="Walking">
                            <label for="walking">Walking</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="writing" name="writing" value="Writing">
                            <label for="writing">Writing</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="yoga" name="yoga" value="Yoga">
                            <label for="yoga">Yoga</label><br>
                            <input class="hobbiesinterestscheckbox" type="checkbox" id="zumba" name="zumba" value="Zumba">
                            <label for="zumba">Zumba</label><br>
                        </div>
                        <input type="checkbox" id="<?php echo $recommendation ?>" name="<?php echo $recommendation ?>" value="<?php echo $recommendation?>">
                        <label for="<?php echo $recommendation?>">Reccomend me users!</label><br>
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
            <a href="index.php"> <img src="css/images/logo.png" alt="Logo"> </a>
        </div>
    </footer>
</div>

<script src="JavaScript/FindUsersTable.js"></script>

</body>
</html>