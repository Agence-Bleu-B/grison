<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="content" class="container-fluid">
  <!-- SLIDER -->
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
            <a href="<?php echo site_url("accueil/references"); ?>" class="btn btn-primary">Découvrez nos réalisations</a>
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
            <a href="<?php echo site_url("accueil/contact"); ?>" class="btn btn-primary">Contactez nous</a>
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
    <!-- <img src="https://unsplash.it/2000/500/?random" class="img-responsive"> -->
    <!-- <img src="img" class="img-responsive"> -->
  </div>
  <div class="row">
    <div class="col-md-12 col-lg-8 col-lg-offset-2">
      <h2 class="title">Contact</h2>
      <br>

      <div class="row">
        <form class="col-xs-12 col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Sujet</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sujet">
          </div>
          <div class="form-group">
            <label for="exampleText">Message</label><br>
            <textarea class="form-control" rows="3" id="exampleText" name="msg" placeholder="Message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <div class="col-xs-12 col-md-6">
          <div class="map_responsive">
            <iframe frameborder="0" style="border: 0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2644.196724446364!2d-1.97885798433857!3d48.49111957925316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480e8ece08ac13dd%3A0xea62c6beba927332!2sZone+Artisanale%2C+22690+La+Vicomt%C3%A9-sur-Rance!5e0!3m2!1sfr!2sfr!4v1498135759468" allowfullscreen="true"></iframe>
          </div>
        </div>
      </div>
      <br>
    </div>

  </div>
</section>
