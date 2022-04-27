<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location: LoginPage.php");
}
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
        }
$completed =$row['Completed'];
/*if($completed != 1 ){
    header("location: EditProfile.php");
}*/
$sql2 = mysqli_query($conn, "SELECT * FROM profiletable WHERE unique_id = {$_SESSION['unique_id']}");
if(mysqli_num_rows($sql2) > 0){
    $row2 = mysqli_fetch_assoc($sql2);
}
$sql3 = mysqli_query($conn,"SELECT * FROM hobbiestable JOIN availablehobbiestable ON hobbiestable.InterestID = availablehobbiestable.InterestID WHERE unique_id ={$_SESSION['unique_id']}" );
if(mysqli_num_rows($sql3) > 0){
    $row3 = mysqli_fetch_assoc($sql3);
}
$sql4 = mysqli_query($conn,"SELECT * FROM gallerypicturestable WHERE unique_id ={$_SESSION['unique_id']}" );
if(mysqli_num_rows($sql4) > 0){
    $row4 = mysqli_fetch_assoc($sql4);
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
        $sql2 = mysqli_query($conn, "SELECT * FROM profiletable WHERE unique_id = {$_SESSION['unique_id']}");
        if(mysqli_num_rows($sql2) > 0){
            $row2 = mysqli_fetch_assoc($sql2);
        }
        if ($row2['Age'] == 0){
            $age = "Age Unset";
        } else {
            $age = $row2['Age'];
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
        <div class="header notifications">
            <a href="Notifications.php" title="Notifications"> <i class="fa-solid fa-bell"></i> </a>
        </div>
        <div class="header profilepicture">
            <a href="EditProfile.php"> <img src="php/images/<?php echo
                $row['img'];
            ?>" alt=""> </a>
        </div>
    </header>
    <body>
    <div class="topcolumn" style="background-image: linear-gradient(to bottom, white 20%, <?php echo $row2['BackgroundColour']; ?>);">
        <div class="profile-picture">
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        </div>
        <!-- The Modal -->
        <div id="modalBackgroundColour" class="modalBackgroundColour">

            <!-- Modal content -->
            <div class="modal-content">
                <section class="backgroundcolourpickerform">
                    <form action="#" method="POST">
                        <div class="field button">
                            <input type="submit" name="submit" value="Update!">
                        </div>
                        <br>
                        <div class="BackgroundColourPicker">
                            <input class="backgroundcolourpicker" type="color" id="colorpicker" value="#0000ff">
                            <label for="colorpicker">Choose your background colour!</label>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <div class="modalBackgroundColourEdit">
            <button id="modalBackgroundColourEditBtn"><i class="fa-solid fa-pen-to-square"></i></button>
        </div>
    </div>
    <div class="row">
        <div class="column" style="background-color: ghostwhite;">

            <!-- The Modal -->
            <div id="modalCharacteristics" class="modalCharacteristics">

                <!-- Modal content -->
                <div class="modal-content">
                    <section class="characteristicsform">
                        <form action="#" method="POST">
                            <div class="CharacteristicsList">
                                <div class="HairColour">
                                    <p><b>Hair Colour</b></p>
                                    <hr>
                                    <input class="characteristicscheck" type="radio" id="brownhair" name="HairColour" value="1" required>
                                    <label for="brownhair">Brown Hair</label><br>
                                    <input class="characteristicscheck" type="radio" id="blondehair" name="HairColour" value="2">
                                    <label for="blondehair">Blonde Hair</label><br>
                                    <input class="characteristicscheck" type="radio" id="blackhair" name="HairColour" value="3">
                                    <label for="blackhair">Black Hair</label><br>
                                    <input class="characteristicscheck" type="radio" id="redhair" name="HairColour" value="4">
                                    <label for="redhair">Red Hair</label><br>
                                    <input class="characteristicscheck" type="radio" id="dyedhair" name="HairColour" value="5">
                                    <label for="dyedhair">Dyed Hair</label><br>
                                </div>
                                <div class="HairType">
                                    <p><b>Hair Type</b></p>
                                    <hr>
                                    <input class="characteristicscheck" type="radio" id="shorthair" name="HairType" value="6" required>
                                    <label for="shorthair">Short Hair</label><br>
                                    <input class="characteristicscheck" type="radio" id="mediumlengthhair" name="HairType" value="7">
                                    <label for="mediumlengthhair">Medium Length Hair</label><br>
                                    <input class="characteristicscheck" type="radio" id="longhair" name="HairType" value="8">
                                    <label for="longhair">Long Hair</label><br>
                                    <input class="characteristicscheck" type="radio" id="curlyhair" name="HairType" value="9">
                                    <label for="curlyhair">Curly Hair</label><br>
                                    <input class="characteristicscheck" type="radio" id="straighthair" name="HairType" value="10">
                                    <label for="straighthair">Straight Hair</label><br>
                                    <input class="characteristicscheck" type="radio" id="wavyhair" name="HairType" value="11">
                                    <label for="wavyhair">Wavy Hair</label><br>
                                </div>
                                <div class="EyeColour">
                                    <p><b>Eye Colour</b></p>
                                    <hr>
                                    <input class="characteristicscheck" type="radio" id="blueeyes" name="EyeColour" value="12" required>
                                    <label for="blueeyes">Blue Eyes</label><br>
                                    <input class="characteristicscheck" type="radio" id="browneyes" name="EyeColour" value="13">
                                    <label for="browneyes">Brown Eyes</label><br>
                                    <input class="characteristicscheck" type="radio" id="blackeyes" name="EyeColour" value="14">
                                    <label for="blackeyes">Black Eyes</label><br>
                                    <input class="characteristicscheck" type="radio" id="hazeleyes" name="EyeColour" value="15">
                                    <label for="hazeleyes">Hazel Eyes</label><br>
                                    <input class="characteristicscheck" type="radio" id="greyeyes" name="EyeColour" value="16">
                                    <label for="greyeyes">Grey Eyes</label><br>
                                    <input class="characteristicscheck" type="radio" id="greeneyes" name="EyeColour" value="17">
                                    <label for="greeneyes">Green Eyes</label><br>
                                    <input class="characteristicscheck" type="radio" id="ambereyes" name="EyeColour" value="18">
                                    <label for="ambereyes">Amber Eyes</label><br>
                                    <input class="characteristicscheck" type="radio" id="violeteyes" name="EyeColour" value="19">
                                    <label for="violeteyes">Violet Eyes</label><br>
                                </div>
                                <div class="Height">
                                    <p><b>Height</b></p>
                                    <hr>
                                    <input class="characteristicscheck" type="radio" id="short" name="Height" value="20" required>
                                    <label for="short">Short</label><br>
                                    <input class="characteristicscheck" type="radio" id="average" name="Height" value="21">
                                    <label for="average">Average</label><br>
                                    <input class="characteristicscheck" type="radio" id="tall" name="Height" value="22">
                                    <label for="tall">Tall</label><br>
                                </div>
                                <div class="BodyType">
                                    <p><b>Body Type</b></p>
                                    <hr>
                                    <input class="characteristicscheck" type="radio" id="thin" name="BodyType" value="23" required>
                                    <label for="thin">Thin</label><br>
                                    <input class="characteristicscheck" type="radio" id="average" name="BodyType" value="24">
                                    <label for="average">Average</label><br>
                                    <input class="characteristicscheck" type="radio" id="fullfigured" name="BodyType" value="25">
                                    <label for="fullfigured">Full Figured</label><br>
                                    <input class="characteristicscheck" type="radio" id="dadbod" name="BodyType" value="26">
                                    <label for="dadbod">Dad Bod</label><br>
                                </div>
                                <div class="Other">
                                    <p><b>Other</b></p>
                                    <hr>
                                    <input class="characteristicscheck" type="checkbox" id="freckles" name="Other" value="27">
                                    <label for="freckles">Freckles</label><br>
                                    <input class="characteristicscheck" type="checkbox" id="facialhair" name="Other" value="28">
                                    <label for="facialhair">Facial Hair</label><br>
                                    <input class="characteristicscheck" type="checkbox" id="piercings" name="Other" value="29">
                                    <label for="piercings">Piercings</label><br>
                                    <input class="characteristicscheck" type="checkbox" id="tattoos" name="Other" value="30">
                                    <label for="tattoos">Tattoos</label><br>
                                    <input class="characteristicscheck" type="checkbox" id="introvert" name="Other" value="31">
                                    <label for="introvert">Introvert</label><br>
                                    <input class="characteristicscheck" type="checkbox" id="extrovert" name="Other" value="32">
                                    <label for="extrovert">Extrovert</label><br>
                                </div>
                            </div>
                            <div class="field button">
                                <input type="submit" name="submit" value="Update!">
                            </div>
                        </form>
                    </section>
                </div>

            </div>
            <div class="Characteristics">
                <!-- Trigger/Open The Modal -->
                <div class="modalCharacteristicsEdit">
                    <h2>Characteristics</h2>
                    <button id="modalCharacteristicsEditBtn"><i class="fa-solid fa-pen-to-square"></i></button>
                </div>

                <div class="characteristicscontainer">
                </div>
            </div>
            <!-- The Modal -->
            <div id="modalHobbiesInterests" class="modalHobbiesInterests">

                <!-- Modal content -->
                <div class="modal-content">
                    <section class="hobbiesinterestsform">
                        <form action="#" method="POST">
                            <div class="HobbiesInterestsList">
                                <div>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="acting" name="acting" value="1">
                                <label for="acting">Acting</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="americanfootball" name="americanfootball" value="2">
                                <label for="americanfootball">American Football</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="animals" name="animals" value="3">
                                <label for="animals">Animals</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="archery" name="archery" value="4">
                                <label for="archery">Archery</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="art" name="art" value="5">
                                <label for="art">Art</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="badminton" name="badminton" value="6">
                                <label for="badminton">Badminton</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="baseball" name="baseball" value="7">
                                <label for="baseball">Baseball</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="basketball" name="basketball" value="8">
                                <label for="basketball">Basketball</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="boardgames" name="boardgames" value="9">
                                <label for="boardgames">Board Games</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="boxing" name="boxing" value="10">
                                <label for="boxing">Boxing</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="camogie" name="camogie" value="11">
                                <label for="camogie">Camogie</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="camping" name="camping" value="12">
                                <label for="camping">Camping</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="carnivore" name="carnivore" value="13">
                                <label for="carnivore">Carnivore</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="cars" name="cars" value="14">
                                <label for="cars">Cars</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="catperson" name="catperson" value="15">
                                <label for="catperson">Cat Person</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="coffee" name="coffee" value="16">
                                <label for="coffee">Coffee</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="comedy" name="comedy" value="17">
                                <label for="comedy">Comedy</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="cooking" name="cooking" value="18">
                                <label for="cooking">Cooking</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="cricket" name="cricket" value="19">
                                <label for="cricket">Cricket</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="crypto" name="crypto" value="20">
                                <label for="crypto">Crypto</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="cycling" name="cycling" value="21">
                                <label for="cycling">Cycling</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="dancing" name="dancing" value="22">
                                <label for="dancing">Dancing</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="disney" name="disney" value="23">
                                <label for="disney">Disney</label><br>
                                </div>
                                <div>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="dogperson" name="dogperson" value="24">
                                <label for="dogperson">Dog Person</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="farming" name="farming" value="25">
                                <label for="farming">Farming</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="fashion" name="fashion" value="26">
                                <label for="fashion">Fashion</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="fishing" name="fishing" value="27">
                                <label for="fishing">Fishing</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="food" name="food" value="28">
                                <label for="food">Food</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="formula1" name="formula1" value="29">
                                <label for="formula1">Formula 1</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="gaelicfootball" name="gaelicfootball" value="30">
                                <label for=”gaelicfootball">Gaelic Football</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="gaming" name="gaming" value="31">
                                <label for="gaming">Gaming</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="gardening" name="gardening" value="32">
                                <label for="gardening">Gardening</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="golf" name="golf" value="33">
                                <label for="golf">Golf</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="gym" name="gym" value="34">
                                <label for="gym">Gym</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="handball" name="handball" value="35">
                                <label for="handball">Handball</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="hiking" name="hiking" value="36">
                                <label for="hiking">Hiking</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="hockey" name="hockey" value="37">
                                <label for="hockey">Hockey</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="hurling" name="hurling" value="38">
                                <label for="hurling">Hurling</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="mma" name="mma" value="39">
                                <label for="mma">MMA</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="marvel" name="marvel" value="40">
                                <label for="marvel">Marvel</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="movies" name="movies" value="41">
                                <label for="movies">Movies</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="music" name="music" value="42">
                                <label for="music">Music</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="nfts" name="nfts" value="43">
                                <label for="nfts">NFTs</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="netflix" name="netflix" value="44">
                                <label for="netflix">Netflix</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="omnivore" name="omnivore" value="45">
                                <label for="omnivore">Omnivore</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="technology" name="technology" value="46">
                                <label for="outdoors">Outdoors</label><br>
                                </div>
                                <div>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="pescitarian" name="pescitarian" value="47">
                                <label for="pescitarian">Pescitarian</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="photography" name="photography" value="48">
                                <label for="photography">Photography</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="reading" name="reading" value="49">
                                <label for="reading">Reading</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="rugby" name="rugby" value="50">
                                <label for="rugby">Rugby</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="running" name="running" value="51">
                                <label for="running">Running</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="sailing" name="sailing" value="52">
                                <label for="sailing">Sailing</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="shopping" name="shopping" value="53">
                                <label for="shopping">Shopping</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="singing" name="singing" value="54">
                                <label for="singing">Singing</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="soccer" name="soccer" value="55">
                                <label for="soccer">Soccer</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="socialnetworking" name="socialnetworking" value="56">
                                <label for="socialnetworking">Social Networking</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="starwars" name="starwars" value="57">
                                <label for="starwars">Star Wars</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="surfing" name="surfing" value="58">
                                <label for="surfing">Surfing</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="swimming" name="swimming" value="59">
                                <label for="swimming">Swimming</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="tea" name="tea" value="60">
                                <label for="tea">Tea</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="technology" name="technology" value="61">
                                <label for="technology">Technology</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="tennis" name="tennis" value="62">
                                <label for="tennis">Tennis</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="vegan" name="vegan" value="63">
                                <label for="vegan">Vegan</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="vegetarian" name="vegetarian" value="64">
                                <label for="vegetarian">Vegetarian</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="volunteering" name="volunteering" value="65">
                                <label for="volunteering">Volunteering</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="walking" name="walking" value="66">
                                <label for="walking">Walking</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="writing" name="writing" value="67">
                                <label for="writing">Writing</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="yoga" name="yoga" value="68">
                                <label for="yoga">Yoga</label><br>
                                <input class="hobbiesinterestscheckbox" type="checkbox" id="zumba" name="zumba" value="69">
                                <label for="zumba">Zumba</label><br>
                                </div>
                            </div>
                            <div class="field button">
                                <input type="submit" name="submit" value="Update!">
                            </div>
                        </form>
                    </section>
                </div>

            </div>
            <div class="HobbiesInterests">
                <div class="modalHobbiesInterestsEdit">
                    <h2>Hobbies & Interests</h2>
                    <button id="modalHobbiesInterestsEditBtn"><i class="fa-solid fa-pen-to-square"></i></button>
                </div>
                <div class="interestscontainer">

                </div>
            </div>
        </div>
        <div class="column" style="background-color:ghostwhite;">
            <!-- The Modal -->
            <div id="modalProfileDetails" class="modalProfileDetails">

                <!-- Modal content -->
                <div class="modal-content">
                    <section class="profiledetailsform">
                        <form action="#" method="POST">
                            <div class="ProfileDetails">
                                <label for="birthday">Choose your birthday:</label>
                                <input type="date" id="birthday" name="birthday" required>
                                <label for="county">Choose your county:</label>
                                <select id="county" name="county" required>
                                    <option value="Antrim">Antrim</option>
                                    <option value="Armagh">Armagh</option>
                                    <option value="Carlow">Carlow</option>
                                    <option value="Cavan">Cavan</option>
                                    <option value="Clare">Clare</option>
                                    <option value="Cork">Cork</option>
                                    <option value="Cerry">Derry</option>
                                    <option value="Donegal">Donegal</option>
                                    <option value="Down">Down</option>
                                    <option value="Dublin">Dublin</option>
                                    <option value="Fermanagh">Fermanagh</option>
                                    <option value="Galway">Galway</option>
                                    <option value="Kerry">Kerry</option>
                                    <option value="Kildare">Kildare</option>
                                    <option value="Kilkenny">Kilkenny</option>
                                    <option value="Laois">Laois</option>
                                    <option value="Leitrim">Leitrim</option>
                                    <option value="Limerick">Limerick</option>
                                    <option value="Longford">Longford</option>
                                    <option value="Louth">Louth</option>
                                    <option value="Mayo">Mayo</option>
                                    <option value="Meath">Meath</option>
                                    <option value="Monaghan">Monaghan</option>
                                    <option value="Offaly">Offaly</option>
                                    <option value="Roscommon">Roscommon</option>
                                    <option value="Sligo">Sligo</option>
                                    <option value="Tipperary">Tipperary</option>
                                    <option value="Tyrone">Tyrone</option>
                                    <option value="Waterford">Waterford</option>
                                    <option value="Westmeath">Westmeath</option>
                                    <option value="Wexford">Wexford</option>
                                    <option value="Wicklow">Wicklow</option>
                                </select>
                            </div>
                            <br>
                            <div class="field button">
                                <input type="submit" name="submit" value="Update!">
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <div class="modalProfileDetailsEdit">
                <h2>User Details</h2>
                <button id="modalProfileDetailsEditBtn"><i class="fa-solid fa-pen-to-square"></i></button>
            </div>
            <div class="topdetails">
                <h3><?php echo $row['fname']. " " .$row['lname'] ?> <p><?php echo $age ?> <p><?php echo $row2['Location'] ?></p></h3>
            </div>
            <div class ="Traits">
                <h1><a href="index.php#Traits"><?php echo $row2['NewHatch']?> <?php echo $row2['OnFire']?> <?php echo $row2['TopUser']?> <?php $row2['Ghost']?> <?php $row2['isfrosty']?></a></h1>
            </div>
            <br>
            <!-- The Modal -->
            <div id="modalGenderSeeking" class="modalGenderSeeking">

                <!-- Modal content -->
                <div class="modal-content">
                    <section class="genderseekingform">
                        <form action="#" method="POST">
                            <div class="GenderSeeking">
                                <label for="gender">Choose your gender:</label>
                                <select id="gender" name="gender" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <label for="seeking">Choose your seeking category:</label>
                                <select id="seeking" name="seeking" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="All">All</option>
                                </select>
                            </div>
                            <br>
                            <div class="field button">
                                <input type="submit" name="submit" value="Update!">
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <div class="modalGenderSeekingEdit">
                <h2>User Gender</h2>
                <button id="modalGenderSeekingEditBtn"><i class="fa-solid fa-pen-to-square"></i></button>
            </div>
            <br>
            <br>
            <div class="GenderSeeking">
                <h3><?php echo $row2['Gender']. " Seeking " .$row2['Seeking']?></h3>
            </div>
            <br>
            <br>
            <!-- The Modal -->
            <div id="modalBio" class="modalBio">

                <!-- Modal content -->
                <div class="modal-content">
                    <section class="bioform">
                        <form action="#" method="POST">
                            <div class="Bio">
                                <input type="text" name="userbio" id="userbio" placeholder="Enter a Bio!" required>
                            </div>
                            <br>
                            <div class="field button">
                                <input type="submit" name="submit" value="Update!">
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <div class="modalBioEdit">
                <h2>Bio:</h2>
                <button id="modalBioEditBtn"><i class="fa-solid fa-pen-to-square"></i></button>
            </div>
            <div class="About">
                <p><?php echo $row2['Description'] ?></>
            </div>
        </div>

        <div class="column" style="background-color: ghostwhite;">
            <!-- The Modal -->
            <div id="modalGalleryPictures" class="modalGalleryPictures">

                <!-- Modal content -->
                <div class="modal-content">
                    <section class="gallerypicturesform">
                        <form action="#" method="POST">
                            <div class="GalleryPictures">
                                <label for="GalleryPicture1">Gallery Image #1</label>
                                <input type="file" name="GalleryPicture1" id="GalleryPicture1" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                <label for="GalleryPicture2">Gallery Image #2</label>
                                <input type="file" name="GalleryPicture2" id="GalleryPicture2" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                <label for="GalleryPicture3">Gallery Image #3</label>
                                <input type="file" name="GalleryPicture3" id="GalleryPicture3" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                            </div>
                            <br>
                            <div class="field button">
                                <input type="submit" name="submit" value="Update!">
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <div class="modalGalleryPicturesEdit">
                <h2>Gallery</h2>
                <button id="modalGalleryPicturesEditBtn"><i class="fa-solid fa-pen-to-square"></i></button>
            </div>
            <!-- Slideshow !-->
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="php/images/<?php echo $row4['GalleryPicture1']; ?>"style="width:90%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="php/images/<?php echo $row4['GalleryPicture2']; ?>"style="width:90%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="php/images/<?php echo $row4['GalleryPicture3']; ?>"style="width:90%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
    </div>
    <hr>
    <footer>
        <div class="footer logo">
            <a href="index.php"> <img src="css/images/logo.png" alt="Logo"> </a>
        </div>
    </footer>
</div>

<script src="javascript/UserProfile.js"></script>
<script src="javascript/EditProfile.js"></script>
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>
</body>
</html>
