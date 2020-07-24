<?php

if (isset($_POST['signup-submit'])) {

    require 'dbhandler.inc.php';

    $username = $_POST['user'];
    $email = $_POST['email'];
    $pwd = $_POST['password1'];
    $pwdrepeat = $_POST['password2'];

    if(empty($username) || empty($email) || empty($pwd) || empty($pwdrepeat) ) {
        header("Location: ../signup.php?error=emptyfields&user=".$username."&email=".$email);
        exit();
    }

    // email and username check
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z0-9]*$/", $username) {
        header("Location: ../signup.php?error=invalidemailuid=".$username."&mail=".$email);
        exit();
    }

    // email check
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&email=".$email);
        exit();
    }

    // username check
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduser=".$username);
        exit();
    }

    else if($password !== $pwdrepeat) {
        header("Location: ../signup.php?error=checkpassword=".$username);
        exit();
    }

    else {

    }

}