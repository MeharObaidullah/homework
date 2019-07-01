<?php
	
	function myFunc(){
		static $x = 0;
		echo $x;
		$x++;
		echo "<br>";
	}

	myFunc();
	myFunc();
	myFunc();
?>