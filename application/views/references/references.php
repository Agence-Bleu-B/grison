<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="content" class="container-fluid">
  
  <div class="row">
    <div class="col-md-12 col-lg-8 col-lg-offset-2">
      <h2 class="title">Nos Références</h2>
      <br>
      <?php if (isset($countCH) && $countCH != 0) { ?>
      <div class="row">
        <h3 class="col-xs-12">
          Centres Hospitaliers
          <hr>
        </h3>

        <!-- debut du premeir bloc -->
        <div class="tab-content">
        <?php $i = 0; foreach ($listCH as $key => $value) { ?>
        <div <?php if($i == 0){echo 'class="tab-pane active"';} else{echo 'class="tab-pane"';} ?> id="<?php echo 'tab_ch'.$value['id']; ?>">
          <div class="col-md-3">
            <a href="#sliderCat1<?php echo $i; ?>" data-lity>
              <img src="<?php echo img_url($value['photos'][0]); ?>" class="img-responsive thumbnail">
            </a>
          </div>
          <div id="sliderCat1<?php echo $i; ?>" class="lity-hide">
            <div id="carousel-cat1<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
              <?php $j = 0; foreach ($value['photos'] as $ke => $val) { ?>
                <li data-target="#carousel-cat1<?php echo $i; ?>" data-slide-to="<?php echo $j ; ?>" <?php if($j == 0){ echo 'class="active"';} ?>></li>
              <?php $j++; } ?>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
              <?php $z = 0; foreach ($value['photos'] as $k => $va) { ?>
                <div class="item <?php if($z == 0){ echo 'active';} ?>">
                  <img src="<?php echo img_url($value['photos'][0]); ?>" class="img-responsive">
                  <div class="carousel-caption">
                    <?php echo $value['titre']; ?>
                  </div>
                </div>
                <?php $z++; } ?>
              </div>

              <!-- Controls -->
              <?php if ($listCH[$i]['nbtof'] > 1) { ?>
              <a class="left carousel-control" href="#carousel-cat1<?php echo $i; ?>" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-cat1<?php echo $i; ?>" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-5">
            <h4><?php echo $value['titre']; ?></h4>
            <p class="text-justify"><?php echo $value['texte'] ; ?></p>
          </div>
        </div>
        <?php $i++; } ?>
        </div>
        <!-- fin du premeir bloc -->
        <!-- debut second bloc -->
        <div class="col-md-4">
          <h4 class="title">Autres projets :</h4>
          <ul class="nav nav-pills nav-stacked">
          <?php $i = 0; foreach ($listCH as $key => $value) { ?>
          <li role="presentation" <?php if($i == 0){echo 'class="active badge"';} else{echo 'class="badge"';} ?>><a href="<?php echo '#tab_ch'.$value['id']; ?>" data-toggle="pill" ><span class=""><?php echo $value['titre']; ?></span></a></li>
          <?php $i++; } ?>
          </ul>
        </div>
        <!-- fin second bloc -->
      </div>
      <?php } ?>
      <br>
      <?php if (isset($countIC) && $countIC != 0) { ?>
      <div class="row">
        <h3 class="col-xs-12">
          Immeubles et Centres Commerciaux
          <hr>
        </h3>
        <!-- debut premier bloc -->
        <div class="tab-content">
        <?php $i = 0; foreach ($listIC as $key => $value) { ?>
        <div <?php if($i == 0){echo 'class="tab-pane active"';} else{echo 'class="tab-pane"';} ?> id="<?php echo 'tab_ic'.$value['id']; ?>">
          <div class="col-md-3">
            <a href="#sliderCat2<?php echo $i; ?>" data-lity>
              <img src="<?php echo img_url($value['photos'][0]); ?>" class="img-responsive thumbnail">
            </a>
          </div>
          <div id="sliderCat2<?php echo $i; ?>" class="lity-hide">
            <div id="carousel-cat2<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
              <?php $j = 0; foreach ($value['photos'] as $ke => $val) { ?>
                <li data-target="#carousel-cat2<?php echo $i; ?>" data-slide-to="<?php echo $j ; ?>" <?php if($j == 0){ echo 'class="active"';} ?>></li>
              <?php $j++; } ?>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
              <?php $z = 0; foreach ($value['photos'] as $k => $va) { ?>
                <div class="item <?php if($z == 0){ echo 'active';} ?>">
                  <img src="<?php echo img_url($value['photos'][$z]); ?>" class="img-responsive">
                  <div class="carousel-caption">
                    <?php echo $value['titre']; ?>
                  </div>
                </div>
                <?php $z++; } ?>
              </div>

              <!-- Controls -->
              <?php if ($listIC[$i]['nbtof'] > 1) { ?>
              <a class="left carousel-control" href="#carousel-cat2<?php echo $i; ?>" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-cat2<?php echo $i; ?>" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-5">
            <h4><?php echo $value['titre']; ?></h4>
            <p class="text-justify"><?php echo $value['texte'] ; ?></p>
          </div>
        </div>
        <?php $i++; } ?>
        </div>
        <!-- fin premier bloc -->
        <!-- debut second bloc -->
        <div class="col-md-4">
          <h4 class="title">Autres projets :</h4>
          <ul class="nav nav-pills nav-stacked">
          <?php $i = 0; foreach ($listIC as $key => $value) { ?>
          <li role="presentation" <?php if($i == 0){echo 'class="active badge"';} else{echo 'class="badge"';} ?>><a href="<?php echo '#tab_ic'.$value['id']; ?>" data-toggle="pill" ><span class=""><?php echo $value['titre']; ?></span></a></li>
          <?php $i++; } ?>
          </ul>
        </div>
        <!-- fin second bloc -->
      </div>
      <?php } ?>
      <br>
      <?php if (isset($countCH) && $countCC != 0) { ?>
      <div class="row">
        <h3 class="col-xs-12">
          Centres Culturels
          <hr>
        </h3>
        <!-- premeir bloc -->
        <div class="tab-content">
        <?php $i = 0; foreach ($listCC as $key => $value) { ?>
        <div <?php if($i == 0){echo 'class="tab-pane active"';} else{echo 'class="tab-pane"';} ?> id="<?php echo 'tab_cc'.$value['id']; ?>">
          <div class="col-md-3">
            <a href="#sliderCat3<?php echo $i; ?>" data-lity>
              <img src="<?php echo img_url($value['photos'][0]); ?>" class="img-responsive thumbnail">
            </a>
          </div>
          <div id="sliderCat3<?php echo $i; ?>" class="lity-hide">
            <div id="carousel-cat3<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
              <?php $j = 0; foreach ($value['photos'] as $ke => $val) { ?>
                <li data-target="#carousel-cat3<?php echo $i; ?>" data-slide-to="<?php echo $j ; ?>" <?php if($j == 0){ echo 'class="active"';} ?>></li>
              <?php $j++; } ?>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
              <?php $z = 0; foreach ($value['photos'] as $k => $va) { ?>
                <div class="item <?php if($z == 0){ echo 'active';} ?>">
                  <img src="<?php echo img_url($value['photos'][$z]); ?>" class="img-responsive">
                  <div class="carousel-caption">
                    <?php echo $value['titre']; ?>
                  </div>
                </div>
                <?php $z++; } ?>
              </div>

              <!-- Controls -->
              <?php if ($listCC[$i]['nbtof'] > 1) { ?>
              <a class="left carousel-control" href="#carousel-cat3<?php echo $i; ?>" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-cat3<?php echo $i; ?>" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-5">
            <h4><?php echo $value['titre']; ?></h4>
            <p class="text-justify"><?php echo $value['texte'] ; ?></p>
          </div>
        </div>
        <?php $i++; } ?>
        </div>
        <!-- second bloc -->
        <div class="col-md-4">
          <h4 class="title">Autres projets :</h4>
          <ul class="nav nav-pills nav-stacked">
          <?php $i = 0; foreach ($listCC as $key => $value) { ?>
          <li role="presentation" <?php if($i == 0){echo 'class="active badge"';} else{echo 'class="badge"';} ?>><a href="<?php echo '#tab_cc'.$value['id']; ?>" data-toggle="pill" ><span class=""><?php echo $value['titre']; ?></span></a></li>
          <?php $i++; } ?>
          </ul>
        </div>
      </div>
      <?php } ?>
    </div>

  </div>
</section>
