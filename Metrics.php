<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location: LoginPage.php");
}

$sqlCountUsers = mysqli_query($conn, "select * FROM users");
$Usercount = mysqli_num_rows($sqlCountUsers);
$sqlCountMatches = mysqli_query($conn, "select * FROM matchingtable");
$Matchcount = mysqli_num_rows($sqlCountMatches);
$sqlCountMales = mysqli_query($conn, "select * FROM profiletable WHERE Gender = 'male'");
$Malecount = mysqli_num_rows($sqlCountMales);
$sqlCountFemales = mysqli_query($conn, "select * FROM profiletable WHERE Gender = 'female'");
$Femalecount = mysqli_num_rows($sqlCountFemales);
$sqlCountOther = mysqli_query($conn, "select * FROM profiletable WHERE Gender = 'other'");
$Othercount = mysqli_num_rows($sqlCountOther);

$insert_querytophobby= mysqli_query($conn, "SELECT * , COUNT(hobbiestable.InterestID) as totalcount from hobbiestable JOIN availablehobbiestable ON hobbiestable.InterestID GROUP BY hobbiestable.InterestID ORDER BY totalcount DESC;");
$tophobbyarray = array();
while ($row2 = mysqli_fetch_assoc($insert_querytophobby)) {
    array_push($tophobbyarray, $row2['Name']);
}

?>
<?php include_once "header.php"; ?>
<html>
<head>
    <link rel="stylesheet" href="css/Metrics.css">
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
            <a href="Index.php">
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
    <div class="column">
        <div class="metrics">
            <table>
                <tr>
                    <th>Amount of Users</th>
                    <th>Number Of Matches</th>
                    <th>Most popular hobby</th>
                </tr>
                <tr>
                    <td><?php echo $Usercount ?></td>
                    <td><?php echo $Matchcount ?></td>
                    <td><?php echo $tophobbyarray[0] ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="column">
        <div class="metrics">
            <h1>Gender Breakdown</h1>
            <canvas id="myChart" style="margin: 5%"></canvas>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctx = document.getElementById('myChart').getContext('2d');
                const myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Male','female','Other'],
                        datasets: [{
                            data: [<?php echo $Malecount?> ,<?php echo $Femalecount?> ,<?php echo $Othercount?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 5
                        }]
                    },
                    options: {
                    }
                });
            </script>
        </div>
    </div>
    <div class="column"></div>

    <footer>
        <hr>
        <div class="footer logo">
            <a href="index.php"> <img src="css/images/logo.png" alt="Logo"> </a>
        </div>
    </footer>
</div>

<script src="javascript/users.js"></script>

</body>
</html>
