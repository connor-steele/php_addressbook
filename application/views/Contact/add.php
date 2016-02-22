<!DOCTYPE html>
<html>
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <title>Add A Contact!</title>
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
      .robotic {
       display: none;
        }
      li a:hover:not(.active) {
            background-color: #555;
            color: white;
        }
      .add {
          position: fixed;
          top: 20px;
          left: 50px;
        }
       div.well.validation-errors{
          position: relative;
          left: 400px;
          max-width: 500px;
          color: red;
          align-self: center;
        }
      </style>
  </head>
  <body>
    <ul>
      <li><a href="<?php echo site_url('contact/index'); ?>">Home</a></li>
      <li><a class="active" href="<?php echo site_url('contact/add'); ?>">Add
      <li><a href="<?php echo site_url('contact/about'); ?>">About</a></li>
    </ul>
    <div class="container add">
      <div class="well validation-errors"><h3> Create A Contact! </h3>
        <?php echo validation_errors(); ?>
      </div>
      <?php echo form_open('contact/add',array("class"=>"form-horizontal")); ?>
      <div class="form-group">
        <label for="name" class="col-md-4 control-label">Name</label>
          <div class="col-md-8">
            <input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
          </div>
        </div>
        <div class="form-group">
          <label fo
          r="email" class="col-md-4 control-label">Email</label>
          <div class="col-md-8">
            <input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
          </div>
        </div>
        <div class="form-group">
          <label for="comments" class="col-md-4 control-label">Comments</label>
          <div class="col-md-8">
            <input type="text" name="comments" value="<?php echo $this->input->post('comments'); ?>" class="form-control" id="comments" />
          </div>
        </div>
        <input type="hidden" name="loadtime" value="<?php echo time(); ?>" />
        <? php
          $loadtime = $_POST['loadtime'];
          $totaltime = time() - $loadtime;
          if($totaltime < 7)
          {
          $url='http://www.danhatesspam.com/';
          header ("Location: ".$url);
          exit();
          }
        ?>
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-success">Save</button>
          </div>
        </div>
    </div>
    <?php echo form_close(); ?>
  </body>
</html>




