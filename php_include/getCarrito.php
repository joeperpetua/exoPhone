<?php
if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
    $cartQuery = "SELECT c.id_cart, c.id_product, c.id_dispositives, c.id_user, c.cart_cant,
                p.product_price,
                d.disp_brand, d.disp_model, d.disp_pic
   
                FROM cart c

                LEFT JOIN products p ON c.id_product = p.id_product
                LEFT JOIN dispositives d ON c.id_dispositives = d.id_dispositives

                WHERE id_user = ".$id;
    
    $cons = mysqli_query($connection, $cartQuery);
    while($query = mysqli_fetch_assoc($cons)){
?>
        <div class="column is-full card">
    <span>
        <a href="view.php?id=<?php echo $query['id_dispositive'];?>" class="is-pulled-left"><?php echo $query['disp_brand']. ' ' .$query['disp_model'];?></a>
            <span class="is-pulled-right">
                <a href="modify.php?id=<?php echo $query['id_dispositive'];?>" class="button is-rounded"><i class="fas fa-pen"></i></a>
                &nbsp;
                <a href="abm.php?delete=<?php echo $query['id_dispositive'];?>" class="button is-rounded delete"><i class="fas fa-trash-alt"></i></a>

                
            </span>
    </span>
</div>
 
 
<?php    }

    

}else{
    echo '<p class="subtitle is-centered">Inicie sesion para usar esta funcion</p>';
}



?>