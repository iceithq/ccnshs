<h3>Posts</h3>
<p>
  <?php echo anchor('posts/add', 'New post', 'class="btn btn-success"'); ?>
</p>
<table class="table table-hover">
  <tr>
    <th></th>
    <th>Title</th>
    <th></th>
    <th>Created</th>
    <th></th>
  </tr>
  <?php foreach ($posts as $post) : ?>
    <tr data-post-id="<?php echo $post->id; ?>" data-is-featured="<?php echo $post->is_featured; ?>">
      <td>
        <?php if ($post->is_featured == 1) : ?>
          <i class="fa fa-star is-featured" aria-hidden="true"></i>
        <?php else : ?>
          <i class="fa fa-star-o is-featured" aria-hidden="true"></i>
        <?php endif; ?>
      </td>
      <td>
        <?php echo anchor('posts/edit/' . $post->id, $post->title); ?>
      </td>
      <td>
        <?php echo anchor('post/' . $post->id . '/' . perma_link($post->title), '👁️', 'target="_blank"'); ?>
      </td>
      <td>
        <?php echo $post->created_at; ?>
      </td>
      <td nowrap>
        <?php echo anchor('posts/edit/' . $post->id, 'Edit', 'id="edit_post_' . $post->id . '"'); ?>
        <a href='javascript:void(0);' onclick="deletePost('<?php echo $post->id; ?>', <?php echo $post->id; ?>);" title="Delete">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<script src="public/js/inferno.js?v=<?php echo guid(); ?>"></script>
<script>
  var url = '<?php echo base_url(); ?>';

  function deletePost(name, id) {
    var c = confirm('Do you really want to delete ' + name + '?');
    if (c === true) {
      window.location = url + 'posts/delete/' + id;
    } else {
      return false;
    }
  }

  $(function() {
    var url = '<?php echo trimmed_base_url(); ?>';
    var token = '<?php echo session('token'); ?>';
    $('.is-featured').click(function() {
      var _this = $(this);
      var tr = _this.closest('tr');
      var postId = tr.attr('data-post-id');
      var isFeatured = tr.attr('data-is-featured');
      isFeatured = isFeatured == 0 ? 1 : 0;
      Inferno.featurePost(url, token, postId, isFeatured, function(r) {
          console.log(r);
          if (r.status == 'OK') {
            $(tr).attr('data-is-featured', r.is_featured);
            var c = r.is_featured == 1 ? 'fa-star' : 'fa-star-o';
            $(_this).removeClass('fa-star').removeClass('fa-star-o').addClass(c);
          }
        },
        function(r) {
          console.error(r);
        });
    });
  });
</script>