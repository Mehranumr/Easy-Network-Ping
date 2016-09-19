<?php
include "includes/functions.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PHP Ping Request</title>
	<meta name="description" content="How to ping ip address with php">
	<meta name="author" content="Mehran">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/script.js"></script>
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
	<?php
	$hosts = array("www.google.com", "www.msn.c3om", "www.yahoo.com");
	$arrlength = count($hosts);
	echo "<center><h2>Ping Test</h2>";
	for($x = 0; $x < $arrlength; $x++) {
		echo $hosts[$x]." : ";
		echo ping_request($hosts[$x]);
		echo "<br>";
	}
	echo "</center>";
	?>
</body>
</html>
