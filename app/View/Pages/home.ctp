<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panificadora del Sur - Inicio</title>
		<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css(array('estilos','bootstrap-theme.min','bootstrap.min','footer', 'cake.generic'));
		echo $this->Html->css(array('bootstrap','estilos','mio'));
		echo $this->Html->script(array('jquery-2.2.4','bootstrap'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div class="jumbotron">
			<h2>Bienvenido al Sistema de Panificadora del Sur</h2><br><br>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            	<li data-target="#myCarousel" data-slide-to="2"></li>
            	<li data-target="#myCarousel" data-slide-to="3"></li>
            	<li data-target="#myCarousel" data-slide-to="4"></li>
            	<li data-target="#myCarousel" data-slide-to="5"></li>
            	<li data-target="#myCarousel" data-slide-to="6"></li>
          		</ol>
             <div class="carousel-inner">
                <div class="item active">
                  <img src="img/panificados1.jpg" alt="panificados1">
                </div>

                 <div class="item">
                  <img src="img/panificados2.jpg" alt="panificados2">
                </div>

                 <div class="item">
                  <img src="img/panificados3.jpg" alt="panificados3">
                </div>


                 <div class="item">
                  <img src="img/panificados4.jpg" alt="panificados4">
                </div>


                 <div class="item">
                  <img src="img/panificados5.jpg" alt="panificados5">
                </div>


                 <div class="item">
                  <img src="img/panificados6.jpg" alt="panificados6">
                </div>
            </div>

          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
      </div><br><br>
			<div class="row">
				<div class="col-lg-7">
					<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de...</p>
  					<p><a class="btn btn-primary btn-lg" href="#" role="button">Mas...</a></p>
				</div>
   				<div class="col-lg-5">
   				<img class="img-responsive img-thumbnail" src="https://px.fotos.cdn.0223.com.ar/f/022017/1487256978597.jpeg" alt="">
			</div>
		</div></div>
	</div>
</body>
</html>