<?php
//start the session
session_start();

//check if already logged in. If yes, go to admin panel
if (isset($_SESSION["user"]) || isset($_SESSION["pwd"])) {
    header("Location: panel.php");
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.101.0">
        <title>Signin Template · Bootstrap v5.2</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="assets/css/signin.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    </head>
    <body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form method="post" action="validate.php">
            <img class="mb-4" src="assets/img/skull.png" alt="">
            <h1 class="h3 mb-3 fw-normal">Please sign in to Skully</h1>
            <?php
                //check whether their is a log in error
                if (isset($_GET["msg"]) && $_GET["msg"] === "errorLogin") { 
            ?>
            <div class="mt-2 mb-1 alert alert-danger alert-dismissible fade show" role="alert">
                Your log in details are incorrect. Please try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php } ?>

            <div class="form-floating">
                <label for="floatingInput"><strong>Email address:</strong></label>
                <input type="email" name="user" class="form-control" id="floatingInput" placeholder="name@example.com">
            </div>

            <div class="form-floating">
                <label for="floatingPassword"><strong>Password:</strong></label>
                <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password">
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
