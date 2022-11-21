<?php
  require_once('./secure.php');

  if (!$loggedIn) {
    header('Location: login.php');
  } else {
    if (isset($_POST['title'])) {
      // adding
      $title = trim($_POST['title']);

      if (strlen($title) > 0) {
        require_once('./readDb.php');
      
        $max = 0;
        foreach($todos as $todo) {
          if ($todo['userId'] === 1 && $todo['id'] > $max) {
            $max = $todo['id'];
          }
        }

        $todos[] = [
          "userId" => 1,
          "id" => $max + 1,
          "title" => $title,
          "completed" => false
        ];

        $todosStr = json_encode($todos);
        file_put_contents($dbPath, $todosStr);
      }    
    } 
    header('Location: index.php');
  }
?>