<?php
/**
 * Se llama el archivo "general.class.php" para poder usar las funciones correspondientes a utilizar
 * @param $objeto es la nueva variable contenedora de la nueva seleccion 
 * @param $contenido obtiene el valor de la funcion verClientes()
 */
require_once("general.class.php");	
$objeto = new Seleccion;
$contenido=$objeto->verClientes();
?>
<head>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
</head>
<div class="container">
    <div class="page-header">
	      <h2>A continuación se muestran todas las circunstancias medicas registradas</h2>
    </div>
	<div class="body">	
	<div class="table-responsive">
		<div id="tablaTicket">
			<table class="table table-striped">
				<tr>
					<td>Id</td>
					<td>Pais Id</td>
					<td>Idioma Id</td>
					<td>Hotel Id</td>
					<td>Agencia Id</td>
					<td>Tratamiento Id</td>
					<td>Terapeuta Id</td>
					<td>Circunstancia Medica Id</td>
					<td>Fecha Alta</td>
					<td>Nombre</td>
					<td>Apellidos</td>
					<td>Edad</td>
					<td>Email</td>
					<td>Habitación</td>
					<td>Opinión</td>
				</tr>
			<?php
			/**
			 * @param la variable $res es la encargada de distribuir en la tabla correspondiente los valores que se obtengan en la variable $contenido, con la ayuda de la funcion propia de PHP "mysql_fetch_array"
			 */
				 while($res = mysql_fetch_array($contenido))
				 {
			?>
			<tr id="contenidoTabla">
				<td><?php echo $res['id'];?></td>
				<td><?php echo $res['pais_id'];?></td>
				<td><?php echo $res['idioma_id'];?></td>
				<td><?php echo $res['hotel_id'];?></td>
				<td><?php echo $res['agencia_id'];?></td>
				<td><?php echo $res['tratamiento_id'];?></td>
				<td><?php echo $res['terapeuta_id'];?></td>
				<td><?php echo $res['circustancias_medica_id'];?></td>
				<td><?php echo $res['fecha_alta'];?></td>
				<td><?php echo $res['nombre'];?></td>
				<td><?php echo $res['apellidos'];?></td>
				<td><?php echo $res['edad'];?></td>
				<td><?php echo $res['correo_electronico'];?></td>
				<td><?php echo $res['habitacion'];?></td>
				<td><?php echo $res['opinion'];?></td>
			</tr>
			<?php
				}
			?>
			</table>
			</div>	
		</div>
		<br>
		<div class="row">
		  <div class="col-md-6">
		  <form action="crearClientes.php" method="post">
		  	<button type="submit" class="btn btn-primary">Crear</button>
		  </form>
		  </div>
		  <form action="conexionEliminarCliente.php" method="post">
			  <div class="col-md-6">
			  	<input type="text" class="form-control"  placeholder="Seleccione el id" required name="id">
			  	<br>
			  	<button type="submit" class="btn btn-primary">Eliminar</button>
			  </div>
			</form>
		</div>
		<div class="form-group">
			<a href="superUsuario.php"><h2>Volver a la vista de las tablas</h2></a>
		</div>
	</div>