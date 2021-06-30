<?php 

require_once('../conexion/conexion.php');
$year=$_GET['year'];
?>

<script type="text/javascript">
	$(function(){
 $('#horizontal').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Grafica Horizontal'
        },
        subtitle: {
            text: 'Suscribete a mi canal'
        },
        xAxis: {
            categories: [
<?php
$sql=mysql_query("SELECT * FROM ventas where YEAR(fecha)='$year' group by empleado");
while($res=mysql_fetch_array($sql)){			
?>
			
			['<?php echo $res['empleado']; ?>'],
			
<?php
}
?>
			
			],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Pesos',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ''
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Venta',
            data: [
			<?php
$sql=mysql_query("SELECT sum(venta) as venta FROM ventas where YEAR(fecha)='$year' group by empleado");
while($res=mysql_fetch_array($sql)){			
?>			
			[<?php echo $res['venta']; ?>],
		
<?php
}
?>		
            ]	
        }]
    });
});
</script>

<div id="horizontal" style="height: 400px;"></div>