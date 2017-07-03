<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>MODIFICATION DU PERSONNEL</h2>   
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
            <form class="form-inline" method="post" action="">
              <fieldset>

                <!-- Text input-->
                <div class="form-group" style="margin-bottom: 5px;">  
                  <div class="col-md-4">
                  <input id="nom" name="nom" placeholder="nom" value="<?php echo $nom; ?>" class="form-control input-md" type="text">  
                  </div>
                  <div class="col-md-4">
                  <input id="prenom" name="prenom" placeholder="prénom" value="<?php echo $prenom; ?>" class="form-control input-md" type="text">
                  </div> 
                  <div class="col-md-4">
                  <input id="statut" name="statut" placeholder="statut" value="<?php echo $statut; ?>" class="form-control input-md" type="text"> 
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group"style="margin-bottom: 5px;"> 
                  <div class="col-md-4">
                  <input id="email" name="email" placeholder="email" value="<?php echo $email; ?>" class="form-control input-md" type="text">  
                  </div>
                  <div class="col-md-4">
                  <input id="tel1" name="tel1" placeholder="tel1" value="<?php echo $tel1; ?>" class="form-control input-md" type="text">
                  </div>
                  <div class="col-md-4">
                  <input id="tel2" name="tel2" placeholder="tel2" value="<?php echo $tel2; ?>" class="form-control input-md" type="text">
                  </div>
                </div><br>
                <div class="form-group" style="margin-bottom: 5px;">
                  <div class="col-md-4"><input type="submit" class="btn btn-primary" name="modif" value="Modifier"></div>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>