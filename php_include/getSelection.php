<?php
if(isset($_POST['guess'])){

$response = [$_POST['p1'], $_POST['p2'], $_POST['p3'], $_POST['p4'], $_POST['p5'], $_POST['p6'], $_POST['p7'], $_POST['p8'], $_POST['p9'], $_POST['p10'] ];

//print_r($response);



$smartQuery= "SELECT p.id_product, p.id_dispositive, p.id_battery, p.id_memory, p.id_screen, p.product_price, p.listed,
                d.disp_brand, d.disp_model, d.disp_pic,
                b.battery_capacity, b.battery_qc,
                m.ram_size, m.rom_size,
                s.screen_size
                
                FROM products p

                LEFT JOIN dispositives d ON p.id_dispositive = d.id_dispositives
                LEFT JOIN batteries b ON p.id_battery = b.id_battery
                LEFT JOIN memories m ON p.id_memory = m.id_memory
                LEFT JOIN screens s ON p.id_screen = s.id_screen
                
                WHERE p.listed = '1' AND p.product_price <= ".$response[9]." ";


if ($response[0] == "y") {
    $smartQuery .= "AND (disp_brand = 'Samsung' OR disp_brand = 'Apple' OR disp_brand = 'Huawei' OR disp_brand = 'Oneplus') ";
}

if ($response[1] == "y") {
    $smartQuery .= "AND (battery_capacity > '3200' AND battery_qc = 'Si') ";
}

if ($response[2] == "y") {
    $smartQuery .= "AND (ram_size >= 3 AND rom_size >= 32) ";
}

if ($response[3] == "n" && $respone[2] == 'n') {
    $smartQuery .= "AND (ram_size <= 2 AND rom_size <= 16) ";
}

if ($response[6] == "y") {
    $smartQuery .= "AND (screen_size >= '6.5' OR disp_model LIKE '%Galaxy Note%') ";
}

if ($response[7] == "and") {
    $smartQuery .= "AND (disp_so = 'Android') ";
}

if ($response[7] == "ios") {
    $smartQuery .= "AND (disp_so = 'iOS') ";
}

if ($response[8] == "y") {
    $smartQuery .= "AND (disp_brand = 'Samsung' OR disp_brand = 'Apple' OR disp_brand = 'Google' OR disp_brand = 'Oneplus' OR disp_brand = 'Nokia'
                    OR disp_brand = 'Xiaomi' OR disp_brand = 'Oneplus' OR disp_brand = 'Huawei' OR disp_brand = 'Honor') ";
}

// if ($response[4] == "y") {
    
//     $pID = $sQuery['id_product'];

//     $smartQueryLens = "SELECT lens_type, lens_recording FROM lens WHERE id_product = " . $pID;
    
//     if ($response[6] == "f") {
//         $smartQueryLens .= " AND (lens_type = 'UltraWide' OR lens_type = 'Telephoto')";
//     }else {
//         $smartQueryLens .= " AND (lens_recording LIKE %'60fps'%)";
//     }
    
//     //query
// }

// if ($response[4] == "y") {
    
//     //     //$pID = $sQuery['id_product'];

//         $smartQuery .= "UNION ALL SELECT lens_type, lens_recording FROM lens WHERE ";
        
//         if ($response[5] == "f") {
//             $smartQuery .= "lens_type = 'UltraWide' OR lens_type = 'Telephoto')";
//         }else {
//             $smartQuery .= "lens_recording LIKE '%60%'";
//         }
        
//         //query
//     }


//echo $smartQuery;

?>

    <div class="columns is-multiline is-centered" style="margin: 10% auto; max-width: 60%;">
        <p class="title column is-full">Nuestras recomendaciones:</p>

<?php

$sQuery = mysqli_query($connection, $smartQuery);

while($sFetch = mysqli_fetch_assoc($sQuery)){
    ?>
    <div class="column id-1 is-narrow is-one-quater">
                            <div class="card">

                                <div class="card-image">
                                <figure class="image is-200x200" style="margin: 0 auto">
                                    <?php
                                        echo '<img src="'.$sFetch['disp_pic'].'" alt="Foto de producto">';
                                    ?>
                                    
                                </figure>
                                </div>
                                
                                <div class="card-content">
                                    
                                    <div class="media">
                                        <div class="media-content">
                                        <p class="title card-title"><?php echo $sFetch['disp_brand'].' '.$sFetch['disp_model']; ?></p>
                                        </div>
                                    </div>
                                </div>    
                                
                                    

                                <footer class="card-footer">
                                            <div class="buttons is-centered">
                                                
                                                <?php echo'
                                                    <a class="button is-medium is-primary" href="item.php?id='.$sFetch['id_dispositive'].'">
                                                        <span class="icon"><i class="fas fa-ellipsis-h"></i></span>
                                                        <span>Ver mas</span>
                                                    </a>';
                                                ?>
                                            </div>
                                </footer>
                            </div>         
                    </div>




<?php
}
?>

<p class="subtitle column is-full" style="margin-top: 5%">Hace click<a href="productos.php" class="subtitle has-text-info" > aca </a>para ver el listado de productos enteros!</p>

</div>


<?php
}



?>
    
