<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
	<h1>Platillos disponibles</h1>
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
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
						<td><?php echo $pd[$i]["id_envio"]; ?></td>
						<td><?php echo $pd[$i]["id_producto"]; ?></td>
						<td><?php echo $pd[$i]["direccion_envio"]; ?></td>
						<td><?php echo $pd[$i]["pais_envio"]; ?></td>
						<td><?php echo $pd[$i]["envio_coste"]; ?></td>
						<td><?php echo $pd[$i]["total"]; ?></td>
						<td><?php echo $pd[$i]["paqueteria"]; ?></td>
						<td><?php echo $pd[$i]["nombre_cuenta"]; ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>