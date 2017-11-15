<?php
	
	$conexion = mysqli_connect("localhost","root","","prueba_daniel") or die ("Problemas en la conexion con la Base de Datos");

	$documento2 = $_FILES['documento'];


	$dir_subida = 'archivo/';
	$fichero_subido = $dir_subida . basename($_FILES['documento']['name']);


	if (move_uploaded_file($_FILES['documento']['tmp_name'], $fichero_subido)) {
    
   


		    $archivo = file($fichero_subido);
				foreach($archivo as $linea => $contenido) {
				$mail ="";
				$nombre="";
				$apellido="";
				$codigoIn="";


				  $array = explode(',', $contenido);
				  echo  count($array);
				  if(count($array)>4 || count($array)<4 || $mail!="" || $codigoIn!= ""){
				  	

				  		header("Location: index.php");
				  }else{
				  	$mail = (trim($array[0]) != null || trim($array[0]) != "" ? trim($array[0]):"");
				  	$nombre= (trim($array[1]) != null || trim($array[1]) != "" ? trim($array[1]):"");
				  	$apellido= (trim($array[2]) != null || trim($array[2]) != "" ? trim($array[2]):"");
				  	$codigoIn= (trim($array[3]) != null || trim($array[3]) != "" ? trim($array[3]):"");



				  	 $registro = mysqli_query($conexion,'insert into informacion (mail,nombre,apellido,codigo) values("'.$mail.'", "'.$nombre.'","'.$apellido.'",'.$codigoIn.')') or die ("Problemas en la sentencia Insert: ".mysqli_error($conexion));
				  }
				  


				 
				}	
				header("Location: tablas.php");



	} else {

    	$_SESSION['mensaje']== "Error al tratar de mover el archivo";
}



















?>