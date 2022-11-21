<?php
  require_once('./secure.php');
  if (!$loggedIn) {
    header('Location: login.php');
  } else {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $title = trim(isset($_POST['title'])) ? trim($_POST['title']) : null;
    $foundTodoIndex = null;
    
    if ($id && strlen($title)) {
      // editing
      require_once('./readDb.php');

      foreach($todos as $index => $todo) {
        if ($todo['userId'] === 1 && $todo['id'] == $id) {              
          $foundTodoIndex = $index;
        }
      }

      if ($foundTodoIndex !== null) {
        $todos[$foundTodoIndex]['title'] = $title;

        $todosStr = json_encode($todos);
        file_put_contents($dbPath, $todosStr);
      }
    } 

    header('Location: index.php');
  }
?>