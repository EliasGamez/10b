<?php
    //require("../../conexion.php");
    $conexion=mysqli_connect('localhost','root','','cuestionarios');
?>

<!doctype html>
<html>
	<head>
		
		<script src="../Chart.js"></script>
	</head>
	<body>
		<div style="width: 50%">
			<canvas id="canvas" height="450" width="600"></canvas>
		</div>


	<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : [
			<?php
				$sql="SELECT * from ansiedad_";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)) { 
					?>
					'<?php echo $mostrar["Escala"] ?>',
					<?php
				}
			?>
		],
		datasets : [
			{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				data : 
				<?php  
					$sql="SELECT * from ansiedad";
					$result=mysqli_query($conexion,$sql);
				?>
				[<?php while($mostrar=mysqli_fetch_array($result)) {
					?>
					<?php echo $mostrar["Escala_estado"] ?>,
					<?php echo $mostrar["Escala_rasgo"] ?>,
				<?php } ?>]
			}
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	</script>
	</body>
</html>

