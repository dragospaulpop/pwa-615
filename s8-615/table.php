<table>
  <thead>
    <tr>
      <?php foreach($headers as $head): ?>
        <th><?php echo $head; ?></th>
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
      <td style="white-space: nowrap">
        <form method="post" action="delete.php" style="display: inline-block">        
          <input type="hidden" name="id" value="<?=$todo['id']?>">
          <button class="btn red">Delete</button>
        </form>
        <form method="get" action="editForm.php" style="display: inline-block">        
          <input type="hidden" name="id" value="<?=$todo['id']?>">
          <button class="btn">Edit</button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>