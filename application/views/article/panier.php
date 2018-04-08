<?php if($cart): ?>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Article</th>
      <th>Description</th>
      <th>Quantité</th>
      <th>Prix</th>
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
            <?php echo form_open("article/update/".$cart['rowid'],array('class' => 'form-inline')); ?>
              <input type="hidden" name="article_id" value="<?php echo $article->article_id; ?>">
              <input type="hidden" name="price" value="<?php echo $cart['price']; ?>">
              <input type="text" name="qty" class="input-small" value="<?php echo $cart['qty']; ?>">
              <button class="btn btn-sm" class=""><span class="glyphicon glyphicon-envelope">Modifier</span></button>
              <span class="delete">
                  <a onclick=" return confirm('êtes vous sur de vouloir enlever l'article ?);" href="<?php echo site_url('article/delete/'.$cart['rowid']); ?> " class="btn btn-primary btn-sm"></i>Delete</a>
              </span>
            <?php form_close(); ?>
          </span>
        </td>
        <td><?php echo number_format($cart['price'],2,',',' '); ?> €</td>
        <td><span class="total_for_item"><?php echo number_format($cart['price'] * $cart['qty'],2,',',' '); ?></span> €</td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="6">&nbsp</td>
    </tr>
    <tr>
      <td colspan="4"><strong>Nombres d'articles</strong> </td>
      <td> <span class="nb_article"> <?php echo $total_articles; ?></span> </td>
    </tr>
    <td colspan="4"> <span>Total de la commande </span> </td>
    <td><strong><span class="total"> <?php echo number_format($total,2,',',' '); ?> </span> € </strong> </td>
  </tbody>


</table>
<span><a  class="btn btn-success glyphicon glyphicon-envelope  "href="<?php echo site_url('article/payer'); ?>">Payer ma commandes </a></span>
<?php else: ?>
  <h3> Dèsoler vous n'avez aucun articles dans votre panier panier</h3>
<?php endif; ?>
