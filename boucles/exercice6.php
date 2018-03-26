<h1>Ecrire un script qui calcul la somme des entiers de 1 a 20 et afficher le resultat .</h1>
 <br/>
<h3>Calcul de la somme des entiers de 1 a 20 :</h3>
<?php
$total = 0 ;
	for ( $i = 1 ; $i <= 20 ; $i++ )
	{
		echo '<li>' . $total += $i . '</li><br/>' ;
	};
	echo '<br/>';
	echo 'La somme total est de ' . $total . '<br/>';
?>
