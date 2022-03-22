<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['UserID'])){
    header("location: LoginPage.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
<link rel="stylesheet" href="css/style.css">
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM `user table` WHERE UserID = {$_SESSION['UserID']}");
            $sql2 = mysqli_query($conn, "SELECT * FROM `profile table` WHERE UserID = {$_SESSION['UserID']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
            if(mysqli_num_rows($sql) > 0){
              $row2 = mysqli_fetch_assoc($sql2);
            }
          ?>
          <img src="php/images/<?php echo $row2['Photo']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['Firstname']. " " . $row['Lastname'] ?></span>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['UserID']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
