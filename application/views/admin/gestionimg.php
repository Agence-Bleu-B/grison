<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>GESTION IMAGES</h2>
            </div>
        </div>
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row text-center pad-top">
      		<div class="col-md-12">
                <form method="post" action="<?php echo site_url('admin/gestionimg'); ?>" enctype="multipart/form-data">
                  <input type="file" name="photo" class="btn btn-default"><br>
                  <input type="submit" name="upload" class="btn btn-default" >
                </form>
                <?php if(isset($message)){echo $message;}if(isset($message2)){
                  foreach ($message2 as $key => $value) {
                    echo $value;
                  }}   ?>
          </div>
          <div class="col-md-12" style="margin-top: 15px;">
            <h3>Fichiers enregistrés :</h3>
            <br>
            <?php if (isset($medias)&& $medias != null) {
            $i=1; // compteur d'images
            foreach ($medias as $key => $value) { ?>
            <div class="col-xs-2">
              <a class="col-xs-12" href="<?php echo base_url().'assets/images/medias/'.$value; ?>" target="blank" >
                <img class="thumbnail img-responsive center-block" src="<?php echo base_url().'assets/images/medias/'.$value; ?>">
              </a>
                <span>   </span>
              <a class="col-xs-12" href="<?php echo site_url('admin/gestionimg?delete=').$value; ?>">
                <button class="btn btn-danger">
                  <span class="glyphicon glyphicon-remove-circle"></span>
                </button>
              </a>
            </div>
            <?php if ($i % 6 == 0): //Toute les 6 images?>
              <div class="clearfix"></div>
              <br>
            <?php endif; $i++;?>
            <?php }} ?>
          </div>

        </div>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->
	</div>
     <!-- /. PAGE INNER  -->
</div>
