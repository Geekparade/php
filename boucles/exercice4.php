<?php
echo '<h1> Créer un script qui compte le nombre de voyelle
 dans la variable $sentence </h1>' ;

echo '<h3>$sentence = "La formation simplon c\'est genial, on va devenir des pros !"</h3>' ;

echo '<p> Indice on peut parcourir une chaine avec :</p>
	<li>	
		for
	</li>
	<li>
		strlen()
	</li>
	<li>	
		in_array()
	</li>' ;

$sentence = "La formation simplon c'est genial, on va devenir des pros" ;
$voyelle = ['a','e','i','o','u','y'] ;
$nb_voyelle = 0 ;
for ( $i = 0 ; $i < strlen($sentence) ; $i++) 
{
	if (in_array($sentence[$i], $voyelle)) 
	{
		$nb_voyelle++;
	}
};
echo '<h2>Il y a '. $nb_voyelle . ' voyelles dans la phrase : \' ' . $sentence . ' \' .</h2>';
