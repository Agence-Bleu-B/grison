<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header class="container">
  <div class="row">
    <h1 class="col-xs-12 col-md-3">
      <a href="<?php echo site_url('accueil'); ?>">
        <img src="<?php echo img_url("grison_logo.png"); ?>" class="img-responsive">
      </a>
    </h1>
    <div class="col-xs-12 col-md-9">
      <!-- <h3 class="col-md-12"><small>Pose de conduits de désenfumage</small></h3> -->
      <nav class="h3 text-center">
        <a href="<?php echo site_url('accueil'); ?>" class="col-xs-12 col-sm-4 <?php if ($pagecours == 'accueil') echo 'actif' ?>">Accueil</a>
        <a href="<?php echo site_url('references'); ?>" class="col-xs-12 col-sm-4 <?php if ($pagecours == 'references') echo 'actif' ?>">Références</a>
        <a href="<?php echo site_url('contact'); ?>" class="col-xs-12 col-sm-4 <?php if ($pagecours == 'contact') echo 'actif' ?>">Contact</a>
      </nav>
    </div>
  </div>
</header>
<!-- SLIDER -->
<div class="container-fluid">
  <div id="slider" class="row">
    <div id="carousel-banner" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <!-- <ol class="carousel-indicators">
      <li data-target="#carousel-banner" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-banner" data-slide-to="1"></li>
      <li data-target="#carousel-banner" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php echo img_url("slider/slid1.jpg"); ?>" class="">
          <div class="carousel-caption">
            <h2 class="text-left">Spécialistes du désenfumage passif</h2>
            <p class="text-left">
              De nombreux partenaires nous on fait confiance !
              <br>
            </p>
            <a href="<?php echo site_url("references"); ?>" class="btn btn-primary">Découvrez nos réalisations</a>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo img_url("slider/slid3.jpg"); ?>" class="">
          <div class="carousel-caption">
            <h2 class="text-left">Travail dans de nombreux secteurs d'activités</h2>
            <p class="text-left lead">Hospitalier, Immobilier, Ephad, Industrie, Lycée...</p>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo img_url("slider/slid2.jpg"); ?>" class="">
          <div class="carousel-caption">
            <h2 class="text-left">Nous intervenons sur toute la france</h2>
            <a href="<?php echo site_url("contact"); ?>" class="btn btn-primary">Contactez nous</a>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control hidden-xs hidden-sm" href="#carousel-banner" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control hidden-xs hidden-sm" href="#carousel-banner" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
