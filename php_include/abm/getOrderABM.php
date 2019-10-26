<?php
require('php_config/connect.php');

$sqlOrder = "SELECT o.id_order, o.id_user, o.order_date, o.order_total,
                    p.id_order, p.id_dispositives, p.product_cant, p.product_price,
                    u.id_user, u.user_name, u.user_surname,
                    d.id_dispositives, d.disp_brand, d.disp_model 

            FROM orders o 
            JOIN prodxorder p ON o.id_order = p.id_order
            JOIN user u ON o.id_user = u.id_user
            JOIN dispositives d ON p.id_dispositives = d.id_dispositives";

$sqlOrder2 = mysqli_query($connection, $sqlOrder);



$id_o = 9;

    if (mysqli_num_rows($sqlOrder2)>0) {
        while ($query_u=mysqli_fetch_assoc($sqlOrder2)) {
            $date = date('d-m-y', strtotime($query_u['order_date']));
?>


<tr>
    <?php if($id_o != $query_u['id_order']){ ?>            
        <th><p> <?php echo $query_u['id_order'];?> </p> </th>
        <th><p> <?php echo $query_u['user_name'] ." ". $query_u['user_surname'];?> </p> </th>

        <th><p> <?php echo $query_u['disp_brand'] ." ". $query_u['disp_model'];?> </p> </th>
        <th><p> <?php echo $query_u['product_cant'];?> </p> </th>
        <?php
            if($query_u['product_price'] == $query_u['order_total']){
                echo "<th><p> - </p> </th>";
            }else{
                echo "<th><p>$".$query_u['product_price']."</p></th>";
            }
        ?>

        <th><p> $<?php echo $query_u['order_total'];?> </p></th>
        <th><p> <?php echo $date;?> </p></th>
    <?php 
        $id_o++;
        }else
        { ?>
        <th><p>  </p> </th>
        <th><p>  </p> </th>

        <th><p> <?php echo $query_u['disp_brand'] ." ". $query_u['disp_model'];?> </p> </th>
        <th><p> <?php echo $query_u['product_cant'];?> </p> </th>
        <th><p> $<?php echo $query_u['product_price']?> </p> </th>

        <th><p>  </p></th>
        <th><p>  </p></th>
    <?php
        
        }
    ?>    
</tr>

<?php
        }
    }else{
        echo "error al mostrar productos";
    }
?>
