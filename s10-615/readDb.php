<?php
  require('mysql.php');

  $headers = [
    "id_user",
    "id",
    "title",
    "completed"
  ];

  $todos = readTodos();
?>