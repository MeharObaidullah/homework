<?php

	$x = "14";
	$y = "7";

	function myFunc(){
		$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
	}

	myFunc();
	echo $y;
?>