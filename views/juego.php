<?php
    require_once "libraries/funciones.php";

    $id = $_GET['id'] ?? false;

    $montana = producto_x_id($id);


?>


<!--  -->


<?php if(isset($montana)){  ?>
     <h1 class="text-center fw-bold my-5 "><?= $montana['roller']  ?></h1>

     <div class="col">
        <div class="card mb-4">
            <div class="row">
                <div class="col-5">
                    <img class="img-fluid" src="img/<?= $montana['imagen'] ?>" alt="">
                </div>
                <div class="col-7">
                    <div class="card-body">
                        <p class="fs-4 m-0 fw-bold text-danger"><?= $montana['duracion'] ?></p>
                        <h2 class="card-title fs-2 mb-4"><?= $montana['altura'] ?></h2>
                    </div>
                    <ul class="list-group">
                        <p class="card-text">Año: <?= $montana['año'] ?></p>
                        <p class="card-text">parque: <?= $montana['parque'] ?></p>
                        <p class="card-text">construccion: <?= $montana['construccion'] ?></p>
                        <p class="card-text">largo: <?= $montana['largo'] ?></p>
                    </ul>
                    <div class="card-body mt-auto">
                            <div class="fs-3 mb-3 fw-bold text-center text-danger">$<?= number_format($montana['precio'],2, ",", ".") ?></div>

                            <a href="#" class="btn btn-success w-100 fw-bold">Comprar</a>


                    </div>
                </div>

            </div>

        </div>
     </div>




<?php } ?>