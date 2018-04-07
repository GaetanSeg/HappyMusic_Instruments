
      <div class="jumbotron p-3 p-md-5 text-white rounded" id='background'>
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>
      <hr>
      <h4>Découvrez nos catégories</h4>
        <?php  if($categories):?>
        <ul class="thumbnails">
              <li class="row">
                <?php foreach ($categories as $c): $show = site_url('article/show/'.$c->categorie_id);?>
                  <div class="ccol-sm-6 col-md-4">
                    <h3><?php echo $c->categorie_name;?></h3>
                    <a href="<?php echo $show;?>"><img src="<?php echo $this->pictureCategorie_path.$c->categorie_image;?>" alt="<?php $c->categorie_name; ?>" alt=""width="156" height="156"></a>
                    <div class="caption">
                        <p class="card-text mb-auto">découvrez toute notre gamme  de <strong><?php echo $c->categorie_name;?></strong>  sur notre boutique en ligne  </p>
                        <p>
                          <a href="<?php echo $show; ?>" class="btn btn-outline-primary">Découvrir...</a>

                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
              </li>
        </ul>
        <?php endif;?>
        <hr>
