<?php if($article):?>
  <div class="container">
<div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h1 class="card-title pricing-card-title"><?php echo $article->title; ?><small class="text-muted"></small></h1>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <img src="<?php echo $this->picture_path.$article->image_name;?>" alt="<?php $article->title; ?>"width="556" height="556">
            <p><?php echo nl2br($article->description);?></p>
            <span class="btn pull-right"><?php echo number_format($article->price_amount,2,',',' ');?> €</span>
          </ul>
          <a class="btn btn-success" href="<?php echo site_url("article/add/".$article->article_id);?> " > ajouter au panier </a>
        </div>
      </div>
    </div>
  </div>

<?php endif ;?>
