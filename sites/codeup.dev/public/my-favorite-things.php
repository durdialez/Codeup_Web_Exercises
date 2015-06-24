<?php 

$favThings = 
[
'Bike riding',
'Fishing at the coast',
'Tubing the river',
'Being with family and friends',
'Dancing like its 1999'
];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Favorite Things</title>
</head>
<body>
	<table>
		<tbody>
			
				<?php foreach ($favThings as $thing): ?>
						<tr>
							<td>
								<?= "My favorite things to do include, $thing"; ?>
							</td>
						</tr> 
				<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>