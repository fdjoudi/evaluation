	<?php

/**
* 
*/
class Student extends AppModel
{

	public $hasAndBelongsToMany = array('Matiere');
	public $hasMany = array('MatieresStudent');


	public $validate = array(
							   'nom' => array(
												'rule' => 'notBlank',
												'message' => 'ce champ ne doit pas etre vide'
											),
							
							   'prenom' => array(
						  							'rule' => 'notBlank',
													'message' => 'ce champ ne doit pas etre vide'
												),
							    
							   'date_naissance' => array(
						  							'rule' => 'notBlank',
													'message' => 'ce champ ne doit pas etre vide'
												)

							);
}

?>