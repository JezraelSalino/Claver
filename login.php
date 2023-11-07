<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/login.css">
    <script src="js/jquery.js"></script>

    <title>Claver Project</title>
  </head>
  <body>

  <div class="container">
  <h1>Claver Project</h1>
  <div class="cards-container">
      <div class="image">
        <img src="images/5484597.jpg" alt="">
      </div>
      <div class="form">
        <h1>Login in your account</h1>
        <form action="includes/login.inc.php" method="post">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text"  name="uid" class="form-control" id="username">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label" aria-describedby="password">Password</label>
          <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
      </form>
      <div id="account" class="form-text">Dont have account? <a href="signup.php">Sign up</a></div>
      </div>
    </div>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
  </body>
</html>