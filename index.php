<?php
	session_start();
	if(isset($_SESSION['mensaje'])){

		echo '<scrirpt>alert("'.$_SESSION['mensaje'].'"")</script>';
	}

  ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Gema SAS
	</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

</head>
<body>
	<div class="col-md-12">
		<div class="row">
			<div style="text-align: center;border: 2px solid black; border-radius: 5px;top: 200px;" class="form-group col-md-4 col-md-offset-4" >
				<form method="post" action="insertar.php" enctype="multipart/form-data" class="">
					<h1>Formulario de cargar de informacion</h1>
					<input style="text-align: right;"  name="documento" type="file" >
					<br>
					<input type="submit" value="Enviar Formulario">
					<br>
					<br>
				</form>

			</div>
		</div>
		
	</div>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
</body>
</html>