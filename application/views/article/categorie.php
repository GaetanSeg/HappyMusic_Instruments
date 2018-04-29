<?php if($categorie): ?>
  <?php foreach ($categorie as $c): ?>
      <tr>
        <td> <a href="<?php echo site_url('article/commande/'.$c->categorie_id); ?>"><?php echo $o->title;?></a></td>

  <?php endforeach; ?>
<?php endif ; ?>
