<fieldset>


<legend>Productos disponibles</legend>
<p>=>Buscar productos por palabra clave</p>


<?php
    echo $this->Form->create();
    echo $this->Form->input('Search',array('label'=>''));
    echo $this->Form->submit(__('Buscar'));
    echo $this->Form->end();
?>
 <hr />
<p>
<?php echo $this->Html->link('Inicio', '/');?><br>
	<?php
	echo $this->Paginator->counter( 'Mostrando <b><u>{:current}</u></b> registros  de
         <b><u>{:count}</b></u> en total');
	?>	</p>
	 <hr />
<table>
    <tr>
        <th>Categoria</th>
        <th>Producto</th>
        <?php
                if($this->Session->read('Auth.User.role')==='admin'){ ?>


                             <th> Estado</th>
               <?php }?>
        <th>Imagen</th>
        <th>Palabras Claves</th>
        <th>Informacion</th>

    </tr>
<?php foreach ($products as $product): ?>
<tr>
<td><?php echo $product['Category']['name']; ?>
<br>&nbsp;&nbsp;•<?php echo $product['Subcategory']['name']; ?>
<br>&nbsp;&nbsp;&nbsp;&nbsp;•<?php echo $product['Subsubcategory']['name']; ?></td>
<td><?php echo $product['Product']['name']; ?></td>
<?php if ($this->Session->read('Auth.User.role')==='admin'){?>
        <td><?php
        if($product['Product']['state'] == '0'){

                echo 'No disponible';
        }
        else{
                echo 'Disponible';
        }
       }?>
<td><?php echo $this->Html->image('uploads/product/filename/'.$product['Product']['filename'],array('alt'=>$product['Product']['name'],'width'=>'200')); ?></td>

<ul>
    <td>
        <li><?php echo $product['Product']['keywords']; ?></li>
    </td>

    <td><?php echo $this->Html->link('Mas informacion',array("controller" => "Products",
                                            "action" => "searchInfo",
                                            $product['Product']['id']));?></td>


</ul>


<?php endforeach; ?>
</tr>
</table>

</br>


    <th><?php if ($this->Session->read('Auth.User.role')==='admin'){
                ?><div id="content">
					<div class="bs-example">
						<nav role="navigation" class="navbar navbar-default navbar-static" id="navbar-example">
							<div class="container-fluid">
							<div class="navbar-header">
								<ul class="nav navbar-nav">
									<li class="dropdown"> <a href="#" data-toggle="dropdown">Agregar<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="/Tiquicia/Products/add" tabindex="-1">Producto</a></li>
											<li><a href="/Tiquicia/Categories/add_category" tabindex="-1">Categoria</a></li>
											<li><a href="/Tiquicia/Subcategories/add_subcategory" tabindex="-1">Subcategoria</a></li>
											<li><a href="/Tiquicia/Subsubcategories/add_subsubcategory" tabindex="-1">Subsubcategoria</a></li>
										</ul>
									<li class="dropdown"> <a href="#" data-toggle="dropdown">Eliminar<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="/Tiquicia/Categories/delete_category" tabindex="-1">Categoria</a></li>
									<li><a href="/Tiquicia/Subcategories/delete_subcategory" tabindex="-1">Subcategoria</a></li>
									<li><a href="/Tiquicia/Subsubcategories/delete_subsubcategory" tabindex="-1">Subsubcategoria</a></li>
								</ul>
							</div>
						</nav>
					</div>
				<?php
			  }
        ?>
<br>
<?php echo $this->Html->link('Inicio', '/');?>
</fieldset>