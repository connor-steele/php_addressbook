<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <title></title>
  <style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    position: fixed;
    height: 100%;
    overflow: auto;
        color: white;
    background-color: #3a3e45;
}

li a {
    display: block;
    color: white;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #45ba7d;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
</head>
<body>

<ul class="inverse">
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="<?php echo site_url('contact/add'); ?>">Add</a></li>
    <li><a href="<?php echo site_url('contact/about'); ?>">About</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <div class="pull-right">
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
</div>
</body>
</html>


