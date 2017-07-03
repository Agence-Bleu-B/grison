<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>ACCUEIL ADMINISTRATION</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row text-center pad-top">
      		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
          		<div class="div-square">
	               	<a href="<?php echo site_url('admin/gestionpdf'); ?>" >
						<i class="fa fa-file-pdf-o fa-5x"></i>
	          			<h4>PDF</h4>
	          		</a>
          		</div>
          	</div>
          	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
          		<div class="div-square">
	               	<a href="<?php echo site_url('admin/gestionimg'); ?>" >
						<i class="fa fa-picture-o fa-5x"></i>
	          			<h4>Images</h4>
	          		</a>
          		</div>
          	</div>
          	
          	</div>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>