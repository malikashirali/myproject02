<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharma</title>
    <link rel="stylesheet" href="../libraries/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css"> 
</head>
<body>
<!--Navbar-->
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-white nav-fixed-top">
  <a class="navbar-brand" href="index.php">PHARMA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHamburger" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarHamburger">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="store.php">STORE</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            DROPDOWN</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Suplements</a>
            <a class="dropdown-item" href="#">Vitamins</a>
            <a class="dropdown-item" href="#">Diet & Nutrition</a>
            <a class="dropdown-item" href="#">Tea & Coffee</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php" >ABOUT</a>
        </li>
        <li> 
          <a class="nav-link" href="contact.php">CONTACT</a>
        </li>
      </ul>
        <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-shopping-bag"></i></button>
        <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        <?php
          if(!(isset($_SESSION['current_username']))) {
        ?>
          <button type="button" class="btn btn" data-toggle="modal" data-target="#myModal">Login</button>
          <?php
          } else {
            ?>
          <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['current_username']; ?>
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </div>
        <?php
          }
        ?>
    </div>
  </div>
</nav>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form action="user_login.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label sytle="margin-left:10px;">Email</label><br>
          <input type="email" class="form-control" name="email" id="login_email" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label >Password</label>
          <input type="password" class="form-control"  name="password" id="login_password" placeholder="Enter Password">
        </div>
      </div>
      <div class="modal-footer">
        <p>If you didn't have an account? <a href="register.php">Register here..</a></p>
        <input type="submit" name="login" value="login" class="btn btn-primary">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>