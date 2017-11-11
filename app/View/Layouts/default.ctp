<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>
	Panificados del Sur - Inicio
	</title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css(array('estilos','bootstrap-theme.min','bootstrap.min','footer', 'cake.generic'));
		echo $this->Html->css(array('estilos','cake.generic','bootstrap','font-awesome.min','bootstrap-theme','footer'));

		echo $this->Html->script(array('jquery-2.2.4','bootstrap'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
		<div id="header">
			<nav class="navbar navbar-inverse navbar-fixed-top">
 			<div class="container-fluid">
    	<div class="navbar-header">
          <a class="navbar-brand" href="#">Panificados del Sur</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
      </div>

     	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li class="active"><a href="index.html">Home</a></li>
        			<li><a href="#">Usuarios</a></li>
        				<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pedidos<span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="#">Pedidos de Cliente</a></li>
            			<li><a href="#">Pedidos de Producci&oacute;n</a></li>
          			</ul></li>
        			<li><a href="#">Productos</a></li>
        			<li><a href="#">Insumos</a></li>
        			<li><a href="#">F&oacute;rmulas</a></li>
      				</ul>
      			<ul class="nav navbar-nav navbar-right">
        			<li><a href="#" type="button" data-toggle="modal" data-target="#salir">Salir</a></li>
        		</ul>
    		</div>
			</div>
		</nav>
	</div>
  
  <div id="container">  			
	<div id="content">

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
	</div>

	<div id="footer">

		<nav class="navbar navbar-inverse navbar-fixed-bottom">
 		<div class="container-fluid">
 			<div class="navbar-header">
      			<p class="navbar-brand" >Panificados del Sur © 2017</p>
    		</div>
    		<div class="nav navbar-nav navbar-right" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
      			<li><a>Webmasters: Maximiliano Rodrigo Soria - Esteban Joel Slobodianik</a></li>
      			</ul>
      		</div>
 		</div>
 		</nav>
  </div>
</body>
</html>
