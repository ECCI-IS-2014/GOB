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
             </thead>
             <tbody>

             </tbody>
         </table>
     </div>
 </div>
 <?php echo $this->Form->end();?>