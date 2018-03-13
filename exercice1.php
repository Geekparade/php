<?php
/**	Methode de Animal : 
   		- Cry() // Affiche le nom du crie de l'animal
   		- Run() // Affiche la vitesse a laquelle l'animal court
   	Propriété de Animal :
    	- $speed
    	- $cryName
	Il faut passer les paramètres $speed et $cryName dans le constructeur .
*/
interface Animal
{
	function Cry($cryName);
	function Run($speed);
}

/** Methode de Pet :
   		- Sleep() // Affiche le temps d'une sieste d'un animal
 	Proprieté de Pet :
   		- SleepTime         
	Il faut passer les paramètres $sleepTime dans le constructeur .	
*/	
class Pet
{	
	function Sleep($sleepTime)
	{
		return '<p>Je dors ' . $sleepTime . '</p>';
	}
}

/** Créer des classes Dog et et Cat étendant Pet et implémentant l'interface Animal .
*/
class Dog extends Pet implements Animal 
{
	function __construct($sleepTime, $speed, $cryName)
	{
		$this->sleepTime = $sleepTime;
		$this->speed = $speed;
		$this->cryName = $cryName;
	}

	function Cry($cryName)
	{
		return '<p>Je suis un chien donc j\'' . $cryName . '.</p>';
	}

	function Run($speed)
	{
		return '<p>Je suis un chien et je cours à ' . $speed . '.</p>';

	}
}

class Cat extends Pet implements Animal
{
	function __construct($newSpeed, $newCryName, $newSleepTime)
	{
		$this->cryName = $newCryName;
		$this->speed = $newSpeed;
		$this->sleepTime = $newSleepTime;
	}

	function Cry($cryName)
	{
		return '<p>Je suis un chat donc je ' . $cryName . '.</p>';
	}

	function Run($speed)
	{
		return '<p>Je suis un chat et je cours à ' . $speed . '.</p>';
	}	
}

/**	Créer ensuite 3 chats et 2 chiens, les mettres dans un tableau
	Parcourir le tableau et afficher soit le crie, la vitesse ou son temps de sieste. */
$animals = [];
$animals[] = new Dog ('12h','19km/h','aboie');
$animals[] = new Dog('14h','21km/h','aboie');
$animals[] = new Dog('16h','25km/h','aboie');

$animals[] = new Cat('18km/h','miaule','18h');
$animals[] = new Cat('10km/h','miaule','22h');

echo '<h1>Animals List</h1>';
foreach ($animals as $animal) 
{
	echo $animal->Cry($animal->cryName);
	echo $animal->Run($animal->speed);
	echo $animal->Sleep($animal->sleepTime);
}
?>