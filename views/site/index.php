<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $dataProvider yii\data\ActiveDataProvider 
/* @var $mobils app\models\Mobil[] */
/** @var yii\web\View $this */

$this->title = 'Car Selling';
?>
<div class="body-content">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/63764/pexels-photo-63764.jpeg?cs=srgb&dl=car-cars-lamborghini-aventador-63764.jpg&fm=jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block text-left">
                    <div class="caption-content">
                        <h1>Welcome to Car Selling!</h1>
                        <p class="lead">Buy and sell cars with ease.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.jdpower.com/Average%20Weight%20Of%20A%20Car.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block text-left">
                    <div class="caption-content">
                        <h1>Welcome to Car Selling!</h1>
                        <p class="lead">Buy and sell cars with ease.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://th.bing.com/th/id/R.bdf5cf348edf7c70cd98fe3acfbc6a09?rik=2zmAmMJPk7FLiQ&riu=http%3a%2f%2feskipaper.com%2fimages%2fawesome-red-car-2.jpg&ehk=hfs2e%2beQOZAfToNy2ZOdR7aC5rKq%2fB2YW83HeXza3h0%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block text-left">
                    <div class="caption-content">
                        <h1>Welcome to Car Selling!</h1>
                        <p class="lead">Buy and sell cars with ease.</p>
                    </div>
                </div>
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

<div class="container" id="display-car">
    <div class="row">
    <?php foreach ($mobils as $mobil): ?>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="card shadow rounded-4 border-0">
                <div class="position-relative">
                    <img src="https://cdn.jdpower.com/Average%20Weight%20Of%20A%20Car.jpg" class="card-img-top rounded-4" alt="">
                    <div class="position-absolute bottom-0 start-0 px-3 py-2 bg-dark text-white rounded-end">
                        <span class="badge bg-secondary">Rp<?= Html::encode($mobil->harga) ?></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title"><?= Html::encode($mobil->nama_mobil) ?></h5>
                        <p class="card-text fst-italic"><?= Html::encode($mobil->tahun) ?></p>
                    </div>
                    <p class="card-text mb-1 fst-italic"><?= Html::encode($mobil->kondisi) ?></p>
                    <hr>
                    <div>
                        <button class="btn btn-dark w-100" onclick="" data-bs-toggle="modal" data-bs-target="#beliModal">
                            Beli
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>