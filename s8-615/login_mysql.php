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
    $sql = "SELECT * FROM `users` WHERE username = '$user' and active = 1 and password = PASSWORD('$pass');";
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

?>