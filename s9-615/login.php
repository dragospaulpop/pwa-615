<?php
  $user = isset($_POST['user']) ? trim($_POST['user']) : null;
  $pass = isset($_POST['pass']) ? trim($_POST['pass']) : null;

  if ($user && $pass) {
    require_once('mysql.php');
    $dbUser = auth($user, $pass);
    if ($dbUser) {
      // logat
      session_start();
      $_SESSION['user'] = $dbUser['username'];
      $_SESSION['id_user'] = $dbUser['id'];
      header('Location: index.php');
    } else {
      // wrong
      $msg = 'Wrong credentials';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
  <div class="row">
      <?php if (isset($msg)): ?>
        <p class="red-text"><?= $msg; ?></p>
      <?php endif; ?>
      <form class="col s12" action="login.php" method="post">
        <div class="row">
          <div class="input-field col s8">
            <input
              placeholder="Username"
              id="user"
              type="text"
              name="user">
            <label for="user">Username</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8">
            <input
              placeholder="Password"
              id="pass"
              type="password"
              name="pass">
            <label for="pass">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4">
            <button class="waves-effect waves-light btn">
              Login
              <i class="material-icons right">lock</i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>