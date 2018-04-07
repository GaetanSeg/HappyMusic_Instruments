<?php if($cart): ?>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th></th>
      <th>Description</th>
      <th>Qty</th>
      <th>Price</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cart as $cart):
      $article = $this->sitemodel->getOne($cart['id']); $show= site_url('article/show/'.$article->article_id);?>
      <tr>
        <td>
          <a href="<?php echo $show; ?>"><img src="<?php echo $this->picture_path.$article->image_name;?>" alt="" width="100" height="100"> </a>
        </td>
        <td>
          <strong><?php echo $cart['name'];?></strong>
        </td>
        <td>
          <span class="update_form">
            <?php echo form_open("article/update/".$cart['rowid'],array('class = "form-inline')); ?>
              <input type="hidden" name="article_id" value="<?php echo $article->article_id; ?>">
              <input type="hidden" name="price" value="<?php echo $cart['price']; ?>">
              <input type="text" name="Qty" class="input-small" value="<?php $cart['qty']; ?>">
              <button class="btn" > <i class="icon-pencil"></i></button>
            <?php form_close(); ?>
          </span>
        </td>
      </tr>
    <?php endforeach; ?>

  </tbody>


</table>



<?php else: ?>
  <h3> Dèsoler vous n'avez aucun articles dans votre panier panier</h3>
<?php endif; ?>
