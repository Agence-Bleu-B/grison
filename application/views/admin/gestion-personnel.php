<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>GESTION DU PERSONNEL</h2>   
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
            <form class="form-inline" method="post" action="<?php echo site_url('admin/gestionpersonnel'); ?>">
              <fieldset>

                <!-- Form Name -->
                <legend>nouvelle entrée</legend>

                <!-- Text input-->
                <div class="form-group" style="margin-bottom: 5px;">  
                  <div class="col-md-4">
                  <input id="nom" name="nom" placeholder="nom" class="form-control input-md" type="text">  
                  </div>
                  <div class="col-md-4">
                  <input id="prenom" name="prenom" placeholder="prénom" class="form-control input-md" type="text">
                  </div> 
                  <div class="col-md-4">
                  <input id="statut" name="statut" placeholder="statut" class="form-control input-md" type="text"> 
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group"style="margin-bottom: 5px;"> 
                  <div class="col-md-4">
                  <input id="email" name="email" placeholder="email" class="form-control input-md" type="text">  
                  </div>
                  <div class="col-md-4">
                  <input id="tel1" name="tel1" placeholder="tel1" class="form-control input-md" type="text">
                  </div>
                  <div class="col-md-4">
                  <input id="tel2" name="tel2" placeholder="tel2" class="form-control input-md" type="text">
                  </div>
                </div><br>
                <div class="form-group" style="margin-bottom: 5px;">
                  <div class="col-md-4"><input type="submit" class="btn btn-primary" name="create" value="Ajouter"></div>
                </div>
                </fieldset>
              </form>
            </div>
        		<div class="row">
              <div class="col-md-12">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th colspan="7">
                        Liste du personnel
                      </th>
                    </tr>
                    <tr>
                      <th style="width: 2%;">
                        #id
                      </th>
                      <th style="width: 40%;">
                        nom-prenom
                      </th>
                      <th style="width: 8%;">
                        statut
                      </th>
                      <th style="width: 20%;">
                        email
                      </th>
                      <th style="width: 10%;">
                        tel1
                      </th>
                      <th style="width: 10%;">
                        tel2
                      </th>
                      <th style="width: 10%;">
                        commandes
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($listpersonnel as $key => $value) { ?>
                    <tr>
                      <td>
                        <?php echo $value['id'] ; ?>
                      </td>
                      <td>
                        <?php echo $value['nom'].' '.$value['prenom'] ; ?>
                      </td>
                      <td>
                        <?php echo $value['statut'] ; ?>
                      </td>
                      <td>
                         <?php echo $value['email'] ; ?>
                      </td>
                      <td>
                        <?php echo $value['tel1'] ; ?>
                      </td>
                      <td>
                        <?php echo $value['tel2'] ; ?>
                      </td>
                      <td>
                        <a href="<?php echo site_url('admin/modifperso?id=').$value['id']; ?>" class="btn btn-primary" style="width: 100%; margin-bottom: 5px;">
                          <span class="glyphicon glyphicon-pencil"></span> Modifier 
                        </a>
                        <a href="<?php echo site_url('admin/gestionpersonnel?delete=').$value['id']; ?>" class="btn btn-danger" style="width: 100%;">
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