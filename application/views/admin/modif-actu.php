<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>Modifications actualité</h2>   
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
                <div class="alert alert-danger">
                     <?php echo $message ; ?>
                </div>
            </div>
          </div> <?php
          } ?>
      		<form class="form-horizontal" method="post" action="">
            <fieldset>
            <!-- Titre -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="titre">Titre</label>
              <div class="col-md-4">
                  <input name="titre" id="titre" type="text" value="<?php if (isset($titre)){echo $titre;}?>"> 
              </div>
            </div>
            <!-- couverture -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="couv">couverture</label>
              <div class="col-md-4">
                  <input name="couverture" id="couv" type="text" value="<?php if (isset($couverture)){echo $couverture;}?>"> 
              </div>
            </div>
            <!-- Multiple Radios (inline) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radios">Cible</label>
              <div class="col-md-4"> 
                <label class="radio-inline" for="radios-0">
                  <input name="cible" id="radios-0" value="1" <?php if ($cible == 1) { echo 'checked="checked"';}  ?> type="radio">
                  Personnel
                </label> 
                <label class="radio-inline" for="radios-1">
                  <input name="cible" id="radios-1" value="2"<?php if ($cible == 2) { echo 'checked="checked"';}  ?> type="radio">
                  Publique
                </label>
              </div>
            </div>
            <!-- Textarea -->
            <div class="form-group">
              <div class="col-md-offset-1 col-md-10">                     
                <textarea class="form-control" id="textarea" name="text"><?php if (isset($text)){echo $text;}?></textarea>
              </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
              <div class="col-md-offset-1 col-md-10">
                <button id="button1id" name="modif" class="btn btn-success">Modifier</button>
                <button id="button2id" name="abandon" class="btn btn-danger">Abandonner</button>
              </div>
            </div>

            </fieldset>
            </form>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>