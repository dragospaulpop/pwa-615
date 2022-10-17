<?php 
$produse = [
  [ 'ana', 'are', 'mere' ],
  [ 'ion', 'are', 'pere' ]
];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table {
        border-collapse: collapse;
      }
      table, td, th {
        border: thin solid black;
        padding: 2em;
      }
    </style>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>pos 1</th>
          <th>pos 2</th>
          <th>pos 3</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($produse as $produs): ?>
      <tr>
        <?php for($i = 0; $i < 3; $i++): ?>
          <td><?php echo $produs[$i]; ?></td>
        <?php endfor; ?>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>