<?php

// start session
session_start();

// destory session
session_destroy();

// redirect to index page
header("Location: index.php");

?>