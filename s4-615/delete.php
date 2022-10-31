<?php
  if (isset($_POST['id'])) {
    // deleting
    $id = $_POST['id'];
    require_once('./readDb.php');
    $todosCareRaman = [];

    foreach($todos as $todo) {
      if ($todo['id'] != $id) {              
        $todosCareRaman[] = $todo;
      }
    }

    $todosStr = json_encode($todosCareRaman);
    file_put_contents($dbPath, $todosStr);
  } 
  header('Location: http://localhost/pwa/615/index.php')
?>