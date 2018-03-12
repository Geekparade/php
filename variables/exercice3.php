<?php
/**
* Inserer le tableau $insert dans $number aprés le 3eme element
* puis afficher le resultat
* 
* Info : pour afficher un tableau utiliser la fonction var_dump()
* http://php.net/manual/fr/ref.array.php
*/



$number = [1,2,3,4];
$insert = ["A","B","C"]; 

array_splice($number, 2, 0, $insert);

var_dump($number);
?>