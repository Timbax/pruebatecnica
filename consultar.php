<?php

		$conexion = mysqli_connect("localhost","root","","prueba_daniel") or die ("Problemas en la conexion con la Base de Datos");

		$registro = mysqli_query($conexion,'select * from informacion') or die ("Problemas en la sentencia Select: ".mysqli_error($conexion));

		$newtable='<table class="table table-bordered" ><tr>
						<td>Email</td>
						<td>Nombre</td>
						<td>Apellido</td>
					</tr>';

		$newtable2 ='<table class="table table-bordered "><tr>
			<td>Email</td>
			<td>Nombre</td>
			<td>Apellido</td>
		</tr>';

		$newtable3 ='<table class="table table-bordered col-md-4 col-md-offset-4" ><tr>
			<td>Email</td>
			<td>Nombre</td>
			<td>Apellido</td>
		</tr>';
		
		
		while($reg = mysqli_fetch_array($registro)){

			if($reg['codigo'] == 1){
				$newtable.="
				<tr>
					<td>".$reg['mail']."</td>
					<td>".$reg['nombre']."</td>
					<td>".$reg['apellido']."</td>
					<td>".$reg['codigo']."</td>
				</tr>";
			}else if($reg['codigo'] == 2){
				$newtable2.="
				<tr>
					<td>".$reg['mail']."</td>
					<td>".$reg['nombre']."</td>
					<td>".$reg['apellido']."</td>
					<td>".$reg['codigo']."</td>
				</tr>";
			}else if($reg['codigo'] == 3){
				$newtable3.="
				<tr>
					<td>".$reg['mail']."</td>
					<td>".$reg['nombre']."</td>
					<td>".$reg['apellido']."</td>
					<td>".$reg['codigo']."</td>
				</tr>";
			}
			

			
			
			
		}

		$newtable.="</table>";
		$newtable2.="</table>";
		$newtable3.="</table>";
		

?>