<?php 

require_once('../conexion/conexion.php');
$year=$_GET['year'];
?>

<script type="text/javascript">
	$(function(){
        $('#barra').highcharts({
            chart: {
                type: 'column',
                margin:95,
                options3d:{
                    enabled:true,
                    alpha:10,
                    beta:25,
                    depth:70
                }
            },
            title: {
                text: 'REPORTES GRAFICOS DINAMICOS CON GRAFICOS DE BARRA'
            },
            subtitle:{
                text: 'rEPORTE DE VENTA POR EMPLEADO'
            },

            plotOptions:{
                column:{
                    depth:25
                }
            },
            xAxis:{
                categories:[
                <?php
                $sql=mysql_query("SELECT * FROM ventas where YEAR(fecha)='$year' group by empleado");
                while($res=mysql_fetch_array($sql)){			
                ?>
			    ['<?php echo $res['empleado']; ?>'],
        <?php } ?>
		]
        },
        yAxis:{
           title:{
                text: null
            }
        },
        series:[{
            name: 'Venta',
            data: [ <?php
            $sql=mysql_query("SELECT sum(venta) as venta FROM ventas where YEAR(fecha)='$year' group by empleado");
                while($res=mysql_fetch_array($sql)){	
                ?>			
			    [<?php echo $res['venta']; ?>],
        <?php  }  ?>		
            ]	
        }]
    });
});
</script>

<div id="barra" style="height: 400px;"></div>