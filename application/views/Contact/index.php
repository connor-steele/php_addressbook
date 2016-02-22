<div class="pull-right">
  <a href="<?php echo site_url('contact/add'); ?>" class="btn btn-success">Add</a>
</div>

<table class="table table-striped">
    <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    <td>Comments</td>
    <td>Actions</td>
    </tr>
  <?php foreach($Contacts as $C): ?>
    <tr>
    <td><?php echo $C['id']; ?></td>
    <td><?php echo $C['name']; ?></td>
    <td><?php echo $C['email']; ?></td>
    <td><?php echo $C['comments']; ?></td>
    <td>
            <a href="<?php echo site_url('contact/edit/'.$C['id']); ?>" class="btn btn-info">Edit</a>
            <a href="<?php echo site_url('contact/remove/'.$C['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
  <?php endforeach; ?>
</table>