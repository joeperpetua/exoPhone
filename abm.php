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
    <p class="title abm">ABM <a href="" class="button is-pulled-right"><i class="fas fa-plus"></i></a></p>
    <div class="box">
        <div class="columns is-multiline" style="overflow: auto; max-height: 100%;">
            
            <?php
                include('php_include/getItemABM.php');
            ?>
            
        </div>
    </div>

</section>



<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/jquery.localscroll/jquery.localscroll.js"></script>
<script src="node_modules/jquery.scrollto/jquery.scrollto.js"></script>
<script type="text/javascript" src="js/nav.js"></script>

</body>
</html>