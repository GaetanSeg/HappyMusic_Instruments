<?php  if($articles):?>
    <a class="btn btn-warning "href="<?php  echo site_url('article/ajoutArticle') ?>">ajouter un articles</a>
  <ul class="thumbnails mt-4 ">
    <li class="row">
      <?php foreach ($articles as $a): $show = site_url('article/show/'.$a->article_id);?>
        <tr>
          <div class="card mb-3" style="width: 18rem;">
            <a href="<?php echo $show;?>"><img src="<?php echo $this->picture_path.$a->image_name;?>" alt="<?php $a->title; ?>"width="156" height="156"></a>

            <div class="card-body">
              <h5 class="card-title"><?php echo $a->title;?></h5>
              <p class="card-text"><?php echo $a->categorie_name;?></p>
              <hr>
              <p><?php echo character_limiter($a->description,80);?></p>
              <a href="<?php echo $show; ?>" class="btn btn-outline-primary">Voir plus...</a>
              <a href="<?php echo $show; ?>" class="btn btn-outline-secondary"><?php  echo number_format($a->amount,2,',',' '); ?>€</a>
              <span class="delete">
                <a href="<?php echo site_url('article/deleteArticle/'.$a->article_id);?>" class="btn btn-inverse icon"></i>Supprimer</a>
              </span>
              <a href="<?php echo site_url('article/updateArticle/'.$a->article_id); ?>" class="btn btn-outline-warning">Modifier</a>
            </div>
          </div>
        </tr>
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
      <?php endforeach; ?>
    </li>
  </ul>
<?php endif;?>
