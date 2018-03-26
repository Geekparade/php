<h1>Afficher les multiples de 5 de 0 a 100 sans faire de multiplication :</h1>
<ul> 
	<li>
		<h3>le faire avec for .</h3>
		<?php
		for ( $i = 0 ; $i <= 100 ; $i++ )
			{
				if ( $i%5 == 0 )
				{
					echo $i . ' ';
				};
			};
		?>
	</li>

	
	<li>
		<h3>le faire avec while .</h3>
		<?php
		$j = 0;
		while ( $j <= 100 ) 
		{
			if ( $j%5 == 0)
			{
				echo $j . ' ';
			}
			$j++;				
		}
		?>
	</li> 	
</ul> 
