<section>
      <article> 
        <h1 class="title">Productos destacados</h1>
        <br>
        <div class="columns is-multiline is-centered">
         
          <?php
            
              include('php_include/getCard/getCardDest.php');
            
          ?>

        </div>
      </article>  

        <div class="hero is-medium has-background">
          <img src="imagenes/slider2.jpg" alt="" class="hero-background">
          <div class="hero-body">
            <div class="container">
              <h2 class="subtitle has-text-white">No estas seguro de que equipo elegir?</h2>
              <h1 class="title has-text-white">Proba nuestra <a href="" class="has-text-grey-light"><strong>Herramienta de Seleccion</strong></a>!</h1>
            </div>
          </div>
        </div>

      <article>
        <h1 class="title">Nuevos Ingresos</h1>
        <br>
        <div class="columns is-multiline is-centered">
        
          <?php
            
              include('php_include/getCard/getCardNew.php');
            
          ?>            
        
        </div>
      </article>
    </section>		