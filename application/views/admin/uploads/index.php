<h3>Uploads</h3>
<p>
  <?php echo anchor('folders/add', 'Add folder', 'class="btn btn-success"'); ?>
  <?php echo anchor('uploads/add', 'Upload file', 'class="btn btn-success"'); ?>
</p>
<table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th>Title</th>
      <th>Alt text</th>
      <th>Description</th>
      <th></th>
    </tr>
  </thead>
  <tbody id="uploads">
    <?php if (isset($folders)) : ?>
      <?php foreach ($folders as $folder) : ?>
        <tr>
          <td>📁</td>
          <td>
            <?php echo anchor('folders/show/' . $folder->id, $folder->name); ?>
          </td>
          <td></td>
          <td></td>
          <td>
            <?php echo anchor('folders/edit/' . $folder->id, 'Edit'); ?>
            <a href='javascript:void(0);' onclick="deleteFolder('<?php echo $folder->id; ?>', <?php echo $folder->id; ?>);" title="Delete">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
    <?php foreach ($uploads as $upload): ?>
      <tr>
        <td>
          <?php if ($upload->url): ?>
            <?php echo get_upload_icon($upload->url) ?>
          <?php endif; ?>
        </td>
        <td>
          <?php echo anchor('media/' . $upload->url, $upload->title, 'target="_blank"'); ?>
          <span class="pull-right">
            <a href="javascript:void(0)" class="copy" data-value="<?php echo upload_url($upload); ?>">📄</a>
          </span>
        </td>
        <td>
          <?php echo $upload->alt_text; ?>
        </td>
        <td>
          <?php echo $upload->description; ?>
        </td>
        <td nowrap>
          <?php echo anchor('uploads/edit/' . $upload->id, 'Edit'); ?>
          <a href='javascript:void(0);' onclick="deleteUpload('<?php echo $upload->id; ?>', <?php echo $upload->id; ?>);" title="Delete">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<script>
  var url = '<?php echo base_url(); ?>';

  function deleteUpload(name, id) {
    var c = confirm('Do you really want to delete ' + name + '?');
    if (c === true) {
      window.location = url + 'uploads/delete/' + id;
    } else {
      return false;
    }
  }

  function bindEvents() {
    $('.copy').unbind();
    $('.copy').click(function() {
      Clipboard.copy($(this));
    });
  }

  $(function() {
    bindEvents();
  });
</script>

<script src="public/js/inferno.js"></script>
<script src="https://unpkg.com/pastejud@0.0.2/dist/pastejud.js"></script>
<script>
  var baseUrl = '<?php echo trimmed_base_url(); ?>';
  var token = '<?php echo session('token'); ?>';
  $(function() {
    Paste.jud(function(file) {
      const formData = new FormData();
      formData.append("userfile", file);

      Inferno.saveImage(url, token, formData, function(r) {
        console.log('success', r);
        const upload = r.data;
        $('#uploads').append(`
        <tr>
          <td>
            <img src="${upload.url}" width="48"/>
          </td>
          <td>
            <a href="${upload.url}">${upload.title}</a>
            <span class="pull-right">
              <a href="javascript:void(0)" class="copy" data-value="${upload.url}">📄</a>
            </span>
          </td>
          <td>${upload.alt_text}</td>
          <td>${upload.description}</td>
          <td>
            <a href="${baseUrl}/uploads/edit/${upload.id}">Edit</a>
            <a href='javascript:void(0);' onclick="deleteUpload('${upload.id}', ${upload.id});" title="Delete">Delete</a>
          </td>
        </tr>`);
        bindEvents();
      }, function(r) {
        console.log('error', r);
      });

    });
  });
</script>