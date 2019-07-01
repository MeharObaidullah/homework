<?php

	$x = 10; //Global Scope

	function myFunc(){
		global $x;

		echo "<p>Variable x inside function is: $x </p>";
	}

	myFunc();
	
	echo "<p>Variable x outside function is: $x </p>";

 ?>