<?php
echo '<h1>Complétez ce code source pour que le script affiche :';
echo '<h3>$num1 est :</h3>';
echo '<ul>
		<li>inférieur a $num2</li>
		<li>ou supérieur a $num2</li>
		<li>ou égal a $num2</li>
	</ul>';

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
if(!isset($num1) || !isset($num2)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost/php/conditions/exercice1.php?num1=4&num2=3</strong>");
}
// Mon Code
if ( $num1 < $num2 )
{
	echo $num1 . ' est inférieur à ' . $num2;
} 
else if ( $num1 > $num2 )
{
	echo $num1 . ' est supérieur à ' . $num2;
}
else
{
	echo $num1 . ' est égale à ' . $num2;
}


