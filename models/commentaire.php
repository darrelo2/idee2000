<?php
class Commentaire extends AppModel {
	var $name = 'Commentaire';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Employe' => array(
			'className' => 'Employe',
			'foreignKey' => 'employe_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Utilisateur' => array(
			'className' => 'Utilisateur',
			'foreignKey' => 'utilisateur_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
