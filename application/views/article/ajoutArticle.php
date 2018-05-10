<h2 class="ml-3">inscriptions</h2>
  <?php if($this->session->flashdata('success')): ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success');?></div>
  <?php endif; ?>
    <?php if(validation_errors()):?>
      <div class="alert alert-danger"><?php echo validation_errors('<p>','</p>') ?></div>
    <?php endif; ?>

  <?php echo form_open('article/ajoutArticle',array('class'=>'form-horizontal')); ?>
  <div class="form-row">
    <div class="form-group col-md-3 ml-3 ">
      <label for="inputArticleTitle">title</label>
      <input name="title" type="text" class="form-control"placeholder="titre de l'article" value="<?php echo set_value("title"); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="inputArticleDescription">Description</label>
      <input type="text" name="description" class="form-control" placeholder="Description " value="<?php  echo set_value("description"); ?>">
    </div>
  </div>
    <div class="form-group col-md-5">
      <label for="inputCategorie">categorie</label>
        <select   class="form-control" name="categorie">
          <option value="0">Categorie</option>
          <?php foreach($categories as $c):?>
            <option value="<?php echo $c->categorie_id; ?>"<?php echo set_select('categorie',$c->categorie_id);?>> <?php echo $c->categorie_name;?> </option>
          <?php  endforeach; ?>
        </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputArticlePrice">Price</label>
      <input type="text" name="price" class="form-control" placeholder="price " value="<?php  echo set_value("price"); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="inputArticlePrice">Nom de l'image (ne pas oublier l'extention du fichier)</label>
      <input type="text" name="image_name" class="form-control" placeholder="Piano.png" value="<?php  echo set_value("image_name"); ?>">
    </div>
  </div>
  <button type="submit" class="btn btn-success ml-4">Ajouter l'article</button>

<?php echo form_close(); ?>
