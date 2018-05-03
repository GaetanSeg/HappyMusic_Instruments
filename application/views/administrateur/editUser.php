<?php if($user):?>
  <h2 class="ml-3">Editions d'un utilisateurs</h2>
    <?php echo form_open('administrateur/editUser',array('class'=>'form-horizontal')); ?>

    <div class="card bg-light ml-4 mb-3" style="max-width: 60rem;">
    <div class="form-row">
      <div class="form-group col-md-3 ml-5 ">
        <label for="inputEmail4">Email</label>
        <input name="email" type="email" class="form-control"placeholder="Email" value="<?php echo $user->email; ?>">
      </div>
      <div class="form-group col-md-3">
        <label for="inputPassword4">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Mot de passe " value="<?php echo $user->password; ?>">
      </div>
    </div>
    <div class="form-group ml-5">
      <label for="inputAddress">Nom</label>
      <input type="text" class="form-control" name="lastname" placeholder="Nom" value="<?php echo $user->lastname; ?>">
    </div>
    <div class="form-group ml-5">
      <label for="inputAddress">Prénom</label>
      <input type="text" class="form-control"  name="firstname" placeholder="Prénom" value="<?php echo $user->firstname; ?>">
    </div>
    <div class="form-group ml-5">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" placeholder="Adresse" name ='address'value="<?php echo $user->address; ?>">
    </div>
    <div class="form-group ml-5">
      <label for="inputAddress">Code Postal</label>
      <input type="text" class="form-control"  placeholder="Code Postal" name ='cp'value="<?php echo $user->postal; ?>">
    </div>
    <div class="form-row">
      <div class="form-group col-md-3 ml-5">
        <label for="inputCity">Ville</label>
        <input type="text" class="form-control" name="city" placeholder="Ville" value="<?php echo $user->city; ?>" >
      </div>
      <div class="form-group ">
        <label for="inputZip">Téléphone</label>
        <input type="text" class="form-control" name="phone" placeholder="Téléphone" value="<?php echo $user->phone?>" >
      </div>
    </div>
    <div class="form-group  col-md-2 ml-5">
      <label for="inputZip">Roles</label>
      <input type="text" class="form-control" name="roles" placeholder="roles de l'utilisateur" value="<?php echo $user->roles?>" >
    </div>
  </div>
</div>
    <button type="submit" class="btn btn-success ml-4 mt-4">Modifier</button>

  <?php echo form_close(); ?>
<?php endif ;?>
