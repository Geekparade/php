<?php

/** Afficher le nombre de 1 à 10 avec :*/

/** for */
for ($i=1 ; $i <= 10 ; $i++ ){
    echo 'Boucle For : ' . $i . '<br />';
}
echo '<br/>';

/** do-while */
$i = 0;
do {
    echo 'Boucle Do-While : ' . $i . '<br />';
    $i++;
} while ($i <= 10);
echo '<br/>';

/** while */
$i = 1;
while ($i <= 10):
    echo 'Boucle While 1 : ' . $i . '<br />';
    $i++;
endwhile;
echo '<br/>';

/** while 2 */
$j = 1;
while ($j <= 10) {
    echo  'Boucle While 2 : ' . $j ++ . '<br />';
}
