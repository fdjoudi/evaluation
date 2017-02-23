<?php 

/**
* 
*/
class Matiere extends AppModel
{
	public $hasAndBelongsToMany = array('Student');
	public $hasMany = array('MatieresStudent');


	public $validate = array(
							   'intituler' => array(
												'rule' => 'notBlank',
												'message' => 'ce champ ne doit pas etre vide'
											),
							   );

}

?>