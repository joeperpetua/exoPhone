<!DOCTYPE html>
<html>
<head>
	<title>exoPhone</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/mystyles.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/modal.css">
	<link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/abm.css">

	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>

<?php
    include('include/nav.php');
?>

<section class="section">
    <p class="title abm">ABM <a href="add_product.php" class="button is-pulled-right"><i class="fas fa-plus"></i></a></p>
    <div class="tabs is-toggle" id="tabs">
        <ul>
            <li class="is-active" data-tab="1"><a>Equipos</a></li>
            <li data-tab="2"><a>Usuarios</a></li>
        </ul>
    </div>
    <div class="box" id="body">
        <div class="columns is-multiline" style="overflow: auto; max-height: 100%;">

        <div class="column is-full container is-active" data-content="1">
            <?php
                include('php_include/abm/getItemABM.php');
            ?>
        </div>

        <div class="is-full container" data-content="2">
            <table class="table is-fullwidth is-striped is-hoverable">
                <thead>
                    <tr>
                        <th>Nombre de usuario</th>
                        <th>Correo</th>
                        <th>Fecha de registro</th>
                        <th>Ultima conexion</th>
                        <th>Verificacion</th>
                    </tr>
                </thead>

                <tbody>
                        <?php include('php_include/abm/getUserABM.php'); ?>
                </tbody>
            </table>
            
        </div>
            
            
            
        </div>
    </div>

</section>



<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/jquery.localscroll/jquery.localscroll.js"></script>
<script src="node_modules/jquery.scrollto/jquery.scrollto.js"></script>
<script type="text/javascript" src="js/nav.js"></script>

</body>
</html>