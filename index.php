<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>The Attendant | </title>
		<link rel="stylesheet" type="text/css" href="css/global.css">
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="js/global.js"></script>
	</head>

	<body>
	    <div class="status">
	    	<?php
	    		$my_file = 'status.txt';
				$handle = fopen($my_file, 'r');
				$value = fread($handle,filesize($my_file));
				echo $value;
	    	?>
	    	<img class="occupied" src="img/occupied-1.png">
	    	<img class="occupied" src="img/occupied-1.png">
	    	<img class="open" src="img/open-1.png">
	    	<img class="open" src="img/open-2.png">
	    </div>
		<div class="footer">
			<img src="img/the-attendant.png">
		</div>
	</body>
</html>


