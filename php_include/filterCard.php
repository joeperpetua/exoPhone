<?php
require('php_config/connect.php');

    // include('php_include/getCard/getCard.php');

    if (isset($_POST['filtrar'])) {
        
        include('queries/query_preview_filter.php');

        $crop = "";
        $flag = 0;

        if (isset($_POST['price_min']) && isset($_POST['price_max'])) {
            $price_min = $_REQUEST['price_min'];
            $price_max = $_REQUEST['price_max'];

            $consulta .= 'p.product_price >= "'.$price_min.'" AND p.product_price <= "'.$price_max.'" AND ';
        }
        
        if (isset($_POST['cat'])) {
            $cat = $_REQUEST['cat'];

            foreach ($cat as $index => $value) {
                $flag++;
                //echo "<br>Categoria = " . $flag . "<br>";
        
                if ($flag < count($cat) ) {
                    $consulta .= 'c.cat = "'.$value.'" OR '; 
                }elseif($flag == count($cat)){
                    $consulta .= 'c.cat = "'.$value.'" AND ';
                }
                
            }
        }

        if (isset($_POST['os'])) {
            $os = $_REQUEST['os'];
            $flag = 0;
            foreach ($os as $index => $value) {
                $flag++;
               // echo "<br>OS = " . $flag . "<br>";

                if ($flag < count($os) ) {
                    $consulta .= 'd.disp_so = "'.$value.'" OR '; 
                }elseif($flag == count($os)){
                    $consulta .= 'd.disp_so = "'.$value.'" AND ';
                }
            }
        }

        if (isset($_POST['year'])) {
            $year = $_REQUEST['year'];
            $flag = 0;
            foreach ($year as $index => $value) {
                $flag++;
                //echo "<br> YEAR =" . $flag . "<br>";

                if ($flag < count($year) ) {
                    $consulta .= 'd.disp_year = "'.$value.'" OR '; 
                }elseif($flag == count($year)){
                    $consulta .= 'd.disp_year = "'.$value.'" AND ';
                }
            }
        }

        $crop = substr($consulta, 0 , -4);

       


        // echo $crop . "<br>";
        
        $consulta_filter = mysqli_query($connection, $crop);

        if (mysqli_num_rows($consulta_filter)>0) {
            while ($query=mysqli_fetch_assoc($consulta_filter)) {
                include('php_include/getCard/getCard.php');
            } 
        } else {
            echo '<p class="subtitle is-centered">No hay productos que coincidan con los filtros seleccionados</p>';
        }

    }else{
        include('queries/query_preview.php');
        // echo $sql_con;

        $query_preview=mysqli_query($connection,$sql_con);


        if (mysqli_num_rows($query_preview)>0) {
            while ($query=mysqli_fetch_assoc($query_preview)) {
                include('php_include/getCard/getCard.php');
            } 
        } else {
            echo '<p class="subtitle is-centered">No hay productos que coincidan con los filtros seleccionados</p>';
        }
    }
?>