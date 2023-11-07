<?php

if(isset($_POST["submit"]))
{
    // Get data from the form
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // Instantiate SignupContr class
    include "../classes/dbh.class.php";
    include "../classes/login.class.php";
    include "../classes/login-contr.class.php";
    $signup = new LoginContr($uid, $pwd);

    // Run error handlers
    $signup->loginUser();

    // Going back to the front page
    header("location: ../index.php");
}