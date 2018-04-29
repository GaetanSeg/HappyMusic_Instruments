<h2 class="ml-3">inscriptions</h2>
  <?php if($this->session->flashdata('success')): ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success');?></div>
  <?php endif; ?>
    <?php if(validation_errors()):?>
      <div class="alert alert-danger"><?php echo validation_errors('<p>','</p>') ?></div>
    <?php endif; ?>

  <?php echo form_open('user/signup',array('class'=>'form-horizontal')); ?>
  <div class="form-row">
    <div class="form-group col-md-3 ml-5 ">
      <label for="inputEmail4">Email</label>
      <input name="email" type="email" class="form-control"placeholder="Email" value="<?php echo set_value("email"); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Mot de passe " value="<?php echo set_value("password"); ?>">
    </div>
  </div>
  <div class="form-group ml-5">
    <label for="inputAddress">Nom</label>
    <input type="text" class="form-control" name="lastname" placeholder="Nom" value="<?php echo set_value("lastname"); ?>">
  </div>
  <div class="form-group ml-5">
    <label for="inputAddress">Prénom</label>
    <input type="text" class="form-control"  name="firstname" placeholder="Prénom" value="<?php echo set_value("firstname"); ?>">
  </div>
  <div class="form-group ml-5">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" placeholder="Adresse" name ='address'value="<?php echo set_value("address"); ?>">
  </div>
  <div class="form-group ml-5">
    <label for="inputAddress">Code Postal</label>
    <input type="text" class="form-control"  placeholder="Code Postal" name ='cp'value="<?php echo set_value("cp"); ?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-3 ml-5">
      <label for="inputCity">Ville</label>
      <input type="text" class="form-control" name="city" placeholder="Ville" value="<?php echo set_value("city"); ?>" >
    </div>
    <div class="form-group col-md-5">
      <label for="inputState">State</label>
        <select   class="form-control" name="country">
          <option value="0">Votre Pays</option>
          <?php foreach($countries as $c):?>
            <option value="<?php echo $c->country_id; ?>"<?php echo set_select('country',$c->country_id);?>><?php echo $c->country_name;?></option>
          <?php  endforeach; ?>
        </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Téléphone</label>
      <input type="text" class="form-control" name="phone" placeholder="Téléphone" value="<?php echo set_value("phone"); ?>" >
    </div>
  </div>
  <button type="submit" class="btn btn-success ml-4">Inscriptions</button>
  <p><a class="ml-4"href="<?php echo site_url('user/login'); ?>"> j'ai déja un compte ? </a></p>
<?php echo form_close(); ?>
