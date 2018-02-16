<?php

if($_POST && !empty($_POST["verse"]) && !empty($_POST["book"])) {
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Bible | ExplosiveNight</title>
		</head>
		<body>
			<p><strong><?php echo htmlspecialchars(ucwords($_POST["book"])); ?></strong> <?php echo file_get_contents("http://labs.bible.org/api/?passage=".urlencode($_POST["book"])."%20".urlencode($_POST["verse"])); ?></p>
			<p><a href="search.php">Search Again</a></p>
		</body>
	</html>
	<?php
} else {
	header("Location: search.php"); 
	die("Redirecting...");
}