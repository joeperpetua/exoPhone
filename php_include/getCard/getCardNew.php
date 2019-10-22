<?php
require('php_config/connect.php');
require('queries/query_preview_new.php');
?>

<?php 
    if (mysqli_num_rows($query_preview_new)>0) {
        while ($query=mysqli_fetch_assoc($query_preview_new)) {
?>


<div class="column id-1 is-narrow">
                            <div class="card">

                                <div class="card-image">
                                <figure class="image is-200x200" style="margin: 0 auto">
                                    <?php
                                        echo '<img src="'.$query['disp_pic'].'" alt="Foto de producto">';
                                    ?>
                                    
                                </figure>
                                </div>
                                
                                <div class="card-content">
                                    
                                    <div class="media">
                                        <div class="media-content">
                                        <p class="title card-title"><?php echo $query['disp_brand'].' '.$query['disp_model']; ?></p>
                                        </div>
                                    </div>
                                
                                    <div class="content">
                                            <p class="lead"><strong>Especificaciones</strong></p>
                                            <ul>
                                                <li>
                                                    <p><?php echo $query['cpu_brand'].' '.$query['cpu_model']; ?></p>
                                                </li>
                                                <li>
                                                    <p><?php echo $query['rom_size']; ?>GB ROM</p>
                                                </li>
                                                <li>
                                                    <p><?php echo $query['ram_size']; ?>GB RAM</p>
                                                </li>
                                                <li>
                                                    <p><?php echo $query['cat']; ?></p>
                                                </li>
                                            </ul>

                                            
                                            
                                    </div>
                                </div>

                                <footer class="card-footer">
                                            <div class="buttons is-centered">
                                                <?php echo '
                                                    <a href="carrito.php?id='.$query['id_dispositive'].'" class="button is-medium">
                                                        <span class="icon"><i class="fas fa-cart-plus"></i></span>
                                                        <span>Anadir</span>
                                                    </a>';
                                                ?>
                                                <?php echo'
                                                    <a class="button is-medium is-primary" href="item.php?id='.$query['id_dispositive'].'">
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
    }else{
        echo 'No hay productos disponibles';
    }
