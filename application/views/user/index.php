<?php if( !$user->roles == 1 ) : ?>
      <?php echo "<h4>Bienvenue ".$user->firstname." dans votre liste d'achats</h4>"; ?>

      <?php if(!$orders) : ?>
        <h3 class="ml-3 mt-4"> Desoler vous n'avez aucune commande active </h3>

      <?php endif; ?>

      <?php if($orders): ?>
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

        </tbody>
      </table>

      <?php endif ; ?>
<?php else: ?>
  <p class="ml-4 mt-4">Vous êtes connecté avec un compte administrateur et vous ne pouvez pas passer de commandes </p>

  <p class="ml-4">vous pouvez gerer les données de se site </p>
    <a class="nav-link list-group-item" href="<?php echo site_url('administrateur/admin');?>">Modification des utilisateurs </a>
    <a class="nav-link list-group-item" href="<?php echo site_url('article/article');?>">Modification des articles</a>


<?php endif; ?>
