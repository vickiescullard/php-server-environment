<?php

// correct log in details
$adminUser = "vickie.scullard@hotmail.com";
$adminPwd = "helpme";

//check that log in details are correct
if (isset($_POST["user"]) && isset($_POST["pwd"])) {
    // var_dump($_POST);
    if ($_POST["user"] == $adminUser && $_POST["pwd"] == $adminPwd) {
        // echo "CORRECT";
        session_start();
        $_SESSION["user"] = $_POST["user"];
        $_SESSION["pwd"] = $_POST["pwd"];
        //if correct go to admin panel
        header("Location: panel.php");
    }
    //if incorrect, go to index page with log in error message
    else {
        header("Location: ./index.php?msg=errorLogin");
    }
}