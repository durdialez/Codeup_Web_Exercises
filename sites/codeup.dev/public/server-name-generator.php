<?php 

	$adjectives = [
		'Mean',
		'Old',
		'Stinky',
		'Tall',
		'Short',
		'Fat',
		'Quiet',
		'Fast',
		'Hyper',
		'Fresh'
	];

	$nouns = [
		'Dog',
	 	'Cat', 
		'Denver', 
	 	'Hammer',
	 	'Daniel',
	 	'Pretzel',
	 	'Taco',
	 	'Pizza',
	 	'Pool',
	 	'Zebra'
	 ];

	$randNoun = array_rand($nouns, 1);
	$randAdj = array_rand($adjectives, 1);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>

<style type="text/css">
	html {
		background-color: black;
	}
	h1 {
		text-align: center;
		font-family: cursive;
		color: white;
		font-size: 100px;
	}

	h1:hover {
		color: red;
	}
</style>
</head>
<body>
	<h1> <?= "{$adjectives[$randAdj]}{$nouns[$randNoun]}"; ?> </h1>
 
</body>
</html>