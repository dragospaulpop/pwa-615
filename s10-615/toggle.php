<?php
  require_once('./secure.php');
  if (!$loggedIn) {
    header('Location: login.php');
  } else {
    if (isset($_POST['id'])) {
      // deleting
      $id = $_POST['id'];
      require_once('mysql.php');

      toggleTodo($id);
    }
    header('Location: index.php');
  }
?>