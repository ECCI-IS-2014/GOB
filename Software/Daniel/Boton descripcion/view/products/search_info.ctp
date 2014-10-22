
<?php
echo $products['Product']['name']."<br/><br/>";?>
<h4>
<?php echo "Descripción producto: " ; ?>
</h4>

<?php echo $products['Product']['type'];?>
<br/>
<br/>

<table>
    <tr>
               <th>Categoria</th>
               <th>Producto</th>
               <th>Imagen</th>
               <th>Descripcion</th>
               <th>Precio</th>
               <th>Stock</th>
               <th>Volumen</th>
               <th>Peso</th>
               <th>Palabras Claves</th>
               <th>Editar</th>
               <th>Eliminar</th>

    </tr>

<tr>
<td><?php echo $products['Product']['category']; ?></td>
<td><?php echo $products['Product']['name']; ?></td>
<td><?php echo $this->Html->image('uploads/product/filename/'.$products['Product']['filename'],array('alt'=>$products['Product']['name'],'width'=>'200')); ?></td>
<td><?php echo $products['Product']['type']; ?></td>
<td><?php echo $products['Product']['price']; ?></td>
<td><?php echo $products['Product']['stock']; ?></td>
<td><?php echo $products['Product']['volumen']; ?></td>
<td><?php echo $products['Product']['weight']; ?></td>
<ul>
    <td>
        <li><?php echo $products['Product']['keywords']; ?></li>
    </td>

     <td><?php echo $this->Html->link('Actualizar Producto',array("controller" => "Products",
                                        "action" => "searchUpdate",
                                        $products['Product']['id']));?></td>

        <td><?php echo $this->Html->link('Borrar Producto',array("controller" => "Products",
                                            "action" => "searchDelete",
                                            $products['Product']['id']));?></td>


</ul>

<?php echo $this->Form->button('Volver',
      array('onclick' => "location.href='".$this->Html->url('/products/')."'"));
?>

<?php echo $this->Form->button('Agregar a carrito',
      array('onclick' => "location.href='".$this->Html->url('/products/')."'"));
?>

<?php echo $this->Form->button('Agregar a wishlist',
      array('onclick' => "location.href='".$this->Html->url('/products/')."'"));
?>

<br/>
<br/>


</tr>
</table>
