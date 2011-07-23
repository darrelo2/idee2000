<?php
class Utilisateur extends AppModel {
	var $name = 'Utilisateur';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Groupe' => array(
			'className' => 'Groupe',
			'foreignKey' => 'groupe_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Employe' => array(
			'className' => 'Employe',
			'foreignKey' => 'employe_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Departement' => array(
			'className' => 'Departement',
			'foreignKey' => 'departement_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Commentaire' => array(
			'className' => 'Commentaire',
			'foreignKey' => 'utilisateur_id',
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
