<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<body>

<!-- Menú de navegación del sitio -->
<ul class="navbar">
  <li><?php echo $this->Html->link('Sign up', '/Users/add');?>
  <li><?php echo $this->Html->link('Log in', '/Users/login');?>
  <li><?php echo $this->Html->link('Log out', '/Users/logout');?>
  <li><a href="Informacion.html">Informacion</a>
  <li><a href="Ayuda.html">Ayuda</a>
  <li><?php echo $this->Html->link('Productos', '/products/');?>
  <li><?php echo $this->Html->link('Usuarios', '/Users/');?>

</ul>

<!-- Contenido principal -->
<div id="menu">
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="aboutus.html">F&uacute;tbol</a></li>
<li><a href="services.html">Baloncesto</a></li>
<li><a href="contactus.html">Tenis de mesa</a></li>
<li><a href="contactus.html">Voleibol</a></li>
<li><a href="contactus.html">B&eacute;isbol</a></li>
</ul>
</div>
<!--Combos y ofertas-->
<div>
	<h2>Combos y ofertas especiales
	<table style="width:100%">
  <tr>
    <td><img title="Balon de Volleyball" src="Balon.jpg"></td>
    <td><img title="Raquetas y bolas Ping Pong" src="Pingpong.jpg"></td>
	<td><img title="Balon de Basquetball" src="basquetball.jpg"></td>
	<td><img title="Balon de Futbol" src="brazuca.jpg"></td>
  </tr>
  <tr>
    <td><a href="Articulo.html">Balon de VolleyBall</a></td>
    <td><a href="Articulo.html">Raquetas y bolas de Ping Pong</a></td>
	<td><a href="Articulo.html">Balon de Basquetball</a></td>
	<td><a href="Articulo.html">Balon de Futbol</a></td>
  </tr>
</table>
</div>

<!--Articulos principales-->
<div>
<fieldset>
<legend>Productos Disponibles</legend>
<table>
    <tr>
        <th>Id</th>
        <th>Producto</th>
        <th>Imagen</th>
        <th>Precio</th>
        <th>Palabras Claves</th>
    </tr>



</table>

</br>


</fieldset>
</div>
<!-- Firma y fecha de la página, ¡sólo por cortesía! -->
<address>Copyrigth 2014<br>
</address>

</body>
</html>