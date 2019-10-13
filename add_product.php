<?php

require('php_config/connect.php');
?>

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

<section class="section">
    <a href="abm.php" class="button back">Volver a la lista </a>
    <hr>
    <div class="tabs is-toggle" id="tabs">
        <ul>
            <li class="is-active" data-tab="1"><a>Dispositivo</a></li>
            <li data-tab="2"><a>XPU</a></li>
            <li data-tab="3"><a>Memoria</a></li>
            <li data-tab="4"><a>Pantalla</a></li>
            <li data-tab="5"><a>Bateria</a></li>
            <li data-tab="6"><a>Conectividad</a></li>
            <li data-tab="7"><a>Extras</a></li>
            <li data-tab="8"><a>Camaras</a></li>
            <li data-tab="9"><a>Categoria</a></li>
            <li data-tab="10"><a>Producto</a></li>
        </ul>
    </div>
    <div class="box">
        <div class="columns is-multiline is-centered" style="overflow: auto; max-height: 100%;">
            
            <?php
                include('php_include/abm/getAdd.php');
            ?>
            
        

</section>



<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/jquery.localscroll/jquery.localscroll.js"></script>
<script src="node_modules/jquery.scrollto/jquery.scrollto.js"></script>
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/generate_cam.js"></script>

</body>
</html>


<!-- PHP -->



<?php

$target_dir = "imagenes/productos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

if(isset($_POST['submit'])){ 

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

        // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
    
    //DISPOSITIVO
    $disp_brand = $_POST['disp_brand'];
    $disp_model = $_POST['disp_model'];
    $disp_code = $_POST['disp_code'];
    $disp_year = $_POST['disp_year'];
    $disp_so = $_POST['disp_so'];
    $disp_so_version = $_POST['disp_so_version'];
    $disp_color = $_POST['disp_color'];
    $disp_pic = $target_file;

    $sql = "INSERT INTO dispositives (disp_brand, disp_model, disp_code, disp_so, disp_so_version, disp_year, disp_color, disp_pic)
    VALUES ('$disp_brand', '$disp_model', '$disp_code', '$disp_so', '$disp_so_version', '$disp_year', '$disp_color', '$disp_pic');";


   
   
   
    //XPU
    $cpu_brand = $_POST['cpu_brand'];
    $cpu_model = $_POST['cpu_model'];
    $cpu_cores = $_POST['cpu_cores'];
    $gpu_brand = $_POST['gpu_brand'];
    $gpu_model = $_POST['gpu_model'];

    $sql .= "INSERT INTO xpu (cpu_brand, cpu_model, cpu_cores, gpu_brand, gpu_model)
    VALUES ('$cpu_brand', '$cpu_model', '$cpu_cores', '$gpu_brand', '$gpu_model');";


    //MEMORY
    $ram_size = $_POST['ram_size'];
    $rom_size = $_POST['rom_size'];
    $sd_size = $_POST['sd_size'];

    $sql .= "INSERT INTO memories (ram_size, rom_size, sd_size)
    VALUES ('$ram_size' , '$rom_size' , '$sd_size');";


    //PANTALLA
    $screen_size = $_POST['screen_size'];
    $screen_reso = $_POST['screen_reso'];
    $screen_type = $_POST['screen_type'];
    $screen_aspect_ratio = $_POST['screen_aspect_ratio'];

    $sql .= "INSERT INTO screens (screen_size, screen_reso, screen_type, screen_aspect_ratio)
    VALUES ('$screen_size', '$screen_reso', '$screen_type', '$screen_aspect_ratio');";


    //BATERIA
    $battery_type = $_POST['battery_type'];
    $battery_capacity = $_POST['battery_size'];
    $battery_qc = $_POST['battery_qc'];
    $battery_wc = $_POST['battery_wc'];

    $sql .= "INSERT INTO batteries (battery_type, battery_capacity, battery_qc, battery_wc)
    VALUES ('$battery_type', '$battery_capacity', '$battery_qc', '$battery_wc');";

    //CONECTIVIDAD
    $sim_type = $_POST['sim_type'];
    $usb_type = $_POST['usb_type'];
    $has_nfc = $_POST['has_nfc'];
    $has_irc = $_POST['has_irc'];
    $has_lte = $_POST['has_lte'];

    $sql .= "INSERT INTO connectivity (sim_type, usb_type, has_nfc, has_irc, has_lte)
    VALUES ('$sim_type', '$usb_type', '$has_nfc', '$has_irc', '$has_lte');";


    //EXTRAS
    $fingerprint_type = $_POST['fingerprint_type'];
    $speaker_type = $_POST['speaker_type'];
    $water_resistant_grade = $_POST['water_resistant_grade'];
    $has_headphone_jack = $_POST['has_headphone_jack'];

    $sql .= "INSERT INTO extras (fingerprint_type, speaker_type, water_resistant_grade, has_headphone_jack)
    VALUES ('$fingerprint_type', '$speaker_type', '$water_resistant_grade', '$has_headphone_jack');";

    //CATEGORIA
    $category = $_POST['category'] ;   
    
    $sql .="INSERT INTO category (cat) VALUES ('$category');";   
      

    //PRODUCTO
    $sql3="SELECT MAX(id_product) AS max_id FROM products";
    $consulta3=mysqli_query($connection,$sql3);

    $xd=mysqli_fetch_array($consulta3);
    $id = $xd['max_id'];
    $id++;
    
    $product_stock = $_POST['product_stock'];
    $product_price = $_POST['product_price'];

    $sql .= "INSERT INTO products (id_dispositive, id_xpu, id_memory, id_screen, id_battery, id_connectivity, id_extras, id_cat, product_stock, product_price, listed)
    VALUES ('$id', '$id', '$id', '$id', '$id', '$id', '$id', '$id', '$product_stock', '$product_price', '1');";


    $cant_cam = $_POST['cant_cam'];
    
    switch ($cant_cam) {
        case '1':
            $lens_type_1 = $_POST['lens_type_1'];
            $lens_mp_1 = $_POST['lens_mp_1'];
            $lens_ubication_1 = $_POST['lens_ubication_1'];
            $lens_recording_1 = $_POST['lens_recording_1'];
            $id_product_1 = $id;
            break;
        
        case '2':
        //1
            $lens_type_1 = $_POST['lens_type_1'];
            $lens_mp_1 = $_POST['lens_mp_1'];
            $lens_ubication_1 = $_POST['lens_ubication_1'];
            $lens_recording_1 = $_POST['lens_recording_1'];
            $id_product_1 = $id;
        //2
            $lens_type_2 = $_POST['lens_type_2'];
            $lens_mp_2 = $_POST['lens_mp_2'];
            $lens_ubication_2 = $_POST['lens_ubication_2'];
            $lens_recording_2 = $_POST['lens_recording_2'];
            $id_product_2 = $id;
            break;
            
        case '3':
        //1
            $lens_type_1 = $_POST['lens_type_1'];
            $lens_mp_1 = $_POST['lens_mp_1'];
            $lens_ubication_1 = $_POST['lens_ubication_1'];
            $lens_recording_1 = $_POST['lens_recording_1'];
            $id_product_1 = $id;
        //2
            $lens_type_2 = $_POST['lens_type_2'];
            $lens_mp_2 = $_POST['lens_mp_2'];
            $lens_ubication_2 = $_POST['lens_ubication_2'];
            $lens_recording_2 = $_POST['lens_recording_2'];
            $id_product_2 = $id;
        //3
            $lens_type_3 = $_POST['lens_type_3'];
            $lens_mp_3 = $_POST['lens_mp_3'];
            $lens_ubication_3 = $_POST['lens_ubication_3'];
            $lens_recording_3 = $_POST['lens_recording_3'];
            $id_product_3 = $id;
            break;

        case '4':
        //1
            $lens_type_1 = $_POST['lens_type_1'];
            $lens_mp_1 = $_POST['lens_mp_1'];
            $lens_ubication_1 = $_POST['lens_ubication_1'];
            $lens_recording_1 = $_POST['lens_recording_1'];
            $id_product_1 =$id;
        //2
            $lens_type_2 = $_POST['lens_type_2'];
            $lens_mp_2 = $_POST['lens_mp_2'];
            $lens_ubication_2 = $_POST['lens_ubication_2'];
            $lens_recording_2 = $_POST['lens_recording_2'];
            $id_product_2 = $id;
        //3
            $lens_type_3 = $_POST['lens_type_3'];
            $lens_mp_3 = $_POST['lens_mp_3'];
            $lens_ubication_3 = $_POST['lens_ubication_3'];
            $lens_recording_3 = $_POST['lens_recording_3'];
            $id_product_3 = $id;
        //4
            $lens_type_4 = $_POST['lens_type_4'];
            $lens_mp_4 = $_POST['lens_mp_4'];
            $lens_ubication_4 = $_POST['lens_ubication_4'];
            $lens_recording_4 = $_POST['lens_recording_4'];
            $id_product_4 =$id;
            break;

        case '5':
        //1
            $lens_type_1 = $_POST['lens_type_1'];
            $lens_mp_1 = $_POST['lens_mp_1'];
            $lens_ubication_1 = $_POST['lens_ubication_1'];
            $lens_recording_1 = $_POST['lens_recording_1'];
            $id_product_1 = $id;
        //2
            $lens_type_2 = $_POST['lens_type_2'];
            $lens_mp_2 = $_POST['lens_mp_2'];
            $lens_ubication_2 = $_POST['lens_ubication_2'];
            $lens_recording_2 = $_POST['lens_recording_2'];
            $id_product_2 = $id;
        //3
            $lens_type_3 = $_POST['lens_type_3'];
            $lens_mp_3 = $_POST['lens_mp_3'];
            $lens_ubication_3 = $_POST['lens_ubication_3'];
            $lens_recording_3 = $_POST['lens_recording_3'];
            $id_product_3 = $id;
        //4
            $lens_type_4 = $_POST['lens_type_4'];
            $lens_mp_4 = $_POST['lens_mp_4'];
            $lens_ubication_4 = $_POST['lens_ubication_4'];
            $lens_recording_4 = $_POST['lens_recording_4'];
            $id_product_4 = $id;
        //5
            $lens_type_5 = $_POST['lens_type_5'];
            $lens_mp_5 = $_POST['lens_mp_5'];
            $lens_ubication_5 = $_POST['lens_ubication_5'];
            $lens_recording_5 = $_POST['lens_recording_5'];
            $id_product_5 = $id;
            break;
            
        case '6':
        //1
            $lens_type_1 = $_POST['lens_type_1'];
            $lens_mp_1 = $_POST['lens_mp_1'];
            $lens_ubication_1 = $_POST['lens_ubication_1'];
            $lens_recording_1 = $_POST['lens_recording_1'];
            $id_product_1 =$id;
        //2
            $lens_type_2 = $_POST['lens_type_2'];
            $lens_mp_2 = $_POST['lens_mp_2'];
            $lens_ubication_2 = $_POST['lens_ubication_2'];
            $lens_recording_2 = $_POST['lens_recording_2'];
            $id_product_2 = $id;
        //3
            $lens_type_3 = $_POST['lens_type_3'];
            $lens_mp_3 = $_POST['lens_mp_3'];
            $lens_ubication_3 = $_POST['lens_ubication_3'];
            $lens_recording_3 = $_POST['lens_recording_3'];
            $id_product_3 = $id;
        //4
            $lens_type_4 = $_POST['lens_type_4'];
            $lens_mp_4 = $_POST['lens_mp_4'];
            $lens_ubication_4 = $_POST['lens_ubication_4'];
            $lens_recording_4 = $_POST['lens_recording_4'];
            $id_product_4 = $id;
        //5
            $lens_type_5 = $_POST['lens_type_5'];
            $lens_mp_5 = $_POST['lens_mp_5'];
            $lens_ubication_5 = $_POST['lens_ubication_5'];
            $lens_recording_5 = $_POST['lens_recording_5'];
            $id_product_5 =$id;
        //6
            $lens_type_6 = $_POST['lens_type_6'];
            $lens_mp_6 = $_POST['lens_mp_6'];
            $lens_ubication_6 = $_POST['lens_ubication_6'];
            $lens_recording_6 = $_POST['lens_recording_6'];
            $id_product_6 = $id;
            break;

        default:
            # code...
            break;
    }
    
    if ($lens_type_1) {
        $sql .= "INSERT INTO lens (lens_type, lens_mp, lens_ubication, lens_recording, id_product)
        VALUES ('$lens_type_1', '$lens_mp_1', '$lens_ubication_1', '$lens_recording_1', '$id');";
    }

    if ($lens_type_2) {
        $sql .= "INSERT INTO lens (lens_type, lens_mp, lens_ubication, lens_recording, id_product)
        VALUES ('$lens_type_2', '$lens_mp_2', '$lens_ubication_2', '$lens_recording_2', '$id');";
    }

    if ($lens_type_3) {
        $sql .= "INSERT INTO lens (lens_type, lens_mp, lens_ubication, lens_recording, id_product)
        VALUES ('$lens_type_3', '$lens_mp_3', '$lens_ubication_3', '$lens_recording_3', '$id');";
    }

    if ($lens_type_4) {
        $sql .= "INSERT INTO lens (lens_type, lens_mp, lens_ubication, lens_recording, id_product)
        VALUES ('$lens_type_4', '$lens_mp_4', '$lens_ubication_4', '$lens_recording_4', '$id');";
    }

    if ($lens_type_5) {
        $sql .= "INSERT INTO lens (lens_type, lens_mp, lens_ubication, lens_recording, id_product)
        VALUES ('$lens_type_5', '$lens_mp_5', '$lens_ubication_5', '$lens_recording_5', '$id');";
    }

    if ($lens_type_6) {
        $sql .= "INSERT INTO lens (lens_type, lens_mp, lens_ubication, lens_recording, id_product)
        VALUES ('$lens_type_6', '$lens_mp_6', '$lens_ubication_6', '$lens_recording_6', '$id');";
    }

    echo $sql."<br>";

    if (mysqli_multi_query($connection, $sql)) {
        echo "Se ingreso el equipo correctamente";
    } else {
        echo "Error: <br>" . mysqli_error($connection);
    }


  }    


?>