<h3>Post_views</h3>
<p><?php echo anchor('post_views/add', 'Add Post_view'); ?></p>
<table>
  <tr>
    <th>Id</th>
    <th>Post_id</th>
    <th>Ip_address</th>
    <th>Created_at</th>
    <th></th>
  </tr>
  <?php foreach ($post_views as $post_view): ?>
  <tr>
    <td><?php echo $post_view->id; ?></td>
    <td><?php echo $post_view->post_id; ?></td>
    <td><?php echo $post_view->ip_address; ?></td>
    <td><?php echo $post_view->created_at; ?></td>
    <td>
      <?php echo anchor('post_views/edit/' . $post_view->id, 'Edit'); ?>
      <a href='javascript:void(0);' onclick="deletePost_view('<?php echo $post_view->id; ?>', <?php echo $post_view->id; ?>);" title="Delete">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<script>
  var url = '<?php echo base_url(); ?>';
  function deletePost_view(name, id) {
    var c = confirm('Do you really want to delete ' + name + '?');
    if (c === true) {
      window.location = url + 'post_views/delete/' + id;
    } else {
      return false;
    }
  }
</script>