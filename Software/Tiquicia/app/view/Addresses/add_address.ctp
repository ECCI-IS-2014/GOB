
<fieldset>
<legend>Agregar direcci&oacuten de env&iacuteo</legend>
<?php

echo $this->Form->create('Address');
echo $this->Form->input('country', array('empty'=>'Seleccionar','label'=>'Pa&iacutes',
            'options' => array(
			'Costa Rica'=> 'Costa Rica',
            'EE.UU' => 'EE.UU')));
echo $this->Form->input('city', array('empty'=>'Seleccionar','label'=>'Ciudad',
            'options' => array(
                                               'CR' => "---Costa Rica---",
                                               'SJ' => "San Jose",
                                               'AJ' => "Alajuela",
                                               'HR' => "Heredia",
                                               'CG' => "Cartago",
                                               'GC' => "Guanacaste",
                                               'PU' => "Puntarenas",
                                               'LI' => "Limon",
                                               'EE' => "---EE.UU---",
                                               'AL'=>"Alabama",
                                               'AK'=>"Alaska",
                                               'AZ'=>"Arizona",
                                               'AR'=>"Arkansas",
                                               'CA'=>"California",
                                               'CO'=>"Colorado",
                                               'CT'=>"Connecticut",
                                               'DE'=>"Delaware",
                                               'DC'=>"District Of Columbia",
                                               'FL'=>"Florida",
                                               'GA'=>"Georgia",
                                               'HI'=>"Hawaii",
                                               'ID'=>"Idaho",
                                               'IL'=>"Illinois",
                                               'IN'=>"Indiana",
                                               'IA'=>"Iowa",
                                               'KS'=>"Kansas",
                                               'KY'=>"Kentucky",
                                               'LA'=>"Louisiana",
                                               'ME'=>"Maine",
                                               'MD'=>"Maryland",
                                               'MA'=>"Massachusetts",
                                               'MI'=>"Michigan",
                                               'MN'=>"Minnesota",
                                               'MS'=>"Mississippi",
                                               'MO'=>"Missouri",
                                               'MT'=>"Montana",
                                               'NE'=>"Nebraska",
                                               'NV'=>"Nevada",
                                               'NH'=>"New Hampshire",
                                               'NJ'=>"New Jersey",
                                               'NM'=>"New Mexico",
                                               'NY'=>"New York",
                                               'NC'=>"North Carolina",
                                               'ND'=>"North Dakota",
                                               'OH'=>"Ohio",
                                               'OK'=>"Oklahoma",
                                               'OR'=>"Oregon",
                                               'PA'=>"Pennsylvania",
                                               'RI'=>"Rhode Island",
                                               'SC'=>"South Carolina",
                                               'SD'=>"South Dakota",
                                               'TN'=>"Tennessee",
                                               'TX'=>"Texas",
                                               'UT'=>"Utah",
                                               'VT'=>"Vermont",
                                               'VA'=>"Virginia",
                                               'WA'=>"Washington",
                                               'WV'=>"West Virginia",
                                               'WI'=>"Wisconsin",
                                               'WY'=>"Wyoming"), 'disabled' => array('CR','EE')));
echo $this->Form->input('address', array('type' => 'textarea','label' =>  'Direcci&oacuten'));
echo $this->Form->submit('Agregar', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
