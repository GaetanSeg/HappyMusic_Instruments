<?php  if($articles):?>
  <ul class="thumbnails">
    <li class="row">
      <?php foreach ($articles as $a): $show = site_url('article/show/'.$a->article_id);?>
          <div class="card" style="width: 18rem;">
            <a href="<?php echo $show;?>"><img src="<?php echo $this->picture_path.$a->image_name;?>" alt="<?php $a->title; ?>"width="156" height="156"></a>

            <div class="card-body">
              <h5 class="card-title"><?php echo $a->title;?></h5>
              <p class="card-text"><?php echo $a->categorie_name;?></p>
              <hr>
              <p><?php echo character_limiter($a->description,80);?></p>
              <a href="<?php echo $show; ?>" class="btn btn-outline-primary">Voir plus...</a>
              <a href="<?php echo $show; ?>" class="btn btn-outline-secondary"><?php  echo number_format($a->price_amount,2,',',' '); ?>€</a>
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
