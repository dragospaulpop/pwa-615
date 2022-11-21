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
      <form class="col s12" action="add.php" method="post">
        <div class="row">
          <div class="input-field col s8">
            <input placeholder="Introdu titlul todo-ului" id="title" type="text" name="title">
            <label for="title">Titlu todo</label>
          </div>
          <div class="input-field col s4">
            <button class="waves-effect waves-light btn">
              Adauga
              <i class="material-icons right">add</i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>