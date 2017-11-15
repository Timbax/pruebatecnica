<?php

include('consultar.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
		
	<div class="container">
		<br>
		<a class="btn btn-primary" href="index.php">Volver</a>
		<br>
		<br>
	
		<div class="row" style="border: 2px solid black; border-radius: 5px; ">
				<div class="col-md-12 ">
					<div class=" col-md-4 col-md-offset-4">
						<?php 
						echo $newtable; 
						?>
					</div>
				</div>
				<div class="col-md-12 ">
					<div class="col-md-4 col-md-offset-4">
						<?php 
						echo $newtable2; 
						?>
					</div>
				</div>
				<div class="col-md-12 ">
					<div class="col-md-4 col-md-offset-3">
						<?php 
						echo $newtable3; 
						?>
					</div>
				</div>
			</div>
		</div>
		
		
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>