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






<div class="navbar-menu" id="filter">
  <div class="navbar-start">
    <aside class="menu has-background-white-bi is-outlined">
                
                <ul class="menu-list">
                    <li><p class="is-active is-size-4">Precio</p>
                        <ul>
                            <li><p class="is-size-5">Min:</p><input type="number" name="price_min" class="input is-small is-rounded"></li>
                            <li><p class="is-size-5">Max:</p><input type="number" name="price_max" class="input is-small is-rounded"></li>
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

                <button class="button is-medium">Filtrar</button>
               

    </aside>
  </div>
</div>

