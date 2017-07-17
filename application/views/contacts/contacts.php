<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="content" class="container-fluid">

  <div class="row">
    <div class="col-md-12 col-lg-8 col-lg-offset-2">
      <h2 class="title">Contact</h2>
      <br>

      <div class="row">
        <form class="col-xs-12 col-md-6" method="post" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="sender" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Sujet</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="sujet" placeholder="Sujet">
          </div>
          <div class="form-group">
            <label for="exampleText">Message</label><br>
            <textarea class="form-control" rows="3" id="exampleText" name="msg" placeholder="Message"></textarea>
          </div>
          <button type="submit" name="envoi" class="btn btn-primary">Envoyer</button>
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
