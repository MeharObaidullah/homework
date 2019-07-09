<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daily Menu</title>
	<style type="text/css">
		body{
			display: flex;
			width: auto;
			height: 100vh;
			align-items: center;
			justify-content: center;
			text-align: center;
			font-size: 20px;
			background: black;
			color: #fff;
			font-family: sans-serif;
			line-height: 30px;
		}
	</style>
</head>
<body>
	<?php

	$drinks = array('Salted Lassi' , 'Coke' , 'Sprite' , 'Sweetened Lassi', 'Milkshake' );
	shuffle($drinks);

	$desserts = array('Ice Cream', 'Ghur Wale Chawal', 'Halwa');
	shuffle($desserts);

	$d = date("l");
	// echo $d;


	if ($d == "Monday") {

		echo "$d Menu";
		echo "<br>";
		echo "<br>";
		echo "Dish :- Steamed Chicken";
		echo "<br>";
		echo "Drink :- $drinks[0]";
		echo "<br>";
		echo "Dessert :- $desserts[0]";

	} elseif ($d == "Tuesday") {

		echo "$d Menu";
		echo "<br>";
		echo "<br>";
		echo "Dish :- Dal Chana";
		echo "<br>";
		echo "Drink :- $drinks[0]";
		echo "<br>";
		echo "Dessert :- $desserts[0]";

	} elseif ($d == "Wednesday") {

		echo "$d Menu";
		echo "<br>";
		echo "<br>";
		echo "Dish :- Chicken Karahi";
		echo "<br>";
		echo "Drink :- $drinks[0]";
		echo "<br>";
		echo "Dessert :- $desserts[0]";
		
	} elseif ($d == "Thursday") {

		echo "$d Menu";
		echo "<br>";
		echo "<br>";
		echo "Dish :- Alo Ghobi";
		echo "<br>";
		echo "Drink :- $drinks[0]";
		echo "<br>";
		echo "Dessert :- $desserts[0]";
		
	} elseif ($d == "Friday") {

		echo "$d Menu";
		echo "<br>";
		echo "<br>";
		echo "Dish :- Channe Chawal";
		echo "<br>";
		echo "Drink :- $drinks[0]";
		echo "<br>";
		echo "Dessert :- $desserts[0]";
		
	} elseif ($d == "Saturday") {

		echo "$d Menu";
		echo "<br>";
		echo "<br>";
		echo "Dish :- Shimla Mirch (Chicken)";
		echo "<br>";
		echo "Drink :- $drinks[0]";
		echo "<br>";
		echo "Dessert :- $desserts[0]";
		
	} elseif ($d == "Sunday") {

		echo "$d Menu";
		echo "<br>";
		echo "<br>";
		echo "Dish :- Chicken Biryani";
		echo "<br>";
		echo "Drink :- $drinks[0]";
		echo "<br>";
		echo "Dessert :- $desserts[0]";
		
	} else {

		echo "Wrong Input";

	}

?>	
</body>
</html>

