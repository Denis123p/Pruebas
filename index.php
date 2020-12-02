<?php include 'cabecera.php' ?>
<!-------------`Menu de la pagina index.php---------------->
<div class="container main-menu">
      <div class="container">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="index.php"><img src="img/logo3.png" alt="" title="" /></a>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
                    <li class="menu-active"><a href="index.php">HOME</a></li>
                    <li><a href="nosotros.php">NOSOTROS</a></li>
                    <li><a href="carta.php">NUESTROS PLATOS</a></li>
                    <li><a href="menu.php">Carta</a></li>
                    <li><a href="locales.php">LOCALES</a></li>
                    <li><a href="contactenos.php">UBICANOS</a></li>
                    <li><a href="reserva.php">RESERVA</a></li>


          </ul>
        </nav>
        
        <!--######## #nav-menu-container -->
      </div>
      </div>
    </div>
  </header>
<hr>

<!-----------SLAIDER INICIO--------------->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	        <ol class="carousel-indicators">
	          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	        </ol>
	        <div class="carousel-inner" role="listbox">
	          <!-- Slide One - Set the background image for this slide in the line below -->
	          <div class="carousel-item active" style="background-image: url('img/slider1.jpg')">
	            <div class="carousel-caption d-none d-md-block">
	              <h3>JALEA  MIXTA </h3>
	              <p></p>
	            </div>
	          </div>
	          <!-- Slide Two - Set the background image for this slide in the line below -->
	          <div class="carousel-item" style="background-image: url('img/slider2.jpg')">
	            <div class="carousel-caption d-none d-md-block">
	              <h3>DUO MARINO</h3>
	              <p></p>
	            </div>
	          </div>
	          <!-- Slide Three - Set the background image for this slide in the line below -->
	          <div class="carousel-item" style="background-image: url('img/slider3.jpg')">
	            <div class="carousel-caption d-none d-md-block">
	              <h3>ARROZ CON MARISCOS</h3>
	              <p></p>
	            </div>
	          </div>
	        </div>
	        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	          <span class="sr-only">Previous</span>
	        </a>
	        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	          <span class="carousel-control-next-icon" aria-hidden="true"></span>
	          <span class="sr-only">Next</span>
	        </a>
        </div>

<!------------------------->
		<hr>


<!---------- NUESTROS SERVICIOS--------------->
<div class="container">
     <br><h2 class="text-center">ACERCA DE NOSOTROS</h2>
    <hr>
   <!--------------------------------->

      <div class="row">
       <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/gente.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Nuestros Clientes</a>
              </h4>
              <p class="card-text">El manjar Marino en concurso del Mejor ceviche compartio con sus clientes esta hermosa experiencia.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="nosotros.php"><img class="card-img-top" src="img/chef.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Nuestra experiencia</a>
              </h4>
              <p class="card-text">Nuestra experiencia en diferencia.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top " src="img/conocidos1.jpg" alt=""></a> <!-------700x400---->
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Conocidos</a>
              </h4>
              <p class="card-text">Siguiendo con nuestra mision de ser uno de los restaurantes mas conocidos del medio, tanto nuestros clientes fieles como gente del mundo artisitico que confian en nuestro servicio y lo más importante en nuestro sabor.</p>
            </div>
        </div>
      </div>       
   </div>
 
 

 <hr>

 
          <div id="carousel1_indicator" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
              <li data-target="#carousel1_indicator" data-slide-to="1"></li>
              <li data-target="#carousel1_indicator" data-slide-to="2"></li>
            </ol>  
            <div class="carousel-inner">
              <div class="carousel-item active">
                
                   <img class="d-block w-100" src="img/sliderfooter1.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/sliderfooter2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/sliderfooter3.jpeg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div> 
        </div>




<!-----------TERMINA-------------->
  <hr>
<!-----------PIE DE PÁGINA------------->
<?php include 'footer.php' ?>