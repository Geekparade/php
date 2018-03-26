<?php
echo '<h1>Completez ce code source pour que le script affiche :</h1>';
echo '<ul>
		<li>
			$chaine comporte plus de 10 caractères,
  		</li>
  		OU 
  		<li>	
  			$chaine comporte moins de 10 caractères,
  		</li>
  		OU 
  		<li>
   			$chaine comporte exactement 10 caractères.
		</li>
	</ul>';

$chaine = $_GET['chaine'];

if(!isset($chaine)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost/php/conditions/exercice2.php?chaine=ceci est un test</strong>");
}
// Mon code
$lgt_chaine = strlen($chaine);
if ( $lgt_chaine > 10 )
{
	echo '\'' . $chaine . '\' est une chaine de plus de 10 caractères.';
}
else if ( $chaine < 10 )
{
	echo '\'' . $chaine . '\' est une chaine de moins de 10 caractères.';
}
else if ( $chaine == 10 )
{
	echo '\'' . $chaine . '\' est une chaine d\'exactement de 10 caractères.';
}

