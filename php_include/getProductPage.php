<?php
require('php_config/connect.php');
require('queries/query_full.php');

$id=$_REQUEST['id'];

$sql_con .= "id_dispositive = ".$id; 
$query_full=mysqli_query($connection,$sql_con);

if (mysqli_num_rows($query_full)>0) {
    while ($query=mysqli_fetch_assoc($query_full)) {
?>


<div>
    <div class="section product-header">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <span class="title is-3"><?php echo $query['disp_brand'].' '.$query['disp_model'];?> </span>
                    <span class="title is-3 has-text-muted">&nbsp;|&nbsp;</span>
                    <span class="title is-4 has-text-muted"><?php echo $query['cat'];?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <div class="image is-2by2">
                        <?php
                            echo '<img src="'.$query['disp_pic'].'" alt="Foto de producto">';
                        ?>
                    </div>
                </div>
                <div class="column is-5 is-offset-1">
                    <div class="title is-2"><?php echo $query['disp_brand'].' '.$query['disp_model'];?></div>
                        <p class="title is-3 has-text-muted">$<?php echo $query['product_price'];?></p>
                
                            <br>       
                            <br>
                            
                            <?php
                                include("include/modalProduct.html")
                            ?>
                            
                            <br>
                            <br>
                        
                                    
                            <div class="field">
                            <label class="label">Cantidad</label>
                                <div class="control">
                                    <input class="input has-text-centered" type="number" value="1">
                                </div>
                            </div>
                            <div class="buttons">
                                <a href="carrito.php?id='<?php echo $query['id_dispositive']; ?>'" class="button is-primary is-medium">Anadir a carrito</a>
                                <a href="carrito.php?id='<?php echo $query['id_dispositive']; ?>'" class="button is-medium">Comprar</a>
                            </div>
                           
                        
                        <br>
                               
                    </div>
                </div>
            </div>
        </div>
        <div class="hero is-medium has-background">
          <img src="imagenes/slider2.jpg" alt="" class="hero-background">
          <div class="hero-body">
            <div class="container">
              <h2 class="subtitle has-text-white">Los mejores equipos?</h2>
              <h1 class="title has-text-white">Todos en <a href="" class="has-text-grey-light"><strong>exoPhone</strong></a>!</h1>
            </div>
          </div>
        </div>                 

        <div class="section">
            <div class="container">
                <div class="tabs">
                    <ul>
                        <li class="is-active"><a>Especificaciones</a></li>
                                
                    </ul>
                </div>
                <div class="box">

                    <div class="columns">
                        <div class="column is-half">
                            <ul>
                                <b><li>Datos del dispositivo</li></b>
                            </ul>
                            <ul>
                                <li>Codigo de modelo: <?php echo $query['disp_code']; ?></li>
                                <li>S.O: <?php echo $query['disp_so'].' '.$query['disp_so_version'];?> </li>
                                <li>Color: <?php echo $query['disp_color']; ?></li>
                                <li>Anio: <?php echo $query['disp_year']; ?></li>
                            </ul>

                                <br>
                                <ul>
                                <b><li>Unidades de procesamiento</li></b>
                                </ul>
                                <ul>
                                    <li>CPU: <?php echo $query['cpu_brand'].' '.$query['cpu_model'];?> </li>
                                    <li>Nucleos: <?php echo $query['cpu_cores']; ?></li>
                                    <li>GPU: <?php echo $query['gpu_brand'].' '.$query['gpu_model'];?> </li>
                                </ul>

                                <br>
                                <ul>
                                <b><li>Pantalla</li></b>
                                </ul>
                                <ul>
                                    <li>Tamanio: <?php echo $query['screen_size']; ?>"</li>
                                    <li>Resolucion: <?php echo $query['screen_reso']; ?></li>
                                    <li>Tipo: <?php echo $query['screen_type']; ?></li>
                                    <li>Relacion aspecto: <?php echo $query['screen_aspect_ratio']; ?></li>
                                </ul>

                                <br>
                                <ul>
                                <b><li>Memoria</li></b>
                                </ul>
                                <ul>
                                    <li>Ram: <?php echo $query['ram_size']; ?>GB</li>
                                    <li>Rom: <?php echo $query['rom_size']; ?>GB</li>
                                    <li>SD (max): <?php echo $query['sd_size']; ?>GB</li>
                                </ul>

                                <br>
                                <ul>
                                <b><li>Bateria</li></b>
                                </ul>
                                <ul>
                                    <li>Tipo: <?php echo $query['battery_type']; ?></li>
                                    <li>Capacidad: <?php echo $query['battery_capacity']; ?>mAh</li>
                                    <li>Carga rapida: <?php echo $query['battery_qc']; ?></li>
                                    <li>Carga inalambrica: <?php echo $query['battery_wc']; ?></li>
                                </ul>

                                <br>
                                <ul>
                                <b> <li>Extras</li></b>
                                </ul>
                                <ul>
                                    <li>Lector dactilar: <?php echo $query['fingerprint_type']; ?></li>
                                    <li>Audio: <?php echo $query['speaker_type']; ?></li>
                                    <li>Resistencia al agua: <?php echo $query['water_resistant_grade']; ?></li>
                                    <li>Jack 3.5mm: <?php echo $query['has_headphone_jack']; ?></li>
                                </ul>
                        </div>
                    
                    
                        <div class="column is-half">
                            <ul>
                                <b><li>Conectividad</li></b>
                            </ul>
                            <ul>
                                <li>Tipo SIM: <?php echo $query['sim_type']; ?></li>
                                <li>Tipo USB: <?php echo $query['usb_type']; ?></li>
                                <li>NFC: <?php echo $query['has_nfc']; ?></li>
                                <li>IRC: <?php echo $query['has_irc']; ?></li>
                                <li>LTE: <?php echo $query['has_lte']; ?></li>
                            </ul>
                            <br>
                            
                            <ul>
                            <b> <li>Camaras</li></b>
        
                            </ul>
                            
                            <?php include('php_include/getCam.php');?>

                            
                        </div>

                </div>

            </div>
        </div>
    </div>
</div>
                  
                   
<?php
        }
    }else{
        echo 'Error al cargar el producto';
    }
?>