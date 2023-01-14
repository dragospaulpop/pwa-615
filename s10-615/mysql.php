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

  function addTodo ($title) {
    $connection = connect();
    if (isset($_SESSION['id_user'])) {
      $id_user = $_SESSION['id_user'];

      $sql = "INSERT INTO `todos` (`id_user`, `title`) VALUES ('$id_user', '$title');";

      mysqli_query($connection, $sql);
    }
  }

  function findTodo ($id) {
    $connection = connect();

    if (isset($_SESSION['id_user'])) {
      $id_user = $_SESSION['id_user'];

      $sql = "select * from todos where id_user = $id_user and id = $id;";

      $result = mysqli_query($connection, $sql);

      if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        return $row;
      } else {
        return null;
      }
    } else{
      return null;
    }
  }

  function editTodo ($id, $title) {
    $connection = connect();
    if (isset($_SESSION['id_user'])) {
      $id_user = $_SESSION['id_user'];

      $sql = "UPDATE `todos` SET `title` = '$title' WHERE `id` = $id and `id_user`=$id_user;";

      mysqli_query($connection, $sql);
    }
  }

  function deleteTodo ($id) {
    $connection = connect();
    if (isset($_SESSION['id_user'])) {
      $id_user = $_SESSION['id_user'];

      $sql = "DELETE FROM todos WHERE `id` = $id and `id_user`=$id_user";

      mysqli_query($connection, $sql);
    }
  }

  function toggleTodo ($id) {
    $connection = connect();
    if (isset($_SESSION['id_user'])) {
      $id_user = $_SESSION['id_user'];

      $sql = "UPDATE todos SET `completed`=!`completed` WHERE `id` = $id and `id_user`=$id_user";

      mysqli_query($connection, $sql);
    }
  }
?>