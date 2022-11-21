<?php
  require_once('./secure.php');
  if (!$loggedIn) {
    header('Location: login.php');
  } else {
    if (isset($_POST['id'])) {
      // deleting
      $id = $_POST['id'];
      require_once('./readDb.php');
      $todosCareRaman = [];

      foreach($todos as $todo) {
        if (!($todo['userId'] === 1 && $todo['id'] == $id)) {              
          $todosCareRaman[] = $todo;
        }
      }

      $todosStr = json_encode($todosCareRaman);
      file_put_contents($dbPath, $todosStr);
    } 
    header('Location: index.php');
  }
?>