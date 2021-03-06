<?php echo $this->Form->create('Cart',array('url'=>array('action'=>'update')));?>
<div class="row">
    <div class="col-lg-15">
        <table class="table">
            <thead>
                <tr>
                    <th>Fecha de Compra</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total+Envio</th>
					<th>Estado de envio</th>
                </tr>
            </thead>
            <tbody>
                <?php $total=0;?>
				<?php $envioNacional=10;?>
				<?php $envioInternacional=30;?>
				<?php $totalEnvio;?>
				<?php if($country == "Costa Rica"){
						$totalEnvio=$envioNacional;
					  }else{
						$totalEnvio=$envioInternacional;
					  }
				?>
                <?php foreach ($products as $product):?>
                <tr>
                    <td><?php echo date('Y-m-d H:i'); ?> </td>
                    <td><?php echo $product['Product']['name'];?></td>
                    <td>$<?php echo $product['Product']['price']?></td>
                    <td><?php echo $product['Product']['count'];?></td>
                    <td>$<?php echo $totalEnvio+$product['Product']['weight']+$product['Product']['volumen']+($product['Product']['count']*$product['Product']['price']); ?></td>
					<?php  $total= $total+$totalEnvio+$product['Product']['weight']+$product['Product']['volumen']+($product['Product']['count']*$product['Product']['price']);?>
					<td><?php echo "No despachado"; ?> </td>
                </tr>
                <?php



                ?>
                <?php endforeach;?>

                <tr class="success">
                    <td colspan=4></td>
                    <td>$<?php echo $total;?>
                    </td>
                </tr>
            </tbody>
        </table>
        <p>
            <?php echo $this->Html->link('Imprimir Factura', array('controller' => 'Sells', 'action' => 'index'), array('class' => 'btn btn-success'));?>
        </p>
 
    </div>
</div>
<?php echo $this->Form->end();?>