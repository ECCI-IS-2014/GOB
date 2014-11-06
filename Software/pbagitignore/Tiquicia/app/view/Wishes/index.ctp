<?php echo "<legend>Productos en su lista de deseos</legend>"; ?>

<table class="table">

<tr>
    <th>Producto</th>
    <th>Imagen</th>
    <th>Estado</th>
    <th>Eliminar Producto de la lista<th>
</tr>

<?php foreach ($Wish as $wishes): ?>
<tr>
    <td>
    <?php
        if($wishes['Product']['state'] == '1'){

            echo $this->Html->link($wishes['Product']['name'],array("controller" => "Products",
                                                "action" => "searchInfo",
                                                $wishes['Product']['id']));

      }
      else{
        echo $wishes['Product']['name'];
      }

      ?></td>

   <td><?php echo $this->Html->image('uploads/product/filename/'.$wishes['Product']['filename'],array('alt'=>$product['Product']['name'],'width'=>'200')); ?></td>

    <td>

     <?php if($wishes['Product']['state'] == '1'){

        echo 'Disponible para comprar';

     }
     else{
        echo 'NO disponible para comprar';
     }

     ?>

     </td>
    <td> <?php echo $this->Html->link('Borrar Producto ',array("controller" => "Wishes",
                                                     "action" => "delete",
                                                     $wishes['Wish']['id']));?> </td>
</tr>

<?php endforeach; ?>

</table>