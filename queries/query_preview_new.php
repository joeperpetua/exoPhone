<?php 
require('php_config/connect.php');
$sql_con=
"SELECT p.id_product, p.id_dispositive, p.id_xpu, p.id_memory, p.id_cat ,p.product_price, 
d.disp_brand, d.disp_model, d.disp_year, d.disp_pic,
x.cpu_brand, x.cpu_model,
m.ram_size, m.rom_size,
c.cat
FROM products p

LEFT JOIN dispositives d ON p.id_dispositive = d.id_dispositives
LEFT JOIN xpu x ON p.id_xpu = x.id_xpu
LEFT JOIN memories m ON p.id_memory = m.id_memory
LEFT JOIN category c ON p.id_cat = c.id_cat
ORDER BY d.disp_year DESC LIMIT 4";



$query_preview_new=mysqli_query($connection,$sql_con);
 ?>