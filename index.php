<!DOCTYPE html>
<?php include 'vistas/encabezado.php' ?>
<body>
	<article class="contenedorpag">
		<header>
			<img src="img/ambiensup.png" alt="AMBIENSUP ANALISTAS PROFESIONALES" class="img-responsive pull-left">

			<div class="col-md-7 pull-right menu">
				<ul class="nav nav-tabs">
					<li role="presentation" class="active"><a href="index.php">Inicio</a></li>
					<li role="presentation"><a href="vistas/nosotros.php">Quienes Somos</a></li>
					<li role="presentation"><a href="vistas/servicios.php">Servicios</a></li>
					<li role="presentation"><a href="vistas/contacto.php">Contacto</a></li>
				</ul>
			</div>
		</header>

		<a class="go-top" href="#">Subir</a>

      		<div class="jumbotron jum">
			  <article class="contenjum">
			  	<h2>AMBIENSUP ANALISTAS PROFESIONALES</h2>
			  	<p>Somos una empresa con años de experiencia dedicada a resolver problemas Geofísicos y Ambientales.</p>
			  	<p><a class="btn btn-danger btn-lg" href="#" role="button"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>&nbsp;Contáctanos</a></p>
			  </article>
			</div>

			<div class="hola">
				<h1 class="colorh2 text-center">Soluciones Geofísicas</h1> <br>
		        <!-- <div class="row"> -->
		          <div class="col-md-4">
		            <img id="imggeo" src="`img/geotecnia.jpg"
		            class="img-responsive">
		            <h2 class="colorh2">Geotécnia</h2>
		            <p class="colorp">
		            	<b><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Down Hole</b> <br>
		            	<b><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Cross Hole</b> <br>
		            	<b><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Pruebas de continuidad</b> <br>
		            	<b><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Tomografia Sismica</b>
		            </p>
		          </div>
		          <div class="col-md-4">
		            <img id="imggeo" src="img/mag.jpg"
		            class="img-responsive">
		            <h2 class="colorh2">Métodos electromagnéticos</h2>
		            <p class="colorp">
		            	<b><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Georradar GPR</b> <br>
		            	<b><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Transitorio Electromagnético TEM</b>
		            </p>
		          </div>
		          <div class="col-md-4">
		            <img id="imggeo" src="img/elec.jpg"
		            class="img-responsive">
		            <h2 class="colorh2">Métodos eléctricos</h2>
		            <p class="colorp">
		            	<b><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Tomografía Eléctrica</b> <br>
		            	<b><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Sondeo Eléctrico Vertical</b> <br>
		            	<b><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Sondeo Eléctrico Vertical Wenner</b>
		            </p>
		          </div>
		        <!-- </div> -->

            </div>
			
			<br>
            <article class="boton">
            	<a class="btn btn-danger btn-lg" href="#" role="button"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>&nbsp;Servicios</a>
            	   <!-- <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star -->
            </article>

		<?php include 'vistas/pie.php' ?>

	</article>

<script src="js/jquery.js"></script>
<script src="js/arriba.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>