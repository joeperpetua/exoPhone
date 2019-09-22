<?php 
    $id = $_REQUEST['id'];   
                  
    $sql="SELECT * FROM lens WHERE id_product=".$id;
    $consulta2=mysqli_query($connection, $sql);

    if(mysqli_num_rows($consulta2)>0){
        $num = mysqli_num_rows($consulta2);
        echo "Cantidad de sensores: " . $num;
        while($reg=mysqli_fetch_assoc($consulta2)){
?>
        <ul>
            <li><label><b>Tipo de lente:</b> 
                <?php 
                    echo $reg['lens_type']; 
                ?>
            </label></li>
            <li><label>MP del lente: 
                <?php 
                    echo $reg['lens_mp']; 
                ?>
            </label></li>
            <li><label>Ubicación lente: 
                <?php 
                    echo $reg['lens_ubication']; 
                ?>
            </label></li>
            <li><label>Grabación lente: 
                    <?php 
                    echo $reg['lens_recording']; 
                    ?>
            </label></li>
        </ul>
        <br>
<?php
        }
    }
?>