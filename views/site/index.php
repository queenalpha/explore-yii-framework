<?php

/** @var yii\web\View $this */

$this->title = 'Car Selling';
?>
<div class="body-content">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.pexels.com/photos/63764/pexels-photo-63764.jpeg?cs=srgb&dl=car-cars-lamborghini-aventador-63764.jpg&fm=jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.jdpower.com/Average%20Weight%20Of%20A%20Car.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://th.bing.com/th/id/R.bdf5cf348edf7c70cd98fe3acfbc6a09?rik=2zmAmMJPk7FLiQ&riu=http%3a%2f%2feskipaper.com%2fimages%2fawesome-red-car-2.jpg&ehk=hfs2e%2beQOZAfToNy2ZOdR7aC5rKq%2fB2YW83HeXza3h0%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="site-index">
    <div class="jumbotron">
        <h1>Welcome to Car Selling!</h1>
        <p class="lead">Buy and sell cars with ease.</p>
        <p><a class="btn btn-lg btn-success" href="/site/register">Register</a></p>
        <p><a class="btn btn-lg btn-primary" href="/site/login">Login</a></p>
    </div>
</div>