<?php 
    $id = $_REQUEST['id'];   
    $cont = 0;
                  
    $sql="SELECT * FROM lens WHERE id_product=".$id;
    $consulta2=mysqli_query($connection, $sql);

    if(mysqli_num_rows($consulta2)>0){
        $num = mysqli_num_rows($consulta2);
        echo "Cantidad de sensores: " . $num;
        while($reg=mysqli_fetch_assoc($consulta2)){
            $cont++;
?>

    <ul>
        <li><p class="subtitle">Sensor <?php echo $cont; ?></p></li>
        <li><label class="label">Tipo de lente: <input class="input" type="text" name="lens_type_<?php echo $cont; ?>" value="<?php echo $reg['lens_type']; ?>"></li>
        <li><label class="label">MP del lente: <input class="input" type="number" name="lens_mp_<?php echo $cont; ?>" value="<?php echo $reg['lens_mp']; ?>"></li>
        <li><label class="label">Ubicación lente: <input class="input" type="text" name="lens_ubication_<?php echo $cont; ?>" value="<?php echo $reg['lens_ubication']; ?>"></li>
        <li><label class="label">Grabación lente: <input class="input" type="text" name="lens_recording_<?php echo $cont; ?>" value="<?php echo $reg['lens_recording']; ?>"></li>
    </ul>
    <br>
    
<?php
        }
    }
?>