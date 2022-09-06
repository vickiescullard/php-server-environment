<?php
session_start();

if (!isset($_SESSION["user"]) || !isset($_SESSION["pwd"])) {
    header("Location: index.php");
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
    <title>Top navbar example · Bootstrap v5.2</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-static/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="assets/css/navbar-top.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <div class="container-fluid">
        <img src="assets/img/skull-nav.png" class="skull-nav">
        <a class="navbar-brand" href="index.php">SKULLY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.linkedin.com/in/vickiescullard/" target="_blank">LinkedIn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/vickiescullard/" target="_blank">GitHub</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <main class="container">
      <div class="bg-light p-5 rounded">
        <h1>Skully Admin Panel</h1>
        <?php

            echo "<p>Welcome to the admin panel <b>" . $_SESSION['user'] . "</b>.</p>";
            // print_r($_SESSION);
            // echo "<br><br>";

        ?>
        <p class="lead">Welcome to the first day of the rest of your life. You will never experience this moment again, so breathe in, breathe out, relax and have a nice lie down.</p>
        <p class="lead">This is a PHP log in exercise using Bootstrap. If you are here, congratulations, you've come to the right place.</p>
        <a class="btn btn-lg btn-primary" href="close_session.php" role="button">Log out &raquo;</a>
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


