<!DOCTYPE html>
<html>
<head>
	<title>pregunta3</title>
</head>
<body>
	<table border="1PX">
		
		<thead>
			<tr>
				<td>ci</td>
				<td>nombre</td>
				<td>fecha</td>
				<td>residencia</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($usuarios as $user) { 
					echo "<tr>";
					echo "<td>".$user['ci']."</td>";
					echo "<td>".$user['nombre_completo']."</td>";
					echo "<td>".$user['fecha_naci']."</td>";
					echo "<td>".$user['residencia']."</td>";
					echo "</tr>";
				}
			 ?>
		</tbody>
		

		<thead>
			<tr>
				<td>ci</td>
				<td>materia</td>
				<td>nota</td>
				
			</tr>
		</thead>
			<tbody>
				 	<?php 
				foreach($notas as $nota) { 
					echo "<tr>";
					echo "<td>".$nota['ci']."</td>";
					echo "<td>".$nota['materia']."</td>";
					echo "<td>".$nota['nota']."</td>";
					echo "</tr>";
				}
			 ?>

			</tbody>
				<thead>
			<tr>
				<td>CHUQUISACA</td>
				<td>LA PAZ</td>
				<td>COCHABAMBA</td>
				<td>ORURO</td>
				<td>POTOSI</td>
				<td>TARIJA</td>
				<td>SANTA CRUZ</td>
				<td>BENI</td>
				<td>PANDO</td>
				
				
			</tr>
		</thead>
			<tbody>
				 <?php 
				
					echo "<tr>";
					echo "<td>".$aproCH."</td>";
					echo "<td>".$aproLP."</td>";
					echo "<td>".$aproCB."</td>";
					echo "<td>".$aproOR."</td>";
					echo "<td>".$aproPT."</td>";
					echo "<td>".$aproTJ."</td>";
					echo "<td>".$aproSC."</td>";
					echo "<td>".$aproBE."</td>";
					echo "<td>".$aproPD."</td>";
					echo "</tr>";
				?>

			</tbody>
		
	</table>
</body>
</html>