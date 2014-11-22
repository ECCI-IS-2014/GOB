<?php
$cakeDescription = __d('cake_dev', 'Tiquicia Shop');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('Formato');
		echo $this->Html->css('dropdown-enhancement');


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="./dropdown-enhancement.min.js"></script>
</head>
<body>


<div id="container">
	<h1></h1>
		<?php
            if ($authUser)
            {
                  print $this->Session->read('Auth.User.username'); 
            }
            ?>
</div>


<!--barraNavegacion -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/Tiquicia" class="navbar-brand">Inicio</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/Tiquicia/Products" class="navbar-brand">Productos</a></li>
				<?php if (!$authUser){?>
					<li><a href="/Tiquicia/Users/add" class="navbar-brand">Registrarse</a></li>
				<?php }?>
				<?php if ($this->Session->read('Auth.User.role')==='customer'){?>
					<li><a href="/Tiquicia/Users/index_profile" class="navbar-brand">Perfil</a></li>
					<li><a href="/Tiquicia/Wishes" class="navbar-brand">Wishlist</a></li>
				<?php }?>
				<?php if ($this->Session->read('Auth.User.role') === 'admin'){?>
					<li><a href="/Tiquicia/Users/index" class="navbar-brand">Usuarios</a></li>
				<?php }?>
				<?php if (!$authUser){?>
					<li><a href="/Tiquicia/Users/login" class="navbar-brand">Iniciar sesion</a></li>
				<?php }else{?>
					<li><a href="/Tiquicia/Users/logout" class="navbar-brand">Cerrar sesion</a></li>
				<?php }?>
				<?php if ($this->Session->read('Auth.User.role')==='customer'){?>
					<li><a href="/Tiquicia/Cards/add_card" class="navbar-brand">Registrar tarjeta</a></li>
					<li><a href="/Tiquicia/Bills/mybill" class="navbar-brand">Mis compras</a></li>
				<?php }?>
				<?php if ($this->Session->read('Auth.User.role') != 'admin'){?>	
					<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span> Carrito <span class="badge" id="cart-counter">'.$count.'</span>',array('controller'=>'carts','action'=>'view'),array('escape'=>false));?></li>
				<?php }?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
<!--termina barraNavegacion-->
<?php echo $this->Html->script('bootstrap.min'); ?>
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>
<div id="footer">
<!--barraFooter -->
<?php if ($this->Session->read('Auth.User.role') != 'admin'){?>
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-footer">
			<a href="/Tiquicia/#" class="navbar-brand">Informacion</a>
			<a href="/Tiquicia/#" class="navbar-brand">Ayuda</a>
		</div>
	</nav>
<?php }?>
<!--termina barraFooter-->
</div>
<?php echo $this->element('sql_dump'); ?>
<?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>
