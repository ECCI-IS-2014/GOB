
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
               <th>Precio</th>
               <th>Stock</th>
               <th>Volumen</th>
               <th>Peso</th>
               <th>Palabras Claves</th>
               <th><?php if ($this->Session->read('Auth.User.role')==='admin'){
                            echo Editar;
                        }
                    ?></th>
               <th><?php if ($this->Session->read('Auth.User.role')==='admin'){
                                           echo Eliminar;
                                       }
                                   ?></th>

    </tr>

<tr>
<td><?php echo $products['Category']['name']; ?>
<br>&nbsp;&nbsp;•<?php echo $products['Subcategory']['name']; ?>
<br>&nbsp;&nbsp;&nbsp;&nbsp;•<?php echo $products['Subsubcategory']['name']; ?></td>
<td><?php echo $products['Product']['name']; ?></td>
<td><?php echo $this->Html->image('uploads/product/filename/'.$products['Product']['filename'],array('alt'=>$products['Product']['name'],'width'=>'200')); ?></td>
<td><?php echo $products['Product']['price']; ?></td>
<td><?php echo $products['Product']['stock']; ?></td>
<td><?php echo $products['Product']['volumen']; ?></td>
<td><?php echo $products['Product']['weight']; ?></td>
<ul>
    <td>
        <li><?php echo $products['Product']['keywords']; ?></li>
    </td>

     <td><?php
            if ($this->Session->read('Auth.User.role')==='admin'){
                echo $this->Html->link('Actualizar Producto',array("controller" => "Products",
                                        "action" => "searchUpdate",
                                        $products['Product']['id']));}?></td>


        <td><?php
                if ($this->Session->read('Auth.User.role')==='admin' ){
                    echo $this->Html->link('Borrar Producto',array("controller" => "Products",
                                            "action" => "searchDelete",
                                            $products['Product']['id']));}?></td>


</ul>

<?php echo $this->Form->button('Volver',
      array('onclick' => "location.href='".$this->Html->url('/products/')."'",'class'=>'btn-success btn btn-lg'));
?>
<?php echo $this->Form->create('Cart',array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'add')));?>
<?php echo $this->Form->hidden('product_id',array('value'=>$products['Product']['id']))?>
<?php echo $this->Form->button('Añadir al carrito',array('class'=>'btn-success btn btn-lg'));?>
<?php echo $this->Form->end();?>

			

<?php
    if ($authUser){
          /*echo $this->Html->link('Añadir al wishlist ',array("controller" => "Wishes",
                                              "action" => "searchAdd",
                                              $product['Product']['id']),array(
                                              'title' => 'Dar clic para añadir el producto '.$products['Product']['name']
                                              ));*/
           echo $this->Form->button('Añadir al Wishlist',
                array('onclick' => "location.href='".$this->Html->url('/Wishes/searchAdd/').$products[Product][id]."'",'class'=>'btn-success btn btn-lg'));
    }
?>

<br/>
<br/>


</tr>
</table>
<script>
$(document).ready(function(){
	$('#add-form').submit(function(e){
		e.preventDefault();
		var tis = $(this);
		$.post(tis.attr('action'),tis.serialize(),function(data){
			$('#cart-counter').text(data);
		});
	});
});
</script>