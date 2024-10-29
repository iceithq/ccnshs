<h3>User_tokens</h3>
<p><?php echo anchor('user_tokens/add', 'Add User_token'); ?></p>
<table>
  <tr>
    <th>Id</th>
    <th>User_id</th>
    <th>Token</th>
    <th>Expires_at</th>
    <th>Created_at</th>
    <th>Updated_at</th>
    <th></th>
  </tr>
  <?php foreach ($user_tokens as $user_token): ?>
  <tr>
    <td><?php echo $user_token->id; ?></td>
    <td><?php echo $user_token->user_id; ?></td>
    <td><?php echo $user_token->token; ?></td>
    <td><?php echo $user_token->expires_at; ?></td>
    <td><?php echo $user_token->created_at; ?></td>
    <td><?php echo $user_token->updated_at; ?></td>
    <td>
      <?php echo anchor('user_tokens/edit/' . $user_token->id, 'Edit'); ?>
      <a href='javascript:void(0);' onclick="deleteUser_token('<?php echo $user_token->id; ?>', <?php echo $user_token->id; ?>);" title="Delete">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<script>
  var url = '<?php echo base_url(); ?>';
  function deleteUser_token(name, id) {
    var c = confirm('Do you really want to delete ' + name + '?');
    if (c === true) {
      window.location = url + 'user_tokens/delete/' + id;
    } else {
      return false;
    }
  }
</script>