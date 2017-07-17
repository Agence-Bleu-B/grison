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
              <!-- form supp -->
                <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                <div class="form-group">
                  <?php $v=0; foreach ($value['photos'] as $cle => $photo) { if($photo != 'noPics.png'){ ?>
                    
                  <div class="col-md-3" style="width: auto;"><label class="btn btn-danger" style="padding: 0px;margin-bottom: 10px;"><img src="<?php echo img_url($photo); ?>" alt="..." class="img-thumbnail img-responsive img-check" style="max-width: 200px;" ><input type="checkbox" name="tosup[]" id="item<?php echo $v; ?>" value="<?php echo $photo ; ?>" class="hidden" autocomplete="off"></label></div>
                
                <?php $v++;} } ?>
                </div>
                <div class="col-md-12" ><input type="submit" name="supphCH" value="supprimer"></div>
              </form>

              <!-- form add -->
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>" enctype="multipart/form-data" >
                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                <input type="file" name="photo">
                <div class="col-md-12" ><input type="submit" name="addphCH" value="upload"></div>
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
            <div class="col-md-12" ><h3>Immeubles et centres commerciaux</h3><a href="#ICnew" data-lity >nouveau</a></div>
            <!-- debut bloc new textes -->
            <div id="ICnew" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
                <div class="col-md-12" >Titre</div>
                <div class="col-md-12" ><input type="text" name="titre" style="width: 100%;margin-bottom: 15px;" ></div>
                <div class="col-md-12" >Texte</div>
                <div class="col-md-12" ><textarea name="texte" style="width: 100%;height: 250px;margin-bottom: 15px;" ></textarea></div>
                <div class="col-md-12" ><input type="submit" name="newIC" value="Créer"></div>
              </form>
            </div>
            <!-- fin bloc new textes -->
            <?php foreach ($IC['listIC'] as $key => $value) { ?>
            <!-- liens textes, photos et suppression -->
            <a class="col-md-4" href="#IC<?php echo $value['id']; ?>" data-lity ><?php echo $value['titre']; ?></a><a href="#ICim<?php echo $value['id']; ?>" class="col-md-1"  data-lity >Images</a><a href="#ICsup<?php echo $value['id']; ?>" class="col-md-6" data-lity >Supprimer</a><br>
            <!-- debut bloc textes -->
            <div id="IC<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                <div class="col-md-12" >Titre</div>
                <div class="col-md-12" ><input type="text" name="titre" style="width: 100%;margin-bottom: 15px;" value="<?php echo $value['titre']; ?>"></div>
                <div class="col-md-12" >Texte</div>
                <div class="col-md-12" ><textarea name="texte" style="width: 100%;height: 250px;margin-bottom: 15px;" ><?php echo $value['texte']; ?></textarea></div>
                <div class="col-md-12" ><input type="submit" name="modifIC" value="modifier"></div>
              </form>
            </div>
            <!-- fin bloc textes -->
            <!-- debut bloc photos -->
            <div id="ICim<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
              <!-- form supp -->
                <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                <div class="form-group">
                  <?php $v=0; foreach ($value['photos'] as $cle => $photo) { if($photo != 'noPics.png'){ ?>
                    
                  <div class="col-md-3" style="width: auto;"><label class="btn btn-danger" style="padding: 0px;margin-bottom: 10px;"><img src="<?php echo img_url($photo); ?>" alt="..." class="img-thumbnail img-responsive img-check" style="max-width: 200px;" ><input type="checkbox" name="tosup[]" id="item<?php echo $v; ?>" value="<?php echo $photo ; ?>" class="hidden" autocomplete="off"></label></div>
                
                <?php $v++;} } ?>
                </div>
                <div class="col-md-12" ><input type="submit" name="supphIC" value="supprimer"></div>
              </form>

              <!-- form add -->
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>" enctype="multipart/form-data" >
                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                <input type="file" name="photo">
                <div class="col-md-12" ><input type="submit" name="addphIC" value="upload"></div>
              </form>
            </div>
            <!-- fin bloc photos -->
            <!-- debut bloc suppression  -->
            <div id="ICsup<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                <div class="col-md-12" >Voulez vous vraiment supprimer cette entrée ?</div>
                <div class="col-md-12" ><input type="submit" name="supressionIC" value="Supprimer"></div>
              </form>
            </div>
            <!-- fin bloc suppression -->
            <?php }  ?>
            <div class="col-md-12" ><h3>Centres culturels</h3><a href="#CCnew" data-lity >nouveau</a></div>
            <!-- debut bloc new textes -->
            <div id="CCnew" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
                <div class="col-md-12" >Titre</div>
                <div class="col-md-12" ><input type="text" name="titre" style="width: 100%;margin-bottom: 15px;" ></div>
                <div class="col-md-12" >Texte</div>
                <div class="col-md-12" ><textarea name="texte" style="width: 100%;height: 250px;margin-bottom: 15px;" ></textarea></div>
                <div class="col-md-12" ><input type="submit" name="newCC" value="Créer"></div>
              </form>
            </div>
            <!-- fin bloc new textes -->
            <?php foreach ($CC['listCC'] as $key => $value) { ?>
            <!-- liens textes, photos et suppression -->
            <a class="col-md-4" href="#CC<?php echo $value['id']; ?>" data-lity ><?php echo $value['titre']; ?></a><a href="#CCim<?php echo $value['id']; ?>" class="col-md-1"  data-lity >Images</a><a href="#CCsup<?php echo $value['id']; ?>" class="col-md-6" data-lity >Supprimer</a><br>
            <!-- debut bloc textes -->
            <div id="CC<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                <div class="col-md-12" >Titre</div>
                <div class="col-md-12" ><input type="text" name="titre" style="width: 100%;margin-bottom: 15px;" value="<?php echo $value['titre']; ?>"></div>
                <div class="col-md-12" >Texte</div>
                <div class="col-md-12" ><textarea name="texte" style="width: 100%;height: 250px;margin-bottom: 15px;" ><?php echo $value['texte']; ?></textarea></div>
                <div class="col-md-12" ><input type="submit" name="modifCC" value="modifier"></div>
              </form>
            </div>
            <!-- fin bloc textes -->
            <!-- debut bloc photos -->
            <div id="CCim<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
              <!-- form supp -->
                <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                <div class="form-group">
                  <?php $v=0; foreach ($value['photos'] as $cle => $photo) { if($photo != 'noPics.png'){ ?>
                    
                  <div class="col-md-3" style="width: auto;"><label class="btn btn-danger" style="padding: 0px;margin-bottom: 10px;"><img src="<?php echo img_url($photo); ?>" alt="..." class="img-thumbnail img-responsive img-check" style="max-width: 200px;" ><input type="checkbox" name="tosup[]" id="item<?php echo $v; ?>" value="<?php echo $photo ; ?>" class="hidden" autocomplete="off"></label></div>
                
                <?php $v++;} } ?>
                </div>
                <div class="col-md-12" ><input type="submit" name="supphCC" value="supprimer"></div>
              </form>

              <!-- form add -->
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>" enctype="multipart/form-data" >
                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                <input type="file" name="photo">
                <div class="col-md-12" ><input type="submit" name="addphCC" value="upload"></div>
              </form>
            </div>
            <!-- fin bloc photos -->
            <!-- debut bloc suppression  -->
            <div id="CCsup<?php echo $value['id']; ?>" class="col-md-12 jumbotron lity-hide" style="margin-left: 30px;margin-right: 100px;width: 80%;border-radius: 10px;">
              <form method="post" action="<?php echo site_url('admin/realisations'); ?>">
                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                <div class="col-md-12" >Voulez vous vraiment supprimer cette entrée ?</div>
                <div class="col-md-12" ><input type="submit" name="supressionCC" value="Supprimer"></div>
              </form>
            </div>
            <!-- fin bloc suppression -->
            <?php }  ?>
      	</div>
      	<!-- /. contenu  -->
         <!-- /. ROW  -->           
	</div>
     <!-- /. PAGE INNER  -->
</div>