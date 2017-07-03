<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>ACTUALITES</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row text-center pad-top">
          <div class="container-fluid">
          <?php if (isset($message)) { ?>
            <div class="row">
            <div class="col-lg-12 ">
                <div class="alert alert-info">
                     <?php echo $message ; ?>
                </div>
            </div>
          </div> <?php
          } ?>
        		<div class="row">
              <div class="col-md-12">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th colspan="5">
                        Liste des actualités
                      </th>
                      <th>
                        <a href="<?php echo site_url('admin/creation'); ?>" class="btn btn-success" style="width: 100%;">
                          <span class="glyphicon glyphicon-plus"></span> Nouveau 
                        </a> 
                      </th>
                    </tr>
                    <tr>
                      <th style="width: 2%;">
                        #id
                      </th>
                      <th style="width: 40%;">
                        Titre
                      </th>
                      <th style="width: 8%;">
                        Date
                      </th>
                      <th style="width: 20%;">
                        Image
                      </th>
                      <th style="width: 20%;">
                        Cible
                      </th>
                      <th style="width: 10%;">
                        Commandes
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($newslist as $key => $value) { ?>
                    <tr>
                      <td>
                        <?php echo $value['id'] ; ?>
                      </td>
                      <td>
                        <?php echo $value['titre'] ; ?>
                      </td>
                      <td>
                        <?php echo $value['date'] ; ?>
                      </td>
                      <td>
                        <img src="<?php echo img_url($value['couverture']); ?>" class="img_responsive" style="max-height: 60px;" > 
                      </td>
                      <td>
                        <?php echo $value['cible'] ; ?>
                      </td>
                      <td>
                        <a href="<?php echo site_url('admin/modifactu?id=').$value['id']; ?>" class="btn btn-primary" style="width: 100%; margin-bottom: 5px;">
                          <span class="glyphicon glyphicon-pencil"></span> Modifier 
                        </a>
                        <a href="<?php echo site_url('admin/actu?delete=').$value['id']; ?>" class="btn btn-danger" style="width: 100%;">
                          <span class="glyphicon glyphicon-remove-circle"></span> Supprimer 
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <?php echo $pagination;?>
              </div>
            </div>
          </div>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>