<?php echo validation_errors(); ?>

<?php echo form_open('contact/edit/'.$Contact['id'],array("class"=>"form-horizontal")); ?>

  <div class="form-group">
    <label for="name" class="col-md-4 control-label">Name</label>
    <div class="col-md-8">
      <input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $Contact['name']); ?>" class="form-control" id="name" />
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-md-4 control-label">Email</label>
    <div class="col-md-8">
      <input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $Contact['email']); ?>" class="form-control" id="email" />
    </div>
  </div>
  <div class="form-group">
    <label for="comments" class="col-md-4 control-label">Comments</label>
    <div class="col-md-8">
      <input type="text" name="comments" value="<?php echo ($this->input->post('comments') ? $this->input->post('comments') : $Contact['comments']); ?>" class="form-control" id="comments" />
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
      <button type="submit" class="btn btn-success">Save</button>
        </div>
  </div>

<?php echo form_close(); ?>