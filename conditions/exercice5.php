<?php
echo '<h1>Completez ce code source pour que le script affiche :</h1>
	<ul>
 		<li>
 			$num est pair
		</li> 			 
		OU 
		<li>
			$num est impair.
		</li>	
	</ul>
<p>Vous n\'avez pas le droit d\'utiliser la fonction if, il faut utiliser la fonction switch.</p>
<p>Rappel: l\'opérateur permettant de connaitre le reste d\'une division est %.</p>';

$num = $_GET['num'];
if(!isset($num)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost/formation/PHP/exercices/conditions/exercice5.php?num=4</strong>");
}
// Mon code
// if(is_int($num) && $num > 0){	
	switch (is_int($num%2) && $num%2 && $num > 0 ){
		case 0:
			echo $num . ' est un nombre pair .';
			break;
		case 1:
			echo $num . ' est un nombre impair .';
			break;	
	}
// }else{
// 	echo $num . ' n\'est pas un nombre entier .';	
// }
// 	