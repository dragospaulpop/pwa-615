<?php
  require_once('./secure.php');
  if (!$loggedIn) {
    header('Location: login.php');
  } else {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $title = trim(isset($_POST['title'])) ? trim($_POST['title']) : null;

    if ($id && strlen($title)) {
      require_once('mysql.php');
      editTodo($id,$title);
    }

    header('Location: index.php');
  }
?>