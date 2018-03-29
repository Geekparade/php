<?php
// Créer une fonction qui teste si une valeur existe dans un tableau
// Ne pas utiliser la fonction in_array

function inArray($array, $string)
{
	foreach ($array as $item ) 
	{
		if ($string == $item)
		{
			return true;
		}
	}
	return false;
}

