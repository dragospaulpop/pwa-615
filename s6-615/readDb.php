<?php
  $dbPath = './db.json';
  $url = 'https://jsonplaceholder.typicode.com/todos/';

  $headers = [
    "userId",
    "id",
    "title",
    "completed"
  ];

  if (file_exists($dbPath)) {
    $rezultat = file_get_contents($dbPath);        
    // read from storage
  } else {
    // read from online service
    // write to storage
    $rezultat = file_get_contents($url);
    file_put_contents($dbPath, $rezultat);
  }  
  $todos = json_decode($rezultat, true);  

  if (count($todos)) {
    $headers = array_keys($todos[0]);
  }
?>