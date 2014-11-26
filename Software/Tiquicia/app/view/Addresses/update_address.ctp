<h3>Datos de la direcci&oacuten</h3>

<?php
echo $this->Form->create('Address',array('action' => 'update_address'));
echo $this->Form->input('id',array('label'=>'id ','value'=>$addresses['Address']['id']));
echo $this->Form->input('country', array('empty'=>'Seleccionar','label'=>'Pa&iacutes','value'=>$addresses['Address']['country'],
            'options' => array('Costa Rica'=> 'Costa Rica',
            'USA' => 'USA')));
echo $this->Form->input('address', array('type' => 'textarea','label' =>  'Direcci&oacuten','value'=>$addresses['Address']['address']));
echo $this->Form->end('Modificar');
?>