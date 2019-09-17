<div>
    <div class="section product-header">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <span class="title is-3">{elemento.disp_brand} {elemento.disp_model}</span>
                    <span class="title is-3 has-text-muted">&nbsp;|&nbsp;</span>
                    <span class="title is-4 has-text-muted">{elemento.cat}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <div class="image is-2by2">
                        <img src="img/destacado.png">
                    </div>
                </div>
                <div class="column is-5 is-offset-1">
                    <div class="title is-2">{elemento.disp_brand} {elemento.disp_model}</div>
                        <p class="title is-3 has-text-muted">${elemento.product_price}</p>
                
                            <br>       
                            <br>
                            <div class="columns is-mobile">
                                <div class="column is-one-fifth">
                                    <i class="fas fa-credit-card icon blue"></i>
                                </div>
                                <div class="column">
                                    <div class="modal modal-payment">
                                        <div class="modal-background payment-bg"></div>
                                        <div class="modal-card">
                                            <header class="modal-card-head">
                                                <p class="modal-card-title">Medios de pago</p>
                                            </header>
                                            <section class="modal-card-body">
                                                <h1>Hola</h1>
                                            </section>
                                        </div>
                                    </div>
                                    <p>Paga hasta en <strong>12 cuotas</strong></p>
                                    <a class="payment">Ver medios de pago</a>
                                </div>
                            </div>

                            <div class="columns is-mobile">
                                <div class="column is-one-fifth">
                                    <i class="fas fa-truck icon green"></i>
                                </div>
                                <div class="column">
                                    <div class="modal modal-shipping">
                                        <div class="modal-background shipping-bg"></div>
                                        <div class="modal-card">
                                            <header class="modal-card-head">
                                                <p class="modal-card-title">Envios</p>
                                                <button class="modal-close" aria-label="close"></button>
                                            </header>
                                            <section class="modal-card-body">
                                                <h1>Hola</h1>
                                            </section>
                                        </div>
                                    </div>
                                
                                    <p>Envios a todo el <strong>pais</strong></p>
                                    <a class="shipping">Ver informacion de envio</a>
                                </div>
                            </div>
                            
                            <br>
                            <br>
                        
                                    
                            <div class="field">
                            <label class="label">Cantidad</label>
                                <div class="control">
                                    <input class="input has-text-centered" type="number" value="1">
                                </div>
                            </div>
                            <div class="buttons">
                                <a class="button is-primary is-medium">Anadir a carrito</a>
                                <a class="button is-medium">Comprar</a>
                            </div>
                           
                        
                        <br>
                               
                    </div>
                </div>
            </div>
        </div>
        <div class="hero is-medium has-background">
          <img src="img/slider2.png" alt="" class="hero-background">
          <div class="hero-body">
            <div class="container">
              <h2 class="subtitle has-text-white">Los mejores equipos?</h2>
              <h1 class="title has-text-white">Todos en <a href="" class="has-text-grey-light"><strong>exoPhone</strong></a>!</h1>
            </div>
          </div>
        </div>                 

        <div class="section">
            <div class="container">
                <div class="tabs">
                    <ul>
                        <li class="is-active"><a>Especificaciones</a></li>
                                
                    </ul>
                </div>
                <div class="box">

                    <div class="columns">
                        <div class="column is-half">
                            <ul>
                                <b><li>Datos del dispositivo</li></b>
                            </ul>
                            <ul>
                                <li>Codigo de modelo: { elemento.disp_code }</li>
                                <li>S.O: { elemento.disp_so } { elemento.disp_so_version }</li>
                                <li>Color: { elemento.disp_color }</li>
                                <li>Anio: { elemento.disp_year }</li>
                            </ul>

                                <br>
                                <ul>
                                <b><li>Unidades de procesamiento</li></b>
                                </ul>
                                <ul>
                                    <li>CPU: { elemento.cpu_brand } { elemento.cpu_model }</li>
                                    <li>Nucleos: { elemento.cpu_cores }</li>
                                    <li>GPU: { elemento.gpu_brand } { elemento.gpu_model }</li>
                                </ul>

                                <br>
                                <ul>
                                <b><li>Pantalla</li></b>
                                </ul>
                                <ul>
                                    <li>Tamanio: { elemento.screen_size }"</li>
                                    <li>Resolucion: { elemento.screen_reso }</li>
                                    <li>Tipo: { elemento.screen_type }</li>
                                    <li>Relacion aspecto: { elemento.screen_aspect_ratio }</li>
                                </ul>

                                <br>
                                <ul>
                                <b><li>Memoria</li></b>
                                </ul>
                                <ul>
                                    <li>Ram: { elemento.ram_size }GB</li>
                                    <li>Rom: { elemento.rom_size }GB</li>
                                    <li>SD (max): { elemento.sd_size }GB</li>
                                </ul>

                                <br>
                                <ul>
                                <b><li>Bateria</li></b>
                                </ul>
                                <ul>
                                    <li>Tipo: { elemento.battery_type }</li>
                                    <li>Capacidad: { elemento.battery_capacity }mAh</li>
                                    <li>Carga rapida: { elemento.battery_qc }</li>
                                    <li>Carga inalambrica: { elemento.battery_wc }</li>
                                </ul>
                        </div>
                    
                    
                        <div class="column is-half">
                            <ul>
                                <b><li>Conectividad</li></b>
                            </ul>
                            <ul>
                                <li>Tipo SIM: { elemento.sim_type }</li>
                                <li>Tipo USB: { elemento.usb_type }</li>
                                <li>NFC: { elemento.has_nfc }</li>
                                <li>IRC: { elemento.has_irc }</li>
                                <li>LTE: { elemento.has_lte }</li>
                            </ul>

                            <br>
                            <ul>
                            <b> <li>Camaras</li></b>
                            </ul>
                            <ul>
                                <li>{ elemento.a }</li>
                            </ul>

                            <br>
                            <ul>
                            <b> <li>Extras</li></b>
                            </ul>
                            <ul>
                                <li>Lector dactilar: { elemento.fingerprint_type }</li>
                                <li>Audio: { elemento.speaker_type }</li>
                                <li>Resistencia al agua: { elemento.water_resistant_grade }</li>
                                <li>Jack 3.5mm: { elemento.has_headphone_jack }</li>
                            </ul>
                        </div>

                </div>

            </div>
        </div>
    </div>
</div>
                  
                   
