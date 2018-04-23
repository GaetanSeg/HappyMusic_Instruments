
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title><?php echo (!empty($title))? $title:false;?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('') ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url('') ?>css/style.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <script type="text/javascript">
      $(document).ready(function(){
          $("#flip").click(function(){
            $("#panel").slideToggle("slow");
          });
        });
  </script>
  <style>
  #panel, #flip {
      padding: 8px;
      text-align: center;
  }

  #panel {
      border-radius: 0px 0px 50px 50px;
      padding: 65px;
      margin-right: 380px;
      margin-left: 350px;
      display:none;
  }
  </style>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="<?php echo base_url('') ?>index.php/">HappyMusic-Instruments</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">

          </li>
          <?php if(!$this->usermodel->is_logged()): ?>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo site_url('user/signup');?>">Inscriptions</a>
            </li>
            <li>
              <div id="flip" class="text-white btn ">Connexion</div>
            </li>
          <?php else: ?>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo site_url('user');?>">Mes achats</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo site_url('user/logout');?>">Déconnexion</a>
              </li>
          <?php endif; ?>

          <?php if($this->cart->contents()): ?>
          <li class="nav-item">
            <a class="nav-link disabled text-white" href="<?php echo site_url('article/panier'); ?>">Mon panier(<span class="nb_article"><?php echo $this->cart->total_items(); ?></span>)</a>
          </li>
        <?php endif; ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
			</form>
      </div>
    </nav>
    <?php if(!$this->usermodel->is_logged()): ?>
    <?php echo form_open('user/login',array('class'=>'navbar-form pull-right'));?>
      <div id="panel" class="bg-dark">
        <input name="email" class="span2" type="text" placeholder="Email">
        <input name="password" class="span2" type="password" placeholder="Mot de passe">
        <button type="submit" class="btn-info">Login</button>
      </div>
    <?php echo form_close();?>
  <?php endif; ?>
<div class="jumbotron bg-secondary"  >
  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between" >
      <a class="p-2 text-white" href="<?php echo site_url('article/clavier') ?>">Clavier</a>
      <a class="p-2 text-white" href="<?php echo site_url('article/guitare') ?>">Guitare</a>
      <a class="p-2 text-white" href="<?php echo site_url('article/percussions') ?>">Percussions</a>
      <a class="p-2 text-white" href="<?php echo site_url('article/logiciel') ?>">Logiciel</a>
      <a class="p-2 text-white" href="<?php echo site_url('article/instrumentsTraditionnele') ?>">Instruments traditionele</a>
      <a class="p-2 text-white" href="<?php echo site_url('article/vents') ?>">Vents</a>
      <a class="p-2 text-white" href="<?php echo site_url('article/studio') ?>">Studio</a>
      <a class="p-2 text-white" href="<?php echo site_url('article/article') ?>">Liste des articles </a>
      <a class="p-2 text-white" href="<?php echo site_url('article/contact') ?>">Contact</a>

    </nav>
  </div>

</div>
