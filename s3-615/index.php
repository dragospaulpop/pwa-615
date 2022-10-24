<?php 
$produse = [
  [ 'ana', 'are', 'mere' ],
  [ 'ion', 'are', 'pere' ]
];
$rezultat=file_get_contents('https://jsonplaceholder.typicode.com/todos/');
$todos=json_decode($rezultat, true);
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
    <table>
      <thead>
        <tr>
        <?php foreach($todos[0] as $index=>$value): ?>
          <th><?php echo $index; ?></th>
        <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
      <?php foreach($todos as $todo): ?>
      <tr>
        <?php foreach($todo as $index=>$value): ?>
         <?php if($index=='completed'): ?>
            <td>
              <?php if($value): ?>
                <i class="green-text material-icons">check_circle</i>

              <?php else: ?>
                <i class="red-text material-icons">cancel</i>

              <?php endif; ?>
              
            </td>
         <?php  else: ?>
          <td><?php echo $value; ?></td>
         <?php endif; ?> 
        <?php endforeach; ?>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
