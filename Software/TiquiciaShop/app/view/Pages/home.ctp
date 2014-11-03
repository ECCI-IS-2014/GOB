<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<body>

<!-- Menú de navegación del sitio -->
<ul class="navbar">
  <li><?php echo $this->Html->link('Registrarse', '/Users/add');?>
    <li><?php
     if (!$authUser)
     {
           echo $this->Html->link('Iniciar sesion', '/Users/login');
     }else{
            echo $this->Html->link('Cerrar sesion', '/Users/logout');
     }
     ?>
  <li><a href="Informacion.html">Informacion</a>
  <li><a href="Ayuda.html">Ayuda</a>
  <li><?php echo $this->Html->link('Productos', '/products/');?>
  <?php
        if ($this->Session->read('Auth.User.role')==='admin'){?>
            <li><?php echo $this->Html->link('Usuarios', '/Users/');?>
            <li><?php echo $this->Html->link('Wishlist', '/Wishes/');
        }?>

   <?php
         if ($this->Session->read('Auth.User.role')==='customer'){?>
             <li><?php echo $this->Html->link('Wishlist', '/Wishes/');
         }?>





</ul>



<!--Combos y ofertas-->
<div>
	<h2>Combos y ofertas especiales
	<table style="width:100%">
  <tr>
    <td><img title="Balon de Volleyball" src="Balon.jpg"></td>
    <td><img title="Raquetas y bolas Ping Pong" src="Pingpong.jpg"></td>
	<td><img title="Balon de Basketball" src="basquetball.jpg"></td>
	<td><img title="Balon de Futbol" src="brazuca.jpg"></td>
  </tr>
  <tr>
    <td><?php echo $this->Html->link('Volleyball', '/products/?Search=Volleyball',
    array('title' => 'Ver Productos relacionados con Volleyball'));?></td>
    <td><?php echo $this->Html->link('Ping Pong', '/products/?Search=tenis_de_mesa',
            array('title' => 'Ver Productos relacionados con Ping Pong'));?></td>
	<td><?php echo $this->Html->link('Basketball', '/products/?Search=baloncesto',
                    array('title' => 'Ver Productos relacionados con Baloncesto'));?></td>
	<td><?php echo $this->Html->link('Futbol', '/products/?Search=futbol',
                    array('title' => 'Ver Productos relacionados con Futbol'));?></td>
  </tr>
</table>
</div>


<!-- Firma y fecha de la página, ¡sólo por cortesía! -->
<address>Copyrigth 2014<br>
</address>

</body>
</html>