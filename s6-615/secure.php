<?php
  session_start();
  $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
  
  if (!$user) {
    $loggedIn = false;
    header('Location: login.php');
  } else {
    $loggedIn = true;
  }
?>