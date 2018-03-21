<?php
echo '<h1> Afficher le nombre de 1 à 10 avec : </h1>';
echo '<h2> \'For\' : </h2>';
for ($i=1 ; $i <= 10 ; $i++ ){
    echo 'Boucle For : ' . $i . '<br />';
}
echo '<br/>';
echo '<h2> \'Do-while\' : </h2>';
$i = 0;
do {
    echo 'Boucle Do-While : ' . $i . '<br />';
    $i++;
} while ($i <= 10);
echo '<br/>';
echo '<h2> \'While\' : </h2>';
$i = 1;
while ($i <= 10):
    echo 'Boucle While 1 : ' . $i . '<br />';
    $i++;
endwhile;
echo '<br/>';
echo '<h2> \'While 2\' : </h2>';
$j = 1;
while ($j <= 10) {
    echo  'Boucle While 2 : ' . $j ++ . '<br />';
}
