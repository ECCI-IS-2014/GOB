<h3>Datos de la tarjeta</h3>

<?php
echo $this->Form->create('Card',array('action' => 'delete_card'));
echo $this->Form->input('type', array('empty'=>'Seleccionar','label'=>'Tipo','value'=>$cards['Card']['type'],
            'options' => array('Visa'=> 'Visa',
            'MasterCard' => 'MasterCard',
            'AmericanExpress' => 'AmericanExpress')));
echo $this->Form->input('id',array('label'=>'id ','value'=>$cards['Card']['id']));
echo $this->Form->input('number',array('label' =>'Numero de tarjeta','value'=>$cards['Card']['number']));
echo $this->Form->input('expire_date', array(
	'label' => 'Fecha vencimiento','value'=>$cards['Card']['expire_date'],
    'dateFormat' => 'DMY',
    'minYear' => date('Y'),
    'maxYear' => date('Y') + 30,
));
echo $this->Form->input('sec_code',array('label' =>'Numero de seguridad','value'=>$cards['Card']['sec_code']));
echo $this->Form->end('Eliminar tarjeta');

?>