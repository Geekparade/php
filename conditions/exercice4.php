<?php
echo '<h1>Completez ce code source pour que le script affiche \'$numX est le plus grand des trois nombres\'.</h1>';

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

if(!isset($num1) || !isset($num2) || !isset($num3)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost/php/conditions/exercice4.php?num1=4&num2=3&num3=12</strong>");
}
// Mon code
echo max($num1, $num2, $num3) . ' est le nombre le plus grand.';