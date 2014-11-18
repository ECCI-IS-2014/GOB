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
                                                                                   $card['Card']['number']));?></td>
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
                                <?php $envio=10;?>
                                <?php $totalEnvio;?>
                                <?php foreach ($products as $product):?>
                                <tr>
                                    <td><?php echo $product['Product']['name'];?></td>
                                    <td><?php echo $product['Product']['count'];?></td>
                                    <td><?php echo $product['Product']['volumen'];?></td>
                                    <td><?php echo $product['Product']['weight'];?></td>
                                    <?php $totalEnvio=$envio+$product['Product']['weight']+$product['Product']['volumen'];?>
                                    <td>$ <?php echo $totalEnvio;?></td>

                                    <td>$
                                            <?php
                                                 if($product['Product']['count'] <= $product['Product']['stock']){
                                                    echo $product['Product']['count']*$product['Product']['price']+$totalEnvio;
                                                 }else{
                                                     echo $product['Product']['stock']*$product['Product']['price'];
                                                 }
                                             ?>
                                    </td>
                                </tr>
                                <?php

                                    if($product['Product']['count'] <= $product['Product']['stock']){
                                         $total = $total + ($product['Product']['count']*$product['Product']['price']);
                                         $total+=$totalEnvio;
                                    }else{
                                         $total = $total + ($product['Product']['stock']*$product['Product']['price']);
                                    }

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