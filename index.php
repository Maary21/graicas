<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>REPORTES GRAFICOS</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="Highcharts-4.1.5/js/highcharts.js"></script>
        <script src="Highcharts-4.1.5/js/highcharts-3d.js"></script>
        <script src="Highcharts-4.1.5/js/modules/exporting.js"></script>
        <style type="text/css">
        	body{
        		margin: 0;
        		padding: 0;
        		overflow-x: hidden;
        	}
        </style>
        <script type="text/javascript">
        	$(document).ready(function(){
        		horizontal(2018);
        	});

        	
        	function barra(year){
        		$('#barra').load('load/barra.php?year='+year);
        	}
        </script>
		</head>
		<body>
			<h1 align="center">REPORTES GRAFICOS DINAMICOS UTILIZANDO HIGHCHARTS, PHP Y JAVASCRIPT</h1>
			
<br>
<div class="row" style="justify-content: center;align-items: center;">
  <div class="col-7">
       <div id="barra" style="height: 400px"></div>
  </div>

  <!-- Force next columns to break to new line at md breakpoint and up  NUEVA MODIFICACION-->
  <div class="w-100 d-none d-md-block"></div>

  <div class="col-7">  <select class="form-control" onchange="barra(this.value);">
            <?php
            for($i=2018;$i<2021;$i++){
            if($i==2018){
            echo "<option value=".$i." selected>".$i."</option>";
            }else{
            echo "<option value=".$i.">".$i."</option>";
            }
            }
            ?>
        </select></div>

</div>
		</body>
		</html>