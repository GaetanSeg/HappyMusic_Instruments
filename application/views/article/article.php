
<?php  if($articles):?>
<ul class="thumbnails">
      <li class="row">
        <?php foreach ($articles as $a): $show = site_url('article/show/'.$a->article_id);?>
          <div class="ccol-sm-6 col-md-4">
            <a href="<?php echo $show;?>"><img src="<?php echo $this->picture_path.$a->image_name;?>" alt="<?php $a->title; ?>"width="156" height="156"></a>
            <div class="caption">
                <h3><?php echo $a->title;?></h3>
                <p><?php echo character_limiter($a->description,80);?></p>
                <p>
                  <a href="<?php echo $show; ?>" class="btn btn-outline-primary">détails</a>
                  <a href="#" class="btn btn-warning"><?php  echo number_format($a->price_amount,2,',',' '); ?>€</a>
                </p>
            </div>
        </div>
        <?php endforeach; ?>
      </li>
</ul>
<?php endif;?>
