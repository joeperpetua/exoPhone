<div class="navbar-brand filter">
          <a class="navbar-item filter">
            <p class="title is-vcentered">Filtros</p>
          </a>
  
          <a role="button" class="navbar-burger filter" data-target="filter" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
</div>

<?php
require('php_config/connect.php');
$sql2="SELECT MIN(product_price) AS price FROM products;";  
$consulta2=mysqli_query($connection,$sql2);
$min=mysqli_fetch_array($consulta2);

$sql3="SELECT MAX(product_price) AS price FROM products;";
$consulta3=mysqli_query($connection,$sql3);
$max=mysqli_fetch_array($consulta3);
?>




<div class="navbar-menu" id="filter">
  <div class="navbar-start">
    <aside class="menu has-background-white-bi is-outlined">
                <form action="" method="post">
                <ul class="menu-list">
                    <li><p class="is-active is-size-4">Precio</p>
                        <ul>
                        <li><p class="is-size-5">Min:</p><input type="number" name="price_min" class="input is-small is-rounded" value="0" min="0" max="<?php echo $max['price']; ?>"></li>
                        <li><p class="is-size-5">Max:</p><input type="number" name="price_max" class="input is-small is-rounded" value="<?php echo $max['price']; ?>" min="<?php echo $min['price']; ?>" max="<?php echo $max['price']; ?>"></li>
                        </ul>
                    </li>
                </ul>

                <ul class="menu-list">
                        <li><p class="is-active is-size-4">Sistema operativo</p>
                            <ul>
                                <li><p class="is-size-5"><input type="checkbox" name="os[]" value="Android"> Android</p></li>
                                <li><p class="is-size-5"><input type="checkbox" name="os[]" value="iOS"> iOS</p></li>
                            </ul>
                        </li>
                </ul>

                <ul class="menu-list">
                        <li><p class="is-active is-size-4">Categoria</p>
                            <ul>
                                <li><p class="is-size-5"><input type="checkbox" name="cat[]" value="Necesidades basicas"> Necesidades Basicas</p></li>
                                <li><p class="is-size-5"><input type="checkbox" name="cat[]" value="Redes sociales"> Redes Sociales</p></li>
                                <li><p class="is-size-5"><input type="checkbox"name="cat[]" value="Trabajo de oficina"> Trabajo de Oficina</p></li>
                                <li><p class="is-size-5"><input type="checkbox"name="cat[]" value="Dibujo"> Dibujo</p></li>
                                <li><p class="is-size-5"><input type="checkbox"name="cat[]" value="Edicion"> Edicion</p></li>
                                <li><p class="is-size-5"><input type="checkbox"name="cat[]" value="Gaming"> Gaming</p></li>
                            </ul>
                        </li>
                </ul>

                <ul class="menu-list">
                        <li><p class="is-active is-size-4">Anio</p>
                            <ul>
                                <li><p class="is-size-5"><input type="checkbox" name="year[]" value="2019"> Android</p></li>
                                <li><p class="is-size-5"><input type="checkbox" name="year[]" value="2018"> 2018</p></li>
                                <li><p class="is-size-5"><input type="checkbox" name="year[]" value="2017"> 2019</p></li>
                            </ul>
                        </li>
                </ul>
                <br>

                <input type="submit" name="filtrar" class="button is-medium" value="Filtrar">
                </form>

    </aside>
  </div>
</div>

