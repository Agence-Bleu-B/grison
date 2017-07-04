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
        <div class="col-md-3">
          <a href="#sliderCat1" data-lity>
            <img src="cro.png" class="img-responsive thumbnail">
            <p>Gallerie</p>
          </a>
        </div>
        <div class="col-md-5">
          <h4>Hopital de Crozon</h4>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4">
          <h4 class="title">Autres projets :</h4>
          <span class="badge">Ephad Delivet Ducey</span>
          <span class="badge">CHP Plérin</span>
          <span class="badge">Centre de Thalasso à Granville</span>
          <span class="badge">Ephad Maurice Peigné à Quévert</span>
          <span class="badge">Hôpital Quintin</span>
          <span class="badge">Résidences Séniors Les Girandières à Saint Malo</span>
        </div>
        <div id="sliderCat1" class="lity-hide">
          <div id="carousel-cat1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-cat1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-cat1" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="cro1.jpg" class="img-responsive">
                <div class="carousel-caption">
                  Hopital de Crozon
                </div>
              </div>
              <div class="item">
                <img src="cro2.jpg" class="img-responsive">
                <div class="carousel-caption">
                  Hopital de Crozon
                </div>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-cat1" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-cat1" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <?php } ?>
      <br>
      <?php if (isset($countCH) && $countIC != 0) { ?>
      <div class="row">
        <h3 class="col-xs-12">
          Immeubles et Centres Commerciaux
          <hr>
        </h3>
        <div class="col-md-3">
          <a href="#" data-lity>
            <img src="http://placehold.it/350x250" class="img-responsive thumbnail">
          </a>
        </div>
        <div class="col-md-5">
          <h4>Centre Commercial Alma (Rennes)</h4>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4">
          <h4 class="title">Autres projets :</h4>
          <span class="badge">Carré Feydeau - Nantes</span>
        </div>
      </div>
      <?php } ?>
      <br>
      <?php if (isset($countCH) && $countCC != 0) { ?>
      <div class="row">
        <h3 class="col-xs-12">
          Centres Culturels
          <hr>
        </h3>
        <div class="col-md-3">
          <a href="#" data-lity>
            <img src="http://placehold.it/350x250" class="img-responsive thumbnail">
          </a>
        </div>
        <div class="col-md-5">
          <h4>ESBANM (École supérieure des beaux-arts de Nantes Métropole)</h4>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4">
          <h4 class="title">Autres projets :</h4>
          <span class="badge">Bibliothèque Multimédia à Vocation Régional à Caen</span>
          <span class="badge">Vélodrome de Saint Quentin</span>
          <span class="badge">Le Jeu de Paume de Blois</span>
          <span class="badge">Bibliothèque et Archipel Habitat à Rennes</span>
          <span class="badge">Les Ateliers des Capucins à Brest</span>
        </div>
      </div>
      <?php } ?>
    </div>

  </div>
</section>
