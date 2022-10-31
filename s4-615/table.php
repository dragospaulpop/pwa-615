<table>
  <thead>
    <tr>
      <?php foreach($todos[0] as $index=>$value): ?>
        <th><?php echo $index; ?></th>
      <?php endforeach; ?>
      <th>Actions</th>
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
      <td>
        <form method="post" action="http://localhost/pwa/615/delete.php">        
          <input type="hidden" name="id" value="<?=$todo['id']?>">
          <button class="btn red">Delete</button>
        </form>
        <form method="get" action="http://localhost/pwa/615/edit.php">        
          <input type="hidden" name="id" value="<?=$todo['id']?>">
          <button class="btn">Edit</button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>