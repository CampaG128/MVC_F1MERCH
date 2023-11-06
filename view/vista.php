<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
	<h1>Tabla Envio</h1>
	<table border="1">
		<tr>
			<td><strong>id_envio</strong></td>
			<td><strong>id_producto</strong></td>
			<td><strong>direccion_envio</strong></td>
			<td><strong>pais_envio</strong></td>
			<td><strong>envio_coste</strong></td>
			<td><strong>total</strong></td>
			<td><strong>paqueteria</strong></td>
			<td><strong>nombre_cuenta</strong></td>
		</tr>
		<?php
			for($x=0;$x<count($env);$x++)
			{
				?>
					<tr>
						<td><?php echo $env[$x]["id_envio"]; ?></td>
						<td><?php echo $env[$x]["id_producto"]; ?></td>
						<td><?php echo $env[$x]["direccion_envio"]; ?></td>
						<td><?php echo $env[$x]["pais_envio"]; ?></td>
						<td><?php echo $env[$x]["envio_coste"]; ?></td>
						<td><?php echo $env[$x]["total"]; ?></td>
						<td><?php echo $env[$x]["paqueteria"]; ?></td>
						<td><?php echo $env[$x]["nombre_cuenta"]; ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>