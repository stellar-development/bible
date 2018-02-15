<?php
$book = $_POST['book'];
$verse = $_POST['verse'];
if(isset($book) && isset($verse)) {
$url = "http://labs.bible.org/api/?passage=$book%20$verse";
$book = ucwords($book);
$output = "<strong>$book</strong> " . file_get_contents($url);
echo $output;
} else {
	echo "Please enter a valid verse.";
}
?>
	<head>
		<title>Bible | ExplosiveNight</title>
	</head>
</br >
<a href="lookup.php">Lookup another verse</a>