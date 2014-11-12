
<fieldset>
<legend>Registrar tarjeta</legend>
<?php

echo $this->Form->create('Card',array('type'=>'file'));
echo $this->Form->input('type', array('empty'=>'Seleccionar','label'=>'Tipo',
            'options' => array('Visa'=> 'Visa',
            'MasterCard' => 'MasterCard',
            'AmericanExpress' => 'AmericanExpress')));
echo $this->Form->input('number',array('label' =>'Numero de tarjeta'));
echo $this->Form->input('expire_month', array('empty'=>'Seleccionar','label'=>'Mes vencimiento',
            'options' => array('01'=> 01,
            '02' => 02,
            '03' => 03,
			'04' => 04,
			'05' => 05,
			'06' => 06,
			'07' => 07,
			'08' => 08,
			'09' => 09,
			'10' => 10,
			'11' => 11,
			'12' => 12)));
echo $this->Form->input('expire_year', array('empty'=>'Seleccionar','label'=>'Mes vencimiento',
            'options' => array('2015'=> 2015,
            '2016' => 2016,
            '2017' => 2017,
			'2018' => 2018,
			'2019' => 2019,
			'2020' => 2020,
			'2021' => 2021,
			'2022' => 2022,
			'2023' => 2023,
			'2024' => 2024,
			'2025' => 2025,
			'2026' => 2026,
			'2027' => 2027,
			'2028' => 2028,
			'2029' => 2029,
			'2030' => 2030,)));
echo $this->Form->input('sec_code',array('label' =>'Numero de seguridad'));
echo $this->Form->submit('Agregar tarjeta', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
