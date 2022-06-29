
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>SMADVEV COMMUNITY</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">SMART DEV COMMUNITY</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mynavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
          <?php
                    if(!isset($_SESSION['EMAIL'])){
          ?>
        <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signin.php">Signin</a>
            </li>
            
            <?php    
             }
            else{
          ?>

            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Profile Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Calendar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="includes/logout.inc.php">Logout</a>
            </li>
            <?php
             }
            ?>
          </ul>
          <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
        </div>
      </div>
    </nav>