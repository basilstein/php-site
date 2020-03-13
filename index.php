<html>
<head>
	<title>PHP Website</title>
</head>
<body>
	<?php 
	echo "<img src = 'image.jpg'><br>";
	$var=array(3,4,5);
	print_r($var);
	echo "<br>";
	var_dump($var);
	$city = $_POST['city'];
	echo "<br>";
	var_dump($city);
	?>
</body>
</html>
