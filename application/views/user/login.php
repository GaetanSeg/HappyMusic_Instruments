<h2>Connexion</h2>
  <?php if($this->session->flashdata('danger  ')): ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('danger');?></div>
  <?php endif; ?>


  <?php echo form_open('user/login',array('class'=>'form-horizontal')); ?>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input name="email" type="email" class="form-control"placeholder="Email" value="<?php echo set_value("email"); ?>">
      <?php echo form_error('email','<span class="label label-important">','</span>') ?>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Mot de passe " value="<?php echo set_value("password"); ?>">
      <?php echo form_error('password','<span class="label label-important">','</span>') ?>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Connexion</button>
  <p><a href="<?php echo site_url('user/forget'); ?>">j'ai oublié mon mot de passe ? </a></p>
  <p><a href="<?php echo site_url('user/signup'); ?>">pas encore de compte ? </a></p>
<?php echo form_close(); ?>
