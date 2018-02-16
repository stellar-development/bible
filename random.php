<?php

if(isset($_GET["type"]) && in_array($_GET["type"], array("json", "plain", "xml"))) {
	switch($_GET["type"]) {
		case "json":
			header("Content-Type: text/json");
			die(file_get_contents("http://labs.bible.org/api/?passage=random&type=json"));
		case "xml":
			header("Content-Type: text/xml");
			die(file_get_contents("http://labs.bible.org/api/?passage=random&type=xml"));
		default:
			header("Content-Type: text/plain");
			die(file_get_contents("http://labs.bible.org/api/?passage=random"));
	}
} else {
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Bible | ExplosiveNight</title>
		</head>
		<body>
			<p><?php echo file_get_contents("http://labs.bible.org/api/?passage=random"); ?></p>
			<p><a href="random.php">New Random Verse</a>
			   <br>
			   <a href="random.php?type=plain">New Random Verse (Plain Text)</a>
			   <br>
			   <a href="random.php?type=json">New Random Verse (JSON)</a>
			   <br>
			   <a href="random.php?type=xml">New Random Verse (XML)</a></p>
		</body>
	</html>
	<?php
}
