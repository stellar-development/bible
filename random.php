<?php
$htmlbody = '<html>
	<head>
		<title>Bible | ExplosiveNight</title>
	</head>
	<body>
		</br >
		</br >
		<a href="random.php">Get another verse?</a>
		</br >
		<a href="random.php?type=plain">View plain text?</a>
		</br >
		<a href="random.php?type=json">View JSON Output?</a>
		</br >
		<a href="random.php?type=xml">View XML Output?</a>
		
	</body>
</html>';
if($_GET['type'] === 'json') {
header('Content-Type: text/json');
$url = "http://labs.bible.org/api/?passage=random&type=json";
$verse = file_get_contents($url);
echo $verse;
}elseif($_GET['type'] === 'plain') {
	$url = "http://labs.bible.org/api/?passage=random";
$verse = file_get_contents($url);
echo $verse;
}elseif($_GET['type'] === 'xml') {
header('Content-Type: text/xml');
$url = "http://labs.bible.org/api/?passage=random&type=xml";
$verse = file_get_contents($url);
echo $verse;
}else{
$url = "http://labs.bible.org/api/?passage=random";
$verse = file_get_contents($url);
echo $verse;
echo $htmlbody;
}
?>
