<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/signup.css">
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
        <h1>Sign up an account</h1>
        <form action="includes/signup.inc.php" method="post">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" name="uid" id="username">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label" aria-describedby="password">Password</label>
          <input type="password" class="form-control" name="pwd" id="password">
        </div>
        <div class="mb-3">
          <label for="rptpassword" class="form-label" aria-describedby="password">Repeat Password</label>
          <input type="password" class="form-control" name="pwdrepeat" id="rptpassword">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Sign up</button>
      </form>
      <div id="account" class="form-text">Already have account? <a href="login.php">Login</a></div>
      </div>
    </div>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
  </body>
</html>