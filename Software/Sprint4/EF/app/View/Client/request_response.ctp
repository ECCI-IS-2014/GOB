
<p><?php
if(strlen($response_body) < 1400){
echo "<h2> Codigo Solicitado </h2>";
echo $response_code;
}?></p>


<p><?php
if(strlen($response_body) < 1400){
echo "<h2> Respuesta </h2>";
echo $response_body;
 }?></p>

<?php if(strlen($response_body) > 1400){
    echo "<h2> Precio Dolar </h2>";
    echo substr($response_body,1400);
}
?><br><br>
<p><?php echo $this->Html->link("Ver Solicitudes de Cliente",'/Client'); ?></p>