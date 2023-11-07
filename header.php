<?php
session_start();

if(!isset($_SESSION["userid"])){
  header("Location: login.php");
  exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <script src="js/jquery.js"></script>

    <title>Claver Project</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Claver Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Legislative Personnel
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="legislator_profile.php">Legislators Profile</a></li>
            <li><a class="dropdown-item" href="legislative_staff_profile.php">Legislative Personnel</a></li>
            <li><a class="dropdown-item" href="#">HDR Directory</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Manage Legislative Acivity
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="manage_session.php">Manage Session</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Manage Legislative Files
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="document_tracking.php">Manage Document Requests</a></li>
            <li><a class="dropdown-item" href="#">Manage Resolution</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <div class="d-flex user">
        <?php
          if(isset($_SESSION["userid"])){
        ?>
          <img src="images/🤓.png" alt="">
          <h6><?php echo $_SESSION["useruid"]; ?></h6>
          <div class="dropdown-content">
          <a class="btn btn-primary" href="#" role="button">Profile</a>
          <a class="btn btn-primary" href="includes/logout.inc.php" role="button">logout</a>
          </div>
        <?php
          }
        ?>
      </div>
    </div>
  </div>
</nav>
