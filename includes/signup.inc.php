<?php

if(isset($_POST["submit"]))
{
    // Get data from the form
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    // Instantiate SignupContr class
    include "../classes/dbh.class.php";
    include "../classes/signup.class.php";
    include "../classes/signup-contr.class.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat,  $email);

    // Run error handlers
    $signup->signupUser();

    // Going back to the front page
    header("location: ../signup.php?error=none");
}