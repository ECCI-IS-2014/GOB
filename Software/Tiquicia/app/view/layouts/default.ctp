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
                  print $this->Session->read('Auth.User.username'); echo '('; echo $this->Html->link('Cerrar sesion', '/Users/logout'); echo ')';
            }
            else
            {
                echo $this->Html->link('Iniciar sesion', '/Users/login');

            }

            ?>
		
				<!--shopping cart -->
			<nav class="navbar navbar-default" role="navigation">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<?php echo $this->Html->link('Carrito de Compras','/carts/view',array('class'=>'navbar-brand'));?>
			  </div>
			  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
				  <li>
					<?php echo $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span> Carrito <span class="badge" id="cart-counter">'.$count.'</span>',array('controller'=>'carts','action'=>'view'),array('escape'=>false));?>
				</li>
				</ul>
			  </div><!-- /.navbar-collapse -->
			</nav>
			<!--termina carrito-->
		<div id="content">
<div class="bs-example">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
          <nav role="navigation" class="navbar navbar-default navbar-static" id="navbar-example">
            <div class="container-fluid">
              <div class="navbar-header">
                <button data-target=".bs-example-js-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a href="/Tiquicia" class="navbar-brand">Inicio</a> </div>
                <div class="navbar-header">
                   <button data-target=".bs-example-js-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                     <a href="/Tiquicia/Products" class="navbar-brand">Productos</a> </div>
                  <div class="navbar-header">
                  <button data-target=".bs-example-js-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                     <a href="/Tiquicia/Wishes" class="navbar-brand">Wishlist</a> </div>
              <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class="dropdown"> <a href="#" data-toggle="dropdown">Fútbol <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-submenu"><a href="#" tabindex="-1" data-toggle="dropdown">Tacos</a>
                        <ul class="dropdown-menu">
                          <li><a href="/Tiquicia/Products?category=Futbol&subcategory=Tacos&subsubcategory=Adidas" tabindex="-1">Adidas</a></li>
                          <li><a href="/Tiquicia/Products?category=Futbol&subcategory=Tacos&subsubcategory=Nike" tabindex="-1">Nike</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu"><a href="#" tabindex="-1" data-toggle="dropdown">Balones</a>
                        <ul class="dropdown-menu">
                          <li><a href="/Tiquicia/Products?category=Futbol&subcategory=Balones&subsubcategory=Nike" tabindex="-1">Nike</a></li>
                          <li><a href="/Tiquicia/Products?category=Futbol&subcategory=Balones&subsubcategory=Barcelona" tabindex="-1">Barcelona</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu"><a href="#" tabindex="-1" data-toggle="dropdown">Vestimenta</a>
                          <ul class="dropdown-menu">
                                <li><a href="/Tiquicia/Products?category=Futbol&subcategory=Vestimenta&subsubcategory=Nike" tabindex="-1">Nike</a></li>
                                <li><a href="/Tiquicia/Products?category=futbol&subcategory=Vestimenta&subsubcategory=Umbro" tabindex="-1">Umbro</a></li>
                                <li><a href="/Tiquicia/Products?category=Futbol&subcategory=Vestimenta&subsubcategory=Adidas" tabindex="-1">Adidas</a></li>
                           </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a href="#" data-toggle="dropdown">Baloncesto<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-submenu"><a href="#" tabindex="-1" data-toggle="dropdown">Balones</a>
                        <ul class="dropdown-menu">
                          <li><a href="/Tiquicia/Products?category=Baloncesto&subcategory=Balones&subsubcategory=Spalding" tabindex="-1">Spalding</a></li>
                          <li><a href="/Tiquicia/Products?category=Baloncesto&subcategory=Balones&subsubcategory=Nike" tabindex="-1">Nike</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu"><a href="#" tabindex="-1" data-toggle="dropdown">Tenis</a>
                        <ul class="dropdown-menu">
                          <li><a href="/Tiquicia/Products?category=Baloncesto&subcategory=Tenis&subsubcategory=Jordan Air" tabindex="-1">Jordan Air</a></li>
                          <li><a href="/Tiquicia/Products?category=Baloncesto&subcategory=Tenis&subsubcategory=New balance" tabindex="-1">New balance</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a href="#" data-toggle="dropdown">Tenis de Mesa<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a href="#" tabindex="-1" data-toggle="dropdown">Raquetas</a>
                            <ul class="dropdown-menu">
                                <li><a href="/Tiquicia/Products?category=Tenis de Mesa&subcategory=Raquetas&subsubcategory=Butterfly" tabindex="-1">Butterfly</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu"><a href="#" tabindex="-1" data-toggle="dropdown">Mesas</a>
                            <ul class="dropdown-menu">
                                <li><a href="/Tiquicia/Products?category=Tenis de Mesa&subcategory=Mesas&subsubcategory=Tibhar" tabindex="-1">Tibhar</a></li>
                                <li><a href="/Tiquicia/Products?category=Tenis de Mesa&subcategory=Mesas&subsubcategory=Donic" tabindex="-1">Donic</a></li>
                            </ul>
                        </li>
                    </ul>
                  </li>

                  <li class="dropdown"> <a href="#" data-toggle="dropdown">Volleyball<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                            <li class="dropdown-submenu"><a href="#" tabindex="-1" data-toggle="dropdown">Balones</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/Tiquicia/Products?category=Volleyball&subcategory=Balones&subsubcategory=Mikasa" tabindex="-1">Mikasa</a></li>
                                    <li><a href="/Tiquicia/Products?category=Volleyball&subcategory=Balones&subsubcategory=Nike" tabindex="-1">Nike</a></li>
                                    <li><a href="/Tiquicia/Products?category=Volleyball&subcategory=Balones&subsubcategory=Pioner" tabindex="-1">Pioner</a></li>
                                </ul>
                            </li>
                        <li class="dropdown-submenu"><a href="#" tabindex="-1" data-toggle="dropdown">Tenis</a>
                            <ul class="dropdown-menu">
                                <li><a href="/Tiquicia/Products?category=Volleyball&subcategory=Tenis&subsubcategory=New Balance" tabindex="-1">New Balance</a></li>
                                <li><a href="/Tiquicia/Products?category=Volleyball&subcategory=Tenis&subsubcategory=Nike" tabindex="-1">Nike</a></li>
                                <li><a href="/Tiquicia/Products?category=Volleyball&subcategory=Tenis&subsubcategory=Adidas" tabindex="-1">Adidas</a></li>
                            </ul>
                        </li>
                    </ul>
                  </li>

                </ul>

              </div>
              <!-- /.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
          </nav>
          <!-- /navbar-example -->
        </div>
            <?php echo $this->Html->script('bootstrap.min'); ?>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>

	<?php echo $this->element('sql_dump'); ?>

    <?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>
