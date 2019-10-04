<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <link rel="stylesheet" href="css/mystyles.css">
	<link rel="stylesheet" href="css/cards.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/filter.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/modal.css">
    

	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
    
    <?php
        include('include/nav.php');
    ?>

    <div class="hero is-medium has-background">
        <img src="imagenes/slider2.jpg" alt="" class="hero-background">
        <div class="hero-body">
            <div class="container">
              <h2 class="subtitle has-text-white">No estas seguro de que equipo elegir?</h2>
              <h1 class="title has-text-white">Proba nuestra <a href="" class="has-text-grey-light"><strong>Herramienta de Seleccion</strong></a>!</h1>
            </div>
        </div>
    </div>

    <section class="section">

        <div class="columns is-multiline">

            <div class="column is-full is-hidden-desktop">
            
                    
                <?php
                    include('php_include/getFiltrosMobile.php');
                ?>
            </div>

            <div class="column is-one-quarter is-hidden-touch">
                <p class="title">Filtros</p>
                
                <?php
                    include('php_include/getFiltros.php');
                ?>
            
            </div>

            <div class="column">
                <p class="title">Productos</p>
               
                <div class="columns is-multiline is-centered">
                    <?php
                        include('php_include/filterCard.php');
                    ?>
                </div>
                
            </div>

        </div>

    </section>

    <?php
        include('include/footer.html');
    ?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery.localscroll/jquery.localscroll.js"></script>
    <script src="node_modules/jquery.scrollto/jquery.scrollto.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>
</body>
</html>