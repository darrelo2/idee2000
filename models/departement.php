<?php
class Departement extends AppModel {
	var $name = 'Departement';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Employe' => array(
			'className' => 'Employe',
			'foreignKey' => 'departement_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
