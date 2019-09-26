


<form action="" method="post" enctype="multipart/form-data" id="body">

            <div class="container is-active" data-content="1">
                
                    <p class="title">Dispositivo</p>
                    <ul>
                    <li><label class="label">Marca dispositivo: </label><input class="input" type="text"  name="disp_brand" required></li>
                    <li><label class="label">Modelo dispositivo: </label><input class="input" type="text"  name="disp_model" required></li>
                    <li><label class="label">Codigo de modelo: </label><input class="input" type="text"  name="disp_code" required></li>
                    <li><label class="label">Año dispositivo: </label><input class="input" type="text"  name="disp_year" required></li>
                    <li><label class="label">S.O dispositivo: </label><input class="input" type="text"  name="disp_so" required></li>
                    <li><label class="label">Version S.O: </label><input class="input" type="text"  name="disp_so_version"  required></li>
                    <li><label class="label">Color dispositivo: </label><input class="input" type="text"  name="disp_color"  required></li>
                    <li>
                        <label class="label">Foto del dispositivo: <div class="file">
                            <label class="file-label">
                                <input class="file-input" type="file" name="fileToUpload" id="fileToUpload">
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                        Subir archivo
                                    </span>
                                </span>
                            </label>
                        </label>

                        
                    </li>                
                    </ul>    
            </div>
            
            <div class="container" data-content="2">
                
                <p class="title">XPU</p>
                        <ul>
                        <li><label class="label">CPU brand: <input class="input" type="text"  name="cpu_brand" required></li>
                        <li><label class="label">CPU model: <input class="input" type="text"  name="cpu_model" required></li>
                        <li><label class="label">CPU cores: <input class="input" type="text"  name="cpu_cores" required></li>
                        <li><label class="label">GPU brand: <input class="input" type="text"  name="gpu_brand" required></li>
                        <li><label class="label">CPU model: <input class="input" type="text"  name="gpu_model" required></li>
                        </ul>       
            </div>

            <div class="container" data-content="3">
                
                <p class="title">Memorias</p>
                        <ul>
                        <li><label class="label">RAM: <input class="input" type="number"  name="ram_size" required></li>
                        <li><label class="label">ROM: <input class="input" type="number"  name="rom_size" required></li>
                        <li><label class="label">SD: <input class="input" type="number"  name="sd_size" required></li>
                        </ul>            
            </div>

            <div class="container" data-content="4">
                
                <p class="title">Pantalla</p>
                        <ul>
                        <li><label class="label">Tamaño pantalla: <input class="input" type="text"  name="screen_size" required></li>
                        <li><label class="label">Resolución pantalla: <input class="input" type="text"  name="screen_reso" required></li>
                        <li><label class="label">Tipo pantalla: <input class="input" type="text"  name="screen_type" required></li>
                        <li><label class="label">Relación Aspecto: <input class="input" type="text"  name="screen_aspect_ratio" required></li>
                        </ul>             
            </div>

            <div class="container" data-content="5">
                
                <p class="title">Batería</p>
                        <ul>
                        <li><label class="label">Tipo batería: <input class="input" type="text"  name="battery_type" required></li>
                        <li><label class="label">Capacidad batería: <input class="input" type="text"  name="battery_size" required></li>
                        <li><label class="label">Batería QC: <input class="input" type="text"  name="battery_qc" required></li>
                        <li><label class="label">Batería WC: <input class="input" type="text"  name="battery_wc" required></li>
                        </ul>              
            </div>

            <div class="container" data-content="6">
                
                <p class="title">Conectividad</p>
                        <ul>
                        <li><label class="label">Tipo SIM: <input class="input" type="text"  name="sim_type" required></li>
                        <li><label class="label">Tipo USB: <input class="input" type="text"  name="usb_type" required></li>
                        <li><label class="label">Tiene NFC: <input class="input" type="text"  name="has_nfc" required></li>
                        <li><label class="label">Tiene IRC: <input class="input" type="text"  name="has_irc" required></li>
                        <li><label class="label">Tiene LTE: <input class="input" type="text"  name="has_lte" required></li>
                        </ul>               
            </div>

            <div class="container" data-content="7">
                
                <p class="title">Extras</p>
                        <ul>
                        <li><label class="label">Tipo lector de huellas: <input class="input" type="text"  name="fingerprint_type" required></li>
                        <li><label class="label">Tipo audio: <input class="input" type="text"  name="speaker_type" required></li>
                        <li><label class="label">Resistencia al agua: <input class="input" type="text"  name="water_resistant_grade" required></li>
                        <li><label class="label">Tiene jack 3.5mm: <input class="input" type="text"  name="has_headphone_jack" required></li>
                        </ul>               
            </div>

            <div class="container" data-content="8">
                    
                <p class="title">Cámaras</p> 
                        <ul>
                            <li><label class="label">Cantidad de sensores <input class="input" type="number" id="cant_cam" name="cant_cam" required></label></li>
                        </ul>    
                        <a class="button" type="button" value="Generar" id="generate_cam">Generar</a>
                        <div id="show_cam"></div>
            </div>

            <div class="container" data-content="9">
                
            <p class="title">CATEGORIA</p>
                <!-- <div class="select">
                     <select>
                        <option value="Necesidades Basicas" name="category"> Necesidades básicas</option>
                        <option value="Redes Sociales" name="category"> Redes Sociales</option>
                        <option value="Trabajo de Oficina" name="category">Trabajo de oficina</option>
                        <option value="Dibujo" name="category">Dibujo</option>
                        <option value="Edicion" name="category">Edicion</option>
                        <option value="Gaming" name="category">Gaming</option>
                    </select> 

                    
                </div> -->
                <ul>
                    <li><label><input type="radio" value="Necesidades Basicas" name="category"> Necesidades básicas</label></li><br>
                    <li><label><input type="radio" value="Redes Sociales" name="category"> Redes Sociales</label></li><br>
                    <li><label><input type="radio" value="Trabajo de Oficina" name="category"> Trabajo de oficina</label></li><br>
                    <li><label><input type="radio" value="Dibujo" name="category"> Dibujo</label></li><br>
                    <li><label><input type="radio" value="Edicion" name="category"> Edición</label></li><br>
                    <li><label><input type="radio" value="Gaming" name="category"> Gaming</label></li><br>
                    </ul>
                
            </div>

            <div class="container" data-content="10">
                
                <p class="title">PRODUCTO</p>
                        <ul>
                        <li><label class="label">Precio: <input class="input" type="text"  name="product_price" required></li>
                        <li><label class="label">Stock: <input class="input" type="text"  name="product_stock" required></li>
                        </ul>
                
            </div>
        
            <br><br>

        </div>
    </div>
        
        <input type="submit" value="Guardar" name="submit" id="send" class="button send is-primary is-medium">
    </form> 



    
