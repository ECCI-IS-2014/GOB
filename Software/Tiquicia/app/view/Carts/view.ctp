<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Products','/Products');?>
            </li>
            <li class="active">Cart</li>
        </ol>
    </div>
</div>
 
<?php echo $this->Form->create('Cart',array('url'=>array('action'=>'update')));?>
<div class="row">
    <div class="col-lg-15">
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $total=0;?>
                <?php $ProductCount=0;?>
                <?php foreach ($products as $product):?>
                <tr>
                    <td><?php echo $product['Product']['name'];?></td>
                    <td>$<?php echo $product['Product']['price'];?></td>
                    <td><div class="col-xs-4">
                            <?php echo $this->Form->hidden('product_id.',array('value'=>$product['Product']['id']));?>
                            <?php
                                if($product['Product']['count'] > $product['Product']['stock']){
                                    $ProductCount= $ProductCount+$product['Product']['stock'];
                                    echo "Solo hay: ";
                                    echo $product['Product']['stock'];
                                    echo " productos en stock";
                                     echo $this->Form->input('count.',array('type'=>'number', 'label'=>false,
                                                                                            'class'=>'form-control input-sm', 'value'=>$product['Product']['stock']));
                                }else{
                                    $ProductCount= $ProductCount+$product['Product']['count'];
                                    echo $this->Form->input('count.',array('type'=>'number', 'label'=>false,
                                                        'class'=>'form-control input-sm', 'value'=>$product['Product']['count']));
                                }
                            ?>
                    </div></td>
                    <td>$
                            <?php
                                 if($product['Product']['count'] <= $product['Product']['stock']){
                                    echo $product['Product']['count']*$product['Product']['price'];
                                 }else{
                                     echo $product['Product']['stock']*$product['Product']['price'];
                                 }
                             ?>
                    </td>
                </tr>
                <?php

                    if($product['Product']['count'] <= $product['Product']['stock']){
                         $total = $total + ($product['Product']['count']*$product['Product']['price']);
                    }else{
                         $total = $total + ($product['Product']['stock']*$product['Product']['price']);
                    }

                ?>
                <?php endforeach;?>

                <tr class="success">
                    <td colspan=3></td>
                    <td>$<?php echo $total;?>
                    </td>
                </tr>
            </tbody>
        </table>
 
        <p class="text-right">
		<?php
                if ($count > 0){
                    echo $this->Html->link('Vaciar Carrito', array('controller' => 'Carts', 'action' => 'clear'), array('class' => 'btn btn-danger'));
                    echo $this->Form->submit('Actualizar',array('class'=>'btn btn-warning','div'=>false));
		


					if($this->Session->read('Auth.User.role')==='customer'){?>
                    <!-- Button trigger modal -->
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Comprar</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">Seleccione direcci&oacuten de env&iacuteo</h4>
									</div>
									<div class="modal-body">
										<table>
											<tr>
												<th>Pa&iacutes</th>
												<th>Direcci&oacuten</th>
												<th>Seleccionar</th>
											</tr>
											<?php foreach ($options as $option): ?>
												<tr>
													<td><?php echo $option['Address']['country']; ?></td>
													<td><?php echo $option['Address']['address']; ?></td>
													<td><?php echo $this->Html->link('Enviar', '/Bills/payment/' . $option['Address']['id']);?></td>
												</tr>
											<?php endforeach; ?>
										</table>
									</div>
								    <div class="modal-footer">
									    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
									</div>
							    </div>
						    </div>
					    </div>
							
		<?php		}else{
						//echo $this->Html->link('Inicie sesion', array('controller' => 'Users', 'action' => 'login'), array('class' => 'btn btn-success'));
					}
                }
          ?>
		
		
        </p>
    </div>
</div>
<?php echo $this->Form->end();?>