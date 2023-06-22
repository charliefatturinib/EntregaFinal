

<?php

  require_once  "libraries/funciones.php";

  $juegoSeleccionado = $_GET['ser'] ?? FALSE;

  $montanias = catalogo_x_juegos($juegoSeleccionado);


  $miTitulo = $juegoSeleccionado  ?  ucwords(str_replace("_", " ", $juegoSeleccionado)) : FALSE ;



?>

<div class="row mt-5">
<h1 class="text-center fw-bold" ><?= $miTitulo ?></h1>
<?php if(count($montanias)) { ?>
<?php foreach ($montanias as $nombre) { ?>
    <div class="col-4">
        <div class="card">
            <img style="height:300px;" src="img/<?= $nombre['imagen'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $nombre['velocidad'] ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?= $nombre['roller'] ?></h6>
                <p class="card-text text-success">Precio: <?= number_format($nombre['precio'], 2)  ?></p>

                <a href="index.php?sec=juego&id=<?= $nombre['id'] ?>" class="btn btn-success d-block py-3">Ver Mas</a>
            </div>
        </div>
    </div>

    <?php } ?>
    <?php }else{ ?>

        <div class="col">
            <h2 class="text-center mb-5">No se encontraron productos</h2>
        </div>

    <?php } ?>


</div>