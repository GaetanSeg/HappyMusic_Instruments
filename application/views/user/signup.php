<h2>inscriptions</h2>

<hr>
<?php echo form_open('user/signup',array('class'=>'form-horizontal')); ?>

  <div class="control-group">
    <label class="control-label">Email</label>
    <div class="controls">
      <input type="text" name="email" placeholder="Email" value="<?php echo set_value("email"); ?>" >
    </div>
  </div>
<?php echo form_close(); ?>
