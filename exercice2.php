<?php
echo '<h1> Afficher le nombre pair de 1 à 20 avec : </h1>';
echo '<h2> \'For\' : </h2>';
for($i = 2 ; $i < 21 ; $i = $i+2){ 
    echo 'Boucle For : ' . $i . '<br />';    
}
echo '<br/>';
echo '<h2> \'Do-while\' : </h2>';
$i=2;
do{ 
	echo 'Boucle Do-While : ' . $i . '<br />';
	$i = $i+2;
} while ($i <= 21);
echo '<br/>';
echo '<h2> \'While\' : </h2>';
$j=2;
while ($j <= 21):
    echo 'Boucle While 1 : ' . $j . '<br />';
    $j = $j+2;
endwhile;
echo '<br/>';
echo '<h2> \'While 2\' : </h2>';
$k = 0;
while ($k <= 18) {
    echo  'Boucle While 2 : ' . $k = $k+2 . '<br />';
}
