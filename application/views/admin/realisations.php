<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>REALISATIONS</h2>   
            </div>
        </div>              
         <!-- /. ROW  -->
      	<hr />
      	<!-- contenu a partir d'ici -->
      	<div class="row pad-top">
          	<div class="col-md-12" ><h3>Centres hospitaliers</h3></div>
            <?php foreach ($CH['listCH'] as $key => $value) { ?>
            <a href="#test<?php echo $value['id']; ?>" data-lity >test</a>
            <div id="test<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;">
              <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                <div class="col-md-12" ><input type="text" name="titre" style="width: 50%;" value="<?php echo $value['titre']; ?>"></div>
                <div class="col-md-12" ><textarea style="width: 50%;height: 200px;" ><?php echo $value['texte']; ?></textarea></div>
                <div class="col-md-12" ><input type="submit" name="modifCH" value="modifier"></div>
              </form>
            </div>
            <?php }  ?>
            <div class="col-md-12" ><h3>Immeubles et centres commerciaux</h3></div>
            <?php foreach ($IC['listIC'] as $key => $value) { ?>
              <div class="col-md-12" >chantier</div>
            <?php }  ?>
            <div class="col-md-12" ><h3>Centres culturels</h3></div>
            <?php foreach ($CC['listCC'] as $key => $value) { ?>
              <div class="col-md-12" >chantier</div>
            <?php }  ?>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>