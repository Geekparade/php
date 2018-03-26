<?php
echo '<h1> Completez ce code source pour que le script affiche si un nombre est pair ou impair :</h1>';
echo '<ul>
		<li>	   
			$nombre est pair
		</li>	
		OU 
		<li>	  
			$nombre  est impair
		</li>	
	</ul>';
echo '<p>AIDE : l\'opérateur modulo "%" permet de connaitre le reste d\'une division </p>';

$nombre = $_GET['nombre'];
if(is_null($nombre)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost/php/conditions/exercice3.php?nombre=4</strong>");
}
// Mon code
if ( $nombre % 2 )
{
	echo $nombre . ' est un nombre impair.';
}
else
{
	echo $nombre . ' est un nombre pair.';
}

