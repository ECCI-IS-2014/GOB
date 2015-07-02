<?php echo $this->Html->link('Home', '/');?>


<!--  Para imagen de carga -->
<body onLoad="init()">
		<div id=loadimg style="position:absolute; width:100%; text-align:center; top:300px;">
<img src="img/ajax-loader.gif" border=0 style="width:120px;height:120px;"></div>

  <script>
 var ld=(document.all);
  var ns4=document.layers;
 var ns6=document.getElementById&&!document.all;
 var ie4=document.all;
  if (ns4)
 	ld=document.loadimg;
 else if (ns6)
 	ld=document.getElementById("loadimg").style;
 else if (ie4)
 	ld=document.all.loadimg.style;
  function init()
 {
 if(ns4){ld.visibility="hidden";}
 else if (ns6||ie4) ld.display="none";
 }
 </script>

 
 
 
 
 
<div class="manualdatalogs index">

<h2><?php __('Manualdatalogs');?></h2>
    <?php
        echo $this->Form->create('Manualdatalog');
        // Load the calendar class
        require 'calendar/tc_calendar.php';
    ?>

    <table cellpadding="0" cellspacing="0">
        <tr>
		
			<td>&nbsp;Start date:<br>
                <?php
                    $calendarStart = new tc_calendar("date1", true,true);
                    $calendarStart->setIcon("calendar/images/iconCalendar.gif");
                    $calendarStart->setPath("calendar/");
                    $calendarStart->setYearInterval(1960, 2075);
                    $calendarStart->dateAllow('1960-01-01', '2076-01-01');
                    $calendarStart->setTheme('theme2');
                   // $calendarStart->setDate(6,6,2015);
                    $calendarStart->setDate(date('d'), date('m'), date('Y'));
                    $calendarStart->setTimezone("America/Costa Rica");
                    $calendarStart->writeScript();
                ?>
            </td>
            <td>&nbsp;End date:<br>
                <?php
                    $calendarEnd = new tc_calendar("date2", true);
                    $calendarEnd->setIcon("calendar/images/iconCalendar.gif");
                    $calendarEnd->setPath("calendar/");
                    $calendarEnd->setYearInterval(1960, 2075);
                    $calendarEnd->dateAllow('1960-01-01', '2076-01-01');
                    $calendarEnd->setTheme('theme2');
                    $calendarEnd->setDate(date('d'), date('m'), date('Y'));
                    $calendarEnd->setTimezone("America/Costa Rica");
                    $calendarEnd->writeScript();
                ?>
            </td>
       </tr>
        <tr>
            <th>
                <?php echo $this->Form->input('station_id');?>
            </th>
            <th>
                Which Parameters do you want to show?<br /><br />
                <table>
                    <tr>
                        <td> <input type="checkbox" name="formDoor[]" value="A" checked/>Temp</td>
                        <td>
                            <input type="checkbox" name="formDoor[]" value="B" checked/>Mintemp</td>
                        <td>
                            <input type="checkbox" name="formDoor[]" value="C" checked/>Maxtemp </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="formDoor[]" value="D" checked/>Relative Humidity</td>
                        <td> <input type="checkbox" name="formDoor[]" value="E" checked/>Barometric Pressure</td>
                        <td> <input type="checkbox" name="formDoor[]" value="F" checked />Rainfall</td>
                    </tr>

                </table>

            </th>


        </tr>
        <tr>
            <td>
                <?php
                //aquí recibe las fechas y la estación por el método 'post' y las guarda, estan ubicados aqui
                //para efectos de mostrar la fecha inicial y final escogidas, en columnas diferentes
                    $start_date=$_POST["date1"];
                    $end_date = $_POST["date2"];
                    $stationid=$this->data['Manualdatalog']['station_id'];
                    if($start_date!=''          &&
                        $start_date!='0000-00-00'&&
                        $end_date!=''          &&
                        $end_date!='0000-00-00'){
                        echo "Start date: ".$start_date;
                ?>
            </td>
            <td>
                <?php   echo " End date: ".$end_date;
                     }else{
                        //echo "no date selected";
                      }
                ?>
            </td>
            <td>
            </td>
        </tr>


    </table>
		<table cellpadding="12" cellspacing="2">
		<th>	<?php  echo $this->Form->end(__('Submit', true));?> </th>

		<th>	 
		<a href="#" class = "myButton" onclick="GraphImg()">Station Graph</a>
						  
		</th>

<script>
//Funcion para mostrar imagenes de graficos de estaciones en nueva ventana
//deben coincidir id de estacion con URL de las imagenes
function GraphImg() {
    <?php if ($stationid == 21){?>
	var myWindow = window.open("http://cro.ots.ac.cr/meteoro/images/palo_verde.png", "", "width=850, height=600");
	<?php } ?>

	 <?php if ($stationid == 22){?>
	var myWindow = window.open("http://cro.ots.ac.cr/meteoro/images/la_selva.png", "", "width=850, height=600");
	<?php } ?>
	
	 <?php if ($stationid == 23){?>
	var myWindow = window.open("http://cro.ots.ac.cr/meteoro/images/las_cruces.png", "", "width=850, height=600");
	<?php } ?>
	
	 <?php if ($stationid == 24){?>
	var myWindow = window.open("http://cro.ots.ac.cr/meteoro/images/cro.png", "", "width=850, height=600");
	<?php } ?>
	
	}
</script>
				
					
		
		</table>   
    
	<table id="manualdatalogs">
        <thead>
            <th><?php echo 'id_manualdatalogs';?></th>
            <th><?php echo 'recolection_date';?></th>
            <th><?php echo 'insertion-Date';?></th>
            <th><?php if(IsChecked('formDoor','A')) {echo 'temp';}  ?></th>
            <th><?php if(IsChecked('formDoor','B')) {echo 'mintemp';} ?></th>
            <th><?php if(IsChecked('formDoor','C')) {echo 'maxtemp';} ?></th>
            <th><?php if(IsChecked('formDoor','D')) {echo 'relative_humidity';} ?></th>
            <th><?php if(IsChecked('formDoor','E')) {echo 'barometric_pressure';} ?></th>
            <th><?php if(IsChecked('formDoor','F')) {echo 'rainfall';} ?></th>
            <th><?php echo 'recolector';?></th>
            <th><?php echo 'comments';?></th>
           <!-- <th class="actions"><?php// __('Actions');?></th>  -->
        </thead>
		
		<tbody> 
 
 
 
 
        <?php
        function IsChecked($chkname,$value)
        {
            if(!empty($_POST[$chkname]))
            {
                foreach($_POST[$chkname] as $chkval)
                {
                    if($chkval == $value)
                    {
                        return true;
                    }
                }
            }
            return false;
        }
        $aDoor = $_POST['formDoor'];
        if(empty($aDoor))
        {
            echo("You didn't select any Value to show.");
        }
        $i = 0;
        foreach ($manualdatalogs as $manualdatalog):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            if(($start_date==''          ||// este if es para mostrar todos los registros de manualdatalogs si hay fechas vacías o ceros
                $start_date=='0000-00-00'||
                  $end_date==''          ||
                  $end_date=='0000-00-00')&& $manualdatalog['Station']['id']==$stationid){
                $showingRecords+=1;//va aumentando en 1 la variable para luego despliegar en mesaje al final cuantos encontró
                ?>
                <tr<?php echo $class;?>>

                    <td><?php echo $manualdatalog['Manualdatalog']['id']; ?>&nbsp;</td>
                    <td><?php echo $manualdatalog['Manualdatalog']['recolection_date']; ?>&nbsp;</td>
                    <td><?php echo $manualdatalog['Manualdatalog']['insertion_date']; ?>&nbsp;</td>
                   
                    <td><?php if(IsChecked('formDoor','A')) {echo $manualdatalog['Manualdatalog']['temp'];} ?>&nbsp;</td>
                    <td><?php if(IsChecked('formDoor','B')) {echo $manualdatalog['Manualdatalog']['mintemp'];} ?>&nbsp;</td>
                    <td><?php if(IsChecked('formDoor','C')) {echo $manualdatalog['Manualdatalog']['maxtemp'];} ?>&nbsp;</td>
                    <td><?php if(IsChecked('formDoor','D')) {echo $manualdatalog['Manualdatalog']['relative_humidity'];} ?>&nbsp;</td>
                    <td><?php if(IsChecked('formDoor','E')) {echo $manualdatalog['Manualdatalog']['barometric_pressure'];} ?>&nbsp;</td>
                    <td><?php if(IsChecked('formDoor','F')) {echo $manualdatalog['Manualdatalog']['rainfall'];} ?>&nbsp;</td>
                    <td><?php echo $manualdatalog['Manualdatalog']['recolector']; ?>&nbsp;</td>
                    <td><?php echo $manualdatalog['Manualdatalog']['comments']; ?>&nbsp;</td>
					<!-- <td class="actions">
                        <?php //echo $this->Html->link(__('View', true), array('action' => 'view', $manualdatalog['Manualdatalog']['id'])); ?>
                        <?php //echo $this->Html->link(__('Edit', true), array('action' => 'edit', $manualdatalog['Manualdatalog']['id'])); ?>
                        <?php //echo $this->Html->link(__('Delete', true), array('action' => 'delete', $manualdatalog['Manualdatalog']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $manualdatalog['Manualdatalog']['id'])); ?>
                    </td> --> 
                </tr>
            <?php
            }else{
                // este if siguiente es para desplegar los manualdatalogs que estén entre las fechas seleccionadas
                if($manualdatalog['Manualdatalog']['recolection_date']>=$start_date  &&
                    $manualdatalog['Manualdatalog']['recolection_date']<=$end_date   &&
                    $manualdatalog['Station']['id']==$stationid){
                    $showingRecords+=1;//para mostrar en el mensaje de abajo de los datos manuales en el index
                    ?>
                    <tr<?php echo $class;?>>
                        <td><?php echo $manualdatalog['Manualdatalog']['id']; ?>&nbsp;</td>
                        <td><?php echo $manualdatalog['Manualdatalog']['recolection_date']; ?>&nbsp;</td>
                        <td><?php echo $manualdatalog['Manualdatalog']['insertion_date']; ?>&nbsp;</td>
                       
                        <td><?php if(IsChecked('formDoor','A')) {echo $manualdatalog['Manualdatalog']['temp'];} ?>&nbsp;</td>
                        <td><?php if(IsChecked('formDoor','B')) {echo $manualdatalog['Manualdatalog']['mintemp'];} ?>&nbsp;</td>
                        <td><?php if(IsChecked('formDoor','C')) {echo $manualdatalog['Manualdatalog']['maxtemp'];} ?>&nbsp;</td>
                        <td><?php if(IsChecked('formDoor','D')) {echo $manualdatalog['Manualdatalog']['relative_humidity'];} ?>&nbsp;</td>
                        <td><?php if(IsChecked('formDoor','E')) {echo $manualdatalog['Manualdatalog']['barometric_pressure'];} ?>&nbsp;</td>
                        <td><?php if(IsChecked('formDoor','F')) {echo $manualdatalog['Manualdatalog']['rainfall'];} ?>&nbsp;</td>
                        <td><?php echo $manualdatalog['Manualdatalog']['recolector']; ?>&nbsp;</td>
                        <td><?php echo $manualdatalog['Manualdatalog']['comments']; ?>&nbsp;</td>
                       	<!-- <td class="actions">
                        <?php //echo $this->Html->link(__('View', true), array('action' => 'view', $manualdatalog['Manualdatalog']['id'])); ?>
                        <?php //echo $this->Html->link(__('Edit', true), array('action' => 'edit', $manualdatalog['Manualdatalog']['id'])); ?>
                        <?php //echo $this->Html->link(__('Delete', true), array('action' => 'delete', $manualdatalog['Manualdatalog']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $manualdatalog['Manualdatalog']['id'])); ?>
                    </td> --> 
                    </tr>
					
            <?php } } endforeach; ?>
			</tbody>
			
    </table>
   
   

 <!--	Para que funcione paginator -->  
   
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>

<script>
$(document).ready(function(){
    $('#manualdatalogs').dataTable(
	{"bSort": false,
	
  'iDisplayLength': 25
}
	);
	
	
});
</script>





    </body>
</html>




<a href="#" class = "myButton" onClick="MyfunctionCsv()">Export To CSV</a>

        
        <script>
            function MyfunctionCsv() {
                var table = document.getElementById("manualdatalogs").innerHTML;
                var data = table.replace(/<thead>/g, '')
					.replace(/<tr role="row">/g,'')
					.replace(/<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 156px;">/g,'')
					.replace(/<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 137px;">/g,'')
					.replace(/<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 80px;">/g,'')
					.replace(/<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 42px;">/g,'')
					.replace(/<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 72px;">/g,'')
					.replace(/<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 77px;">/g,'')
					.replace(/<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 144px;">/g,'')
					.replace(/<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 171px;">/g,'')
					.replace(/<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 58px;">/g,'')
					.replace(/<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 82px;">/g,'')
					.replace(/<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 84px;">/g,'')
					.replace(/<th class="actions sorting_disabled" rowspan="1" colspan="1" style="width: 177px;">/g,'')
					.replace(/<tr role="row" class="even">/g,'')
					.replace(/<tr role="row" class="odd">/g,'')
					.replace(/<tr class="altrow even" role="row">/g,'')
					.replace(/;/g,'')
                    .replace(/&nbsp/g, '')
					.replace(/<\/thead>/g, '')
                    .replace(/<tbody>/g, '')
                    .replace(/<\/tbody>/g, '')
                    .replace(/<tr>/g, '')
                    .replace(/<\/tr>/g, '\r\n')
                    .replace(/<th>/g, '')
                    .replace(/<\/th>/g, ';')
                    .replace(/<td>/g, '')
                    .replace(/<\/td>/g, ';')
                    .replace(/\t/g, '')
                    .replace(/\n/g, '')
					.replace(/ <!-- <td class="actions">                                                                                            ; -->/g, '')
					
                var mylink = document.createElement('a');
                mylink.download = "csvname.csv";
                mylink.href = "data:application/csv," + escape(data);
                mylink.click();
            }
        </script>

  
   
   <p>
        <?php
            if($showingRecords==''){//si no se encontraron registros, variable igual a 0 para mostrar en el mensaje de abajo
                $showingRecords=0;
            }
            echo $this->Paginator->counter(array(
                'format' => __('Page %page% of %pages%, showing '.$showingRecords.'  records out of %count% total, starting on record %start%, ending on record '.$showingRecords, true)
            ));
        ?>
    </p>

    <div class="paging">
        <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
        | 	<?php echo $this->Paginator->numbers();?>
        |
        <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
    </div>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Manualdatalog', true), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Summary', true), array('action' => 'summary')); ?></li>
    </ul>
</div>
</body>