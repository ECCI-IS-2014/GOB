 <?php echo $this->Form->create('Cart',array('url'=>array('action'=>'update')));?>
 <div class="row">
     <div class="col-lg-15">
         <table class="table">
             <thead>
                 <tr>
                     <th>Producto</th>
                     <th>Cantidad</th>
                     <th>Precio Unitario</th>
                     <th>Precio Total</th>
                 </tr>
             </thead>
             <tbody>
                 <?php $total=0;?>
                 <?php foreach ($products as $product):?>
                 <tr>
                     <td><?php echo $product['Product']['name'];?></td>
                     <td>
                        <?php
                        if($product['Product']['count']>$product['Product']['stock']){
                             echo $product['Product']['stock'];
                        }else{
                            echo $product['Product']['count'];
                        }
                           ?>
                     </td>
                     <td>$<?php echo $product['Product']['price'];?></td>

                     <td>$
                       <?php
                       if($product['Product']['count']>$product['Product']['stock']){
                           echo $product['Product']['stock']*$product['Product']['price'];
                       }else{
                           echo $product['Product']['count']*$product['Product']['price'];
                       }

                       ?>
                     </td>
                 </tr>
                    <?php
                     if($product['Product']['count']>$product['Product']['stock']){
                         $total = $total + ($product['Product']['stock']*$product['Product']['price']);
                     }else{
                         $total = $total + ($product['Product']['count']*$product['Product']['price']);
                     }


                     ?>
                 <?php endforeach;?>

                 <tr class="success">
                     <td colspan=3></td>
                     <td>$ <?php echo $total;  /*imprime el $ en el total*/?>
                     </td>
                 </tr>
             </tbody>
         </table>

         <p class="text-right">
 			<?php echo $this->Form->button('Imprimir Factura', array('controller' => 'Carts', 'action' => 'clear'), array('class' => 'btn btn-success'));?>
         </p>

     </div>
 </div>
 <?php echo $this->Form->end();?>