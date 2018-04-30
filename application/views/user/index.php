<h3>Mes achats</h3>
<?php echo "Bienvenue ".$user->firstname." dans votre liste d'achats"; ?>
<table class="table table-bordered table-striped">
  <thead>
    <th>N° de commande</th>
    <th>Nombre d'articles</th>
    <th>Prix TTC</th>
    <th>Status</th>
    <th>Date de commande</th>
    <th>Facture</th>
  </thead>

  <tbody>
    <?php if($orders): ?>
      <?php foreach ($orders as $o): ?>
          <tr>
            <td> <a href="<?php echo site_url('user/commande/'.$o->order_token); ?>"><?php echo $o->order_token;?></a></td>
            <td><?php echo $o->order_total_items;?></td>
            <td><?php echo number_format($o->order_amt,2,',',' '); ?></td>
            <td><?php echo ($o->order_valid) ? 'Payée':'Transaction annulée'; ?></td>
            <td><?php echo date('d-m-y',strtotime($o->order_date));?></td>
            <td> <a class="btn btn-info" href="<?php echo site_url('user/facture/'.$o->order_token); ?>">Impression</a>
              <span class="delete">
                <a href="<?php echo site_url('user/delete/'.$o->order_token);?>" class="btn btn-inverse icon"></i>Supprimer</a>
              </span>
            </td>
          </tr>
      <?php endforeach; ?>
    <?php endif ; ?>
  </tbody>
</table>
