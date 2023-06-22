<?php 
  require_once "libraries/funciones.php";

  $montaRusa = catalogo_completo ();


?>



<!-- Todos los juegos -->

<h1 class="text-center mt-2">Todos los juegos</h1>

<div class="row mt-5">


    <?php foreach ($montaRusa as $nombre) { ?>
    <div class="col-4 mb-3">
        <div class="card">
            <img style="height:300px;" src="img/<?= $nombre['imagen'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $nombre['roller'] ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $nombre['construccion'] ?></h6>
                <p class="card-text text-success">Precio: <?= number_format($nombre['precio'], 2)  ?></p>
                <a href="index.php?sec=nombre&id=<?= $nombre['id'] ?>" ></a>
                
                <button class="btn btn-primary" type="submit">PROMO</button>
            </div>
        </div>
    </div>
         <?php } ?>

</div>