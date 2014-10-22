<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 22/10/14
 * Time: 10:24 AM
 */
?>

<h4>
<?php echo "=>Descripción producto: " ; ?>
</h4>

<?php
echo $products['Product']['type'];?>
<br/>
<br/>
<table>
<tr>
    <th>Imagen del producto</th>
    <th>Precio</th>
    <th>Carrito</th>
    <th>Wishlist</th>
</tr>
<tr>
    <td>
<?php
echo $this->Html->image('uploads/product/filename/'.$products['Product']['filename'],array('alt'=>$products['Product']['name'],'width'=>'200'));
?></td>
<td><?php echo "$".$products['Product']['price'];?></td>
<td>
<?php echo $this->Form->button('Agregar al Carrito',
      array('onclick' => "location.href='".$this->Html->url('/products/')."'"));?>

<td>

<?php echo $this->Form->button('Agregar al Wishlist',
      array('onclick' => "location.href='".$this->Html->url('/products/')."'"));?>

</td>
</tr>
</table>
<br/>

<?php echo $this->Html->link('Home', '/');?>

