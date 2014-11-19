<h3>Direcci&oacuten</h3>

<?php
echo $this->Form->create('Address',array('action' => 'delete_address'));
echo $this->Form->input('id',array('label'=>'id ','value'=>$addresses['Address']['id']));
echo $this->Form->input('country',array('label' =>'Pa&iacutes','value'=>$addresses['Address']['country'],'disabled'=>'disabled'));
echo $this->Form->input('address', array('type' => 'textarea','label' =>  'Direcci&oacuten','value'=>$addresses['Address']['address'],'disabled'=>'disabled'));
echo $this->Form->end('Eliminar');
?>