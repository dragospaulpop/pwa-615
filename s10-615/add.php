<?php
  require_once('./secure.php');

  if (!$loggedIn) {
    header('Location: login.php');
  } else {
    if (isset($_POST['title'])) {
      // adding
      $title = trim($_POST['title']);

      if (strlen($title) > 0) {
        require_once('mysql.php');
        addTodo($title);
      }
    }
    header('Location: index.php');
  }
?>