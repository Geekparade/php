<?php
echo '<h1>Créer une fonction qui compte le nombre de caractere dans une chaine.</h1>
	<p>Ne pas utiliser la fonction strlen</p>';

function countString ($string)
{
	$count = 0;

	while($string[$count])
	{
		$count++;
	}
	return $count;
}

echo countString('TATITOTOTUTUTOFU');
