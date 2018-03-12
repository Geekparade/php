<?php
/**
 * @brief PHP POO exercice 2.
 * @author Hans Vanpee <hans@vanpee.fr>
 *
 * Objectif : encapsuler les détails d'implémentation dans une classe.
 *
 * Mots clés : visibilité, public, private, constructeur, destructeur.
 *
 */

/*
 * Exercice : modifiez la classe Actor et cachez les attributs firstName
 * et lastName, ajoutez un constructeur pour initialiser les objets de la
 * classe, améliorez la création du tableau actors.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * @brief Store actor details.
 */
class Actor
{
    private $firstName;
    private $lastName;

    /**
     * @brief output actor's full name in <p> tag.
     */
    public function fullName()
    {
       return $this->firstName.' '.$this->lastName.'<br />';
    }

    public function __construct($new_firstName, $new_lastName)
    {
        $this->firstName = $new_firstName;
        $this->lastName = $new_lastName;
    }
}

$actors = [];
$actors[] = new Actor ('Toto','Tata');
$actors[] = new Actor ('Jean Claude', 'Van Damme');
$actors[] = new Actor ('Sylvester', 'Stalone');
$actors[] = new Actor ('Arnold', 'Schwarzenegger');

echo "<h1>Actors List</h1>";

foreach ($actors as $actor) {
    echo $actor->fullName();
}

// vim: set expandtab:
// vim: set tabstop=4 shiftwidth=4 softtabstop=4:
?>

