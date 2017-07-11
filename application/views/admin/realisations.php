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
          	<div class="col-md-12" ><h3>Centres hospitaliers</h3><a href="#CHnew" data-lity >nouveau</a></div>
            <!-- debut bloc new textes -->
            <div id="CHnew" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
                <div class="col-md-12" >Titre</div>
                <div class="col-md-12" ><input type="text" name="titre" style="width: 100%;margin-bottom: 15px;" ></div>
                <div class="col-md-12" >Texte</div>
                <div class="col-md-12" ><textarea name="texte" style="width: 100%;height: 250px;margin-bottom: 15px;" ></textarea></div>
                <div class="col-md-12" ><input type="submit" name="newCH" value="Créer"></div>
              </form>
            </div>
            <!-- fin bloc new textes -->
            <?php foreach ($CH['listCH'] as $key => $value) { ?>
            <!-- liens textes, photos et suppression -->
            <a class="col-md-4" href="#CH<?php echo $value['id']; ?>" data-lity ><?php echo $value['titre']; ?></a><a href="#CHim<?php echo $value['id']; ?>" class="col-md-1"  data-lity >Images</a><a href="#CHsup<?php echo $value['id']; ?>" class="col-md-6" data-lity >Supprimer</a><br>
            <!-- debut bloc textes -->
            <div id="CH<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                <div class="col-md-12" >Titre</div>
                <div class="col-md-12" ><input type="text" name="titre" style="width: 100%;margin-bottom: 15px;" value="<?php echo $value['titre']; ?>"></div>
                <div class="col-md-12" >Texte</div>
                <div class="col-md-12" ><textarea name="texte" style="width: 100%;height: 250px;margin-bottom: 15px;" ><?php echo $value['texte']; ?></textarea></div>
                <div class="col-md-12" ><input type="submit" name="modifCH" value="modifier"></div>
              </form>
            </div>
            <!-- fin bloc textes -->
            <!-- debut bloc photos -->
            <div id="CHim<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                <div class="col-md-12" ><input type="submit" name="modifCH+" value="modifier"></div>
              </form>
            </div>
            <!-- fin bloc photos -->
            <!-- debut bloc suppression  -->
            <div id="CHsup<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                <div class="col-md-12" >Voulez vous vraiment supprimer cette entrée ?</div>
                <div class="col-md-12" ><input type="submit" name="supressionCH" value="Supprimer"></div>
              </form>
            </div>
            <!-- fin bloc suppression -->
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