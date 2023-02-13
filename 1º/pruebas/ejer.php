<!DOCTYPE html>
<html>
<head>
	<title>ejers primeras paginas</title>
</head>
<body>
<?php
print "<p>hola mundo</p>";
print "<h1>mi primer programa</h1>";
print "<p>hola mundo</p>";
print "<h1> mi segundo programa<h1>";
print "<p><a href=\"saludo.php\">ir al saludo</a></p>";
print "<p><span style=\"border: black 2px solid; padding: 10px; font-size: 300%\">"
     . rand(1, 6) . "</span></p>\n";
print "  <p>Color: rgb(" . rand(0, 255) . ", " . rand(0, 255) . ", " . rand(0, 255) . ")</p>\n";
print "  <p><span style=\"border: black 2px solid; padding: 10px; font-size: "
    . rand(200, 800) . "%\">¡Hola!</span></p>\n";
?>
</body>
</html>

