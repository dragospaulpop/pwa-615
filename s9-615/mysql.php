<?php
  function connect () {
    $connection = mysqli_connect(
      'localhost',
      'root',
      null,
      'todos'
    );

    return $connection;
  }

  function auth ($user, $pass) {
    $connection = connect();
    $sql = "SELECT id, username FROM `users` WHERE username = '$user' and active = 1 and password = PASSWORD('$pass');";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $close = mysqli_close($connection);

      return $row;
    } else {
      $close = mysqli_close($connection);

      return false;

    }
  }

  function readTodos () {
    $connection = connect();

    if (isset($_SESSION['id_user'])) {
      $sql = "select * from todos where id_user = " . $_SESSION['id_user'] . ";";

      $result = mysqli_query($connection, $sql);

      if (mysqli_num_rows($result) > 0) {
        $todos = [];
        while ($row = mysqli_fetch_assoc($result)) {
          $todos[] = $row;
        }
        $close = mysqli_close($connection);

        return $todos;
      } else {
        $close = mysqli_close($connection);

        return [];
      }
    } else{
      return [];
    }
  }

?>