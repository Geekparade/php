<?php
echo '<h1>Completez ce code source pour que le script affiche :';
echo '<h3>$num1 est :</h3>';
echo '<ul>
		<li>inferieur a $num2</li>
		<li>superieur a $num2</li>
		<li>egal a $num2</li>
	</ul>';

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
if(!isset($num1) || !isset($num2)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost/formation/PHP/exercices/conditions/exercice1.php?num1=4&num2=3</strong>");
}

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


