<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>Accès administration</h2>
            </div>
        </div>
        <hr>
         <!-- /. ROW  -->
      	<form class="form-horizontal" method="post" action="<?php echo site_url('admin'); ?>">
			<fieldset>
				<!-- Text input-->
				<div class="form-group">
				  <div class="col-md-4">
				  <input id="textinput" name="login" placeholder="login" class="form-control input-md" type="text">
				  </div>
				</div>
				<!-- Password input-->
				<div class="form-group">
				  <div class="col-md-4">
				    <input id="passwordinput" name="password" placeholder="mot de passe" class="form-control input-md" type="password">
				  </div>
				</div>
				<!-- Button -->
				<div class="form-group">
				  <div class="col-md-4">
				    <button id="singlebutton" name="val" class="btn btn-primary">Valider</button>
				  </div>
				</div>
			</fieldset>
			</form>
         <!-- /. ROW  -->
		</div>
     <!-- /. PAGE INNER  -->
    </div>
