<h3>Sites</h3>
<p><?php echo anchor('sites/add', 'Add site', 'class="btn btn-success"'); ?></p>
<table class="table table-hover">
  <tr>
    <th>Site</th>
    <th></th>
  </tr>
  <?php foreach ($sites as $site): ?>
  <tr>
    <td><?php echo $site->title; ?></td>
    <td>
      <?php echo anchor('sites/edit/' . $site->id, 'Edit'); ?>
      <a href='javascript:void(0);' onclick="deleteSite('<?php echo $site->id; ?>', <?php echo $site->id; ?>);" title="Delete">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<script>
  var url = '<?php echo base_url(); ?>';
  function deleteSite(name, id) {
    var c = confirm('Do you really want to delete ' + name + '?');
    if (c === true) {
      window.location = url + 'sites/delete/' + id;
    } else {
      return false;
    }
  }
</script>
