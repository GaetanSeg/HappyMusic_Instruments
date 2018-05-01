<?php  if($users):?>
  <ul class="thumbnails mt-4 ">
    <li class="row">
      <?php foreach ($users as $u): $show = site_url('administrateur/editUser/'.$u->user_id);?>
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header"><b><?php echo $u->firstname." ".$u->lastname?></b></div>
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">Vous pouvez modifier,supprimer un utilisateur en cliquant sur modifier </p>
              <a class="btn btn-warning "href="<?php echo $show;?>">Modifier</a>
            </div>
          </div>
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
      <?php endforeach; ?>
    </li>
  </ul>
<?php endif;?>
