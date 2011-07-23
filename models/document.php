<?php
class Document extends AppModel {
	var $name = 'Document';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
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
}
