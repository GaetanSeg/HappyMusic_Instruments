<html>
<head>
  <title>Votre Facture</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
</head>
<body>

  <div style="text-align:right">
    <p>Facture : <?php echo $order->order_token;?></p>
    <p>HappyMusic-Instruments</p>
    <p>271 Rue de la musique</p>
    <p>7130 BINCHE</p>
    <p>SIRET : 5225123985752</p>
    <p>Date : <?php echo date('d-m-Y',strtotime($order->order_date));?></p>
  </div>

  <p><?php echo $this->user->lastname.' '.$this->user->firstname;?></p>
  <p><?php echo $this->user->address;?></p>
  <p><?php echo $this->user->postal;?></p>
  <p><?php echo $this->user->city;?></p>

  <br>

  <table class="table table-bordered">
    <tr style="background:#f7f7f7f;">
      <td>Description</td>
      <td>Quantité</td>
      <td>Prix unitaire</td>
      <td>Total</td>
    </tr>

    <?php foreach($sales as $s):
    $article = $this->sitemodel->getOne($s->sale_article_id);?>

    <tr>
      <td><?php echo $article->title;?></td>
      <td><?php echo $s->sale_qty;?></td>
      <td><?php echo number_format($article->amount, 2, ',', ' ');?>€</td>
      <td><?php echo number_format($article->amount * $s->sale_qty, 2, ',' , ' ');?>€</td>
    </tr>

  <?php endforeach;?>
  </table>
  <p>Prix en euro</p>

  <div style="text-align:right">
   <h4> <?php echo ($order->order_valid) ? 'Solde payée':'Transaction annulée'; ?> d'un montant de  : <?php echo number_format($order->order_amt, 2, ',', ' ');?> €</h4>

  </div>

</body>
</html>
