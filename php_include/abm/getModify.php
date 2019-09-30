<?php
require('php_config/connect.php');
require('queries/query_full.php');

$id=$_REQUEST['id'];

$sql_con .= "WHERE id_product = ".$id; 
$query_full=mysqli_query($connection,$sql_con);

if (mysqli_num_rows($query_full)>0) {
    while ($query=mysqli_fetch_assoc($query_full)) {
        $target_file = $query['disp_pic'];
?>



<form action="" method="post" enctype="multipart/form-data" id="body">

            <div class="container is-active" data-content="1">
                
                    <p class="title">Dispositivo</p>
                    <ul>
                    <li><label class="label">Marca dispositivo: </label><input class="input" type="text"  name="disp_brand" value="<?php echo $query['disp_brand']; ?>" required></li>
                    <li><label class="label">Modelo dispositivo: </label><input class="input" type="text"  name="disp_model" value="<?php echo $query['disp_model']; ?>" required></li>
                    <li><label class="label">Codigo de modelo: </label><input class="input" type="text"  name="disp_code" value="<?php echo $query['disp_code']; ?>" required></li>
                    <li><label class="label">Año dispositivo: </label><input class="input" type="text"  name="disp_year" value="<?php echo $query['disp_year']; ?>" required></li>
                    <li><label class="label">S.O dispositivo: </label><input class="input" type="text"  name="disp_so" value="<?php echo $query['disp_so']; ?>" required></li>
                    <li><label class="label">Version S.O: </label><input class="input" type="text"  name="disp_so_version" value="<?php echo $query['disp_so_version']; ?>" required></li>
                    <li><label class="label">Color dispositivo: </label><input class="input" type="text"  name="disp_color" value="<?php echo $query['disp_color']; ?>" required></li>
                    <li>
                        <label class="label">Foto del dispositivo: <div class="file">
                            <label class="file-label">
                                <input class="file-input" type="file" name="fileToUpload" id="fileToUpload">
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                        Subir archivo
                                    </span>
                                </span>
                            </label>
                        </label>

                        
                    </li>                
                    </ul>    
            </div>
            
            <div class="container" data-content="2">
                
                <p class="title">XPU</p>
                        <ul>
                        <li><label class="label">CPU brand: <input class="input" type="text"  name="cpu_brand" value="<?php echo $query['cpu_brand']; ?>" required></li>
                        <li><label class="label">CPU model: <input class="input" type="text"  name="cpu_model" value="<?php echo $query['cpu_model']; ?>" required></li>
                        <li><label class="label">CPU cores: <input class="input" type="text"  name="cpu_cores" value="<?php echo $query['cpu_cores']; ?>" required></li>
                        <li><label class="label">GPU brand: <input class="input" type="text"  name="gpu_brand" value="<?php echo $query['gpu_brand']; ?>" required></li>
                        <li><label class="label">CPU model: <input class="input" type="text"  name="gpu_model" value="<?php echo $query['gpu_model']; ?>" required></li>
                        </ul>       
            </div>

            <div class="container" data-content="3">
                
                <p class="title">Memorias</p>
                        <ul>
                        <li><label class="label">RAM: <input class="input" type="number"  name="ram_size" value="<?php echo $query['ram_size']; ?>" required></li>
                        <li><label class="label">ROM: <input class="input" type="number"  name="rom_size" value="<?php echo $query['rom_size']; ?>" required></li>
                        <li><label class="label">SD: <input class="input" type="number"  name="sd_size" value="<?php echo $query['sd_size']; ?>" required></li>
                        </ul>            
            </div>

            <div class="container" data-content="4">
                
                <p class="title">Pantalla</p>
                        <ul>
                        <li><label class="label">Tamaño pantalla: <input class="input" type="text"  name="screen_size" value="<?php echo $query['screen_size']; ?>" required></li>
                        <li><label class="label">Resolución pantalla: <input class="input" type="text"  name="screen_reso" value="<?php echo $query['screen_reso']; ?>" required></li>
                        <li><label class="label">Tipo pantalla: <input class="input" type="text"  name="screen_type" value="<?php echo $query['screen_type']; ?>" required></li>
                        <li><label class="label">Relación Aspecto: <input class="input" type="text"  name="screen_aspect_ratio" value="<?php echo $query['screen_aspect_ratio']; ?>" required></li>
                        </ul>             
            </div>

            <div class="container" data-content="5">
                
                <p class="title">Batería</p>
                        <ul>
                        <li><label class="label">Tipo batería: <input class="input" type="text"  name="battery_type" value="<?php echo $query['battery_type']; ?>" required></li>
                        <li><label class="label">Capacidad batería: <input class="input" type="text"  name="battery_size" value="<?php echo $query['battery_capacity']; ?>" required></li>
                        <li><label class="label">Batería QC: <input class="input" type="text"  name="battery_qc" value="<?php echo $query['battery_qc']; ?>" required></li>
                        <li><label class="label">Batería WC: <input class="input" type="text"  name="battery_wc" value="<?php echo $query['battery_wc']; ?>" required></li>
                        </ul>              
            </div>

            <div class="container" data-content="6">
                
                <p class="title">Conectividad</p>
                        <ul>
                        <li><label class="label">Tipo SIM: <input class="input" type="text"  name="sim_type" value="<?php echo $query['sim_type']; ?>" required></li>
                        <li><label class="label">Tipo USB: <input class="input" type="text"  name="usb_type" value="<?php echo $query['usb_type']; ?>" required></li>
                        <li><label class="label">Tiene NFC: <input class="input" type="text"  name="has_nfc" value="<?php echo $query['has_nfc']; ?>" required></li>
                        <li><label class="label">Tiene IRC: <input class="input" type="text"  name="has_irc" value="<?php echo $query['has_irc']; ?>" required></li>
                        <li><label class="label">Tiene LTE: <input class="input" type="text"  name="has_lte" value="<?php echo $query['has_lte']; ?>" required></li>
                        </ul>               
            </div>

            <div class="container" data-content="7">
                
                <p class="title">Extras</p>
                        <ul>
                        <li><label class="label">Tipo lector de huellas: <input class="input" type="text"  name="fingerprint_type" value="<?php echo $query['fingerprint_type']; ?>" required></li>
                        <li><label class="label">Tipo audio: <input class="input" type="text"  name="speaker_type" value="<?php echo $query['speaker_type']; ?>" required></li>
                        <li><label class="label">Resistencia al agua: <input class="input" type="text"  name="water_resistant_grade" value="<?php echo $query['water_resistant_grade']; ?>" required></li>
                        <li><label class="label">Tiene jack 3.5mm: <input class="input" type="text"  name="has_headphone_jack" value="<?php echo $query['has_headphone_jack']; ?>" required></li>
                        </ul>               
            </div>

            <div class="container" data-content="8">
                    
                <p class="title">Cámaras</p> 

                <?php
                    include('php_include/abm/getCamForm.php');
                ?>
            </div>

            <div class="container" data-content="9">
                
            <p class="title">CATEGORIA</p>

                <?php
                    $cat1 = "";
                    $cat2 = "";
                    $cat3 = "";
                    $cat4 = "";
                    $cat5 = "";
                    $cat6 = "";
                    switch ($query['cat']) {
                        case 'Necesidades basicas':
                            $cat1 = "checked";
                            break;
                        
                        case 'Redes sociales':
                            $cat2 = "checked";
                            break;

                        case 'Trabajo de oficina':
                            $cat3 = "checked";
                            break;

                        case 'Dibujo':
                            $cat4 = "checked";
                            break;

                        case 'Edicion':
                            $cat5 = "checked";
                            break;

                        case 'Gaming':
                            $cat6 = "checked";
                            break;
                    }
                ?>

                <ul>
                    <li><label class="radio"><input type="radio" value="Necesidades basicas" name="category" <?php echo $cat1; ?> > Necesidades básicas</label></li><br>
                    <li><label class="radio"><input type="radio" value="Redes sociales" name="category" <?php echo $cat2; ?> > Redes Sociales</label></li><br>
                    <li><label class="radio"><input type="radio" value="Trabajo de oficina" name="category" <?php echo $cat3; ?> > Trabajo de oficina</label></li><br>
                    <li><label class="radio"><input type="radio" value="Dibujo" name="category" <?php echo $cat4; ?> > Dibujo</label></li><br>
                    <li><label class="radio"><input type="radio" value="Edicion" name="category" <?php echo $cat5; ?> > Edición</label></li><br>
                    <li><label class="radio"><input type="radio" value="Gaming" name="category" <?php echo $cat6; ?> > Gaming</label></li><br>
                </ul>
                    
                
            </div>

            <div class="container" data-content="10">
                
                <p class="title">PRODUCTO</p>
                        <ul>
                        <li><label class="label">Precio: <input class="input" type="text"  name="product_price" value="<?php echo $query['product_price']; ?>" required></li>
                        <li><label class="label">Stock: <input class="input" type="text"  name="product_stock" value="<?php echo $query['product_stock']; ?>" required></li>
                        </ul>
                
            </div>
        
            <br><br>

        </div>
    </div>
        
        <input type="submit" value="Guardar" name="submit" id="send" class="button send is-primary is-medium">
    </form> 



    
<?php
    }
}else{
    echo "error";
}
?>