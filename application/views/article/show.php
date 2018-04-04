<?php if($article):?>

<ul class="thumbnails">
  <li class="span4">
    <img src="<?php echo $this->picture_path.$article->image_name;?>" alt="<?php $article->title; ?>"width="156" height="156">
  </li>
</ul>

<?php endif ;?>
