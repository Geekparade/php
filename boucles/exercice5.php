<h1>Creer un script qui affiche les tables de multiplications des nombres de 1 a 5 .</h1>
<br/>
<h3>Les tables de multiplications :</h3>
<?php
	for ( $i = 1 ; $i <= 5 ; $i++)
	{
		echo '<p>Table de multiplication de ' . $i . ' :</p>';
		for ( $j = 0 ; $j <= 10 ; $j++ )
		{
			echo $i . ' X ' . $j . ' = ' . $i*$j . '<br />';
		};
	};

?>


