<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>GESTION PDF</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row pad-top">
      		<div class="col-md-12">
                <form method="post" action="<?php echo site_url('admin/gestionpdf'); ?>" enctype="multipart/form-data">
                  <input type="file" name="file" class="btn btn-default"><br>
                  <input type="submit" name="upload" class="btn btn-default" >
                </form>
                <?php if(isset($message)){echo $message;}if(isset($message2)){
                  foreach ($message2 as $key => $value) {
                    echo $value;
                  }}   ?>
          </div>
          <div class="col-md-12" style="margin-top: 15px;"><h3>Fichiers enregistrés :</h3>
            <?php if (isset($pdf)&& $pdf != null) {
            foreach ($pdf as $key => $value) { ?>
            <div style="margin-top: 5px;">
              <a href="<?php echo base_url().'assets/pdf/'.$value; ?>" target="blank" >
                <?php echo $value; ?>
                </a>
                <span>   </span>
                <a href="<?php echo site_url('admin/gestionpdf?delete=').$value; ?>">
                  <button class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove-circle"></span>
                  </button>
                </a>
              </div> 
            <?php }} ?>
          </div>
      	</div>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>