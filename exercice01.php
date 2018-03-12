<?php
	class Name
	{
		public $_firstName;
		public $_lastName;

		public function getName()
		{
			echo'<p>'.$this->_firstName.' '.$this->_lastName.'</p>';  
		}
		
		// public function __construct($new_firstName, $new_lastName)
		// {
		// 	$this->_firstName = $new_firstName;
		// 	$this->_lastName = $new_lastName;
		// }
	}

	$persoName = [];
	$persoName[] = new Name;
	$persoName[0]->_firstName = 'David';
	$persoName[0]->_lastName = 'Da Silva';



	foreach ($persoName as $actor)
	{
		$actor->getName();
	}
?>