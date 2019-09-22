<?php 
require_once("conexion.php");
$sql_con="SELECT p.id_product, p.id_dispositive, p.id_xpu, p.id_memory, p.id_screen, p.id_battery, p.id_connectivity, p.id_extras, p.id_cat, p.product_stock, p.product_price, 
                d.disp_brand, d.disp_model, d.disp_code, d.disp_pic, d.disp_so, d.disp_so_version, d.disp_year, d.disp_color,
                x.cpu_brand, x.cpu_model, x.cpu_cores, x.gpu_brand, x.gpu_model,
                m.ram_size, m.rom_size, m.sd_size,
                s.screen_type, s.screen_size, s.screen_reso, s.screen_aspect_ratio,
                b.battery_type, b.battery_capacity, b.battery_qc, b.battery_wc,
                c.sim_type, c.usb_type, c.has_nfc, c.has_irc, c.has_lte,
                e.fingerprint_type, e.speaker_type, e.water_resistant_grade, e.has_headphone_jack,
                category.cat
FROM products p

LEFT JOIN dispositives d ON p.id_dispositive = d.id_dispositives
LEFT JOIN xpu x ON p.id_xpu = x.id_xpu
LEFT JOIN memories m ON p.id_memory = m.id_memory
LEFT JOIN screens s ON p.id_screen = s.id_screen
LEFT JOIN batteries b ON p.id_battery = b.id_battery
LEFT JOIN connectivity c ON p.id_connectivity = c.id_connectivity
LEFT JOIN extras e ON p.id_extras = e.id_extras
LEFT JOIN category ON p.id_cat = category.id_cat
ORDER BY p.id_product DESC";



$query_full=mysqli_query($connection,$sql_con);


 ?>
