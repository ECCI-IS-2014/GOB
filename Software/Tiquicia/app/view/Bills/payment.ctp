<div class="row">
     <div class="col-lg-15">
         <table class="table">
             <thead>
                 <tr>
                     <td>Seleccionar</td>
                     <td>Tipo</td>
                     <td>Numero Tarjeta</td>
                     <?php foreach ($cards as $card): ?>
                         <tr>
                             <td><?php echo $this->Html->link('Pagar con ',array("controller" => "Sells",
                                                                                   "action" => "index",
                                                                                   $card['Card']['number'],$country['Address']['country']));?></td>
                             <td><?php echo $card['Card']['type']; ?></td>
                             <td><?php echo $card['Card']['number']; ?></td>
                         </tr>
                     <?php endforeach; ?>
                 </tr>
                 <tr>

                <div class="row">
                    <div class="col-lg-15">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Volumen</th>
                                    <th>Peso</th>
                                    <th>Costos de envío</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total=0;?>
                                <?php $envioNacional=10;?>
								 <?php $envioInter=30;?>
                                <?php $totalEnvio;?>
                                <?php foreach ($products as $product):?>
                                <tr>
                                    <td><?php echo $product['Product']['name'];?></td>
                                    <td><?php echo $product['Product']['count'];?></td>
                                    <td><?php echo $product['Product']['volumen'];?></td>
                                    <td><?php echo $product['Product']['weight'];?></td>
                                    <?php if($country['Address']['country'] == "Costa Rica"){
												$totalEnvio=$envioNacional+$product['Product']['weight']+$product['Product']['volumen'];
										  }else{
											$totalEnvio=$envioInter+$product['Product']['weight']+$product['Product']['volumen'];
										  }
												
									?>
												
												
                                    <td>$ <?php echo $totalEnvio;?></td>

                                    <td>$
                                            <?php
                                                    echo $product['Product']['count']*$product['Product']['price']+$totalEnvio;
                                             ?>
                                    </td>
                                </tr>
                                <?php
                                         $total = $total + ($product['Product']['count']*$product['Product']['price']);
                                         $total+=$totalEnvio;
                                ?>
                                <?php endforeach;?>

                                <tr class="success">
                                    <td colspan=5></td>
                                    <td>$ <?php echo $total;?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>



                    </div>
                </div>
                 </tr>
             </thead>
             <tbody>

             </tbody>
         </table>
     </div>
 </div>
 <?php echo $this->Form->end();?>