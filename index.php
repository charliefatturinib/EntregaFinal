
<?php
    
    $secciones_validas = [
       "home" => [
         "titulo" => "Bievenidos"
       ],
       "todoslosjuegos" => [
          "titulo" => "Nombre"
       ],
       "montanias" => [
          "titulo" => "Detalle"
       ],
       "juego" => [
        "titulo" => "Juego particular"
       ],
       "informacion" => [
        "titulo" => "informacion del parque"
       ],
       "contacto" => [
        "titulo" => "contactanos"
       ],

       "grupotickets" => [
        "titulo" => "seccion grupo tickets"
       ],

       "alumno" => [
        "titulo" => "datos"
       ],

       "mapadelparque" => [
        "titulo" => "seccion mapa del parque"
       ]


    ];
    
    $seccion = $_GET['sec'] ?? "home";


    /* Buscar si existe el indice del array */
    if(!array_key_exists($seccion, $secciones_validas)){
        $vista = "404";
        $titulo ="404- Pagina no encontrada";
    }else {
      $vista = $seccion;
      $titulo = $secciones_validas[$seccion]['titulo'];
    }
   

?>












<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parque VertigoMax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    

<!--Navegacion-->
  
  <nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <a class="navbar-brand text-warning fw-bold" href="index.php?sec=home" >Parque VertigoMax</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?sec=home">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="index.php?sec=todoslosjuegos">Todos los Juegos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="index.php?sec=informacion">Informacion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=contacto">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=alumno">Alumno</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tickets/Promos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?sec=vip">VIP</a></li>
            <li><a class="dropdown-item" href="index.php?sec=grupotickets">Grupo Tickets</a></li>
            <li><a class="dropdown-item" href="index.php?sec=mapadelparque">Mapa del Parque</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
    





<!-- Main -->
<main class="container">

        <?php
            require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php";

        ?>
</main>








      

<!-- footer -->
<footer class="bg-primary text-white text-center p-4 mt-5">
    <p>Todos los derechos reservados - cfp20 - 2023  CABA Argentina</p>
</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>












