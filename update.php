<?php
	
	$value = $_REQUEST["value"];

	$my_file = 'status.txt';
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	fwrite($handle, $value);

?>