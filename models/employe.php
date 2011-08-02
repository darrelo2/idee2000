<?php
class Employe extends AppModel {
	var $name = 'Employe';
	var $validate = array(
		'matricule' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Champ obligatoire',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nom' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Champ obligatoire',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'prenom' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'champ obligation',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'genre' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Champ obligatoire',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'date_embauche' => array(
			'date' => array(
				'rule' => array('date','ymd'),
				'message' => 'Entrez une date valide au format J-M-A',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'date_naissance' => array(
			'date' => array(
				'rule' => array('date','ymd'),
				'message' => 'Entrez une date valide au format J-M-A',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'numero_assurance' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nbre_enfant' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Un nombre est attendu',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => "Votre email n'est pas au bon format",
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'departement_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Veillez indiquer le departement',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	var $actsAs = array(
	  'MeioUpload' => array(
	    'photo' => array(
	      'dir' => 'img/employes/photo',
	      'create_directory' => true,
	      'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
	      'allowed_ext' => array('.jpg', '.jpeg', '.png'),
	      'thumbsizes' => array(
	        'normal' => array('width'=>300, 'height'=>300),
	),
	      'default' => 'default.jpg',
	)
	)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
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
			'foreignKey' => 'employe_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'employe_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Utilisateur' => array(
			'className' => 'Utilisateur',
			'foreignKey' => 'employe_id',
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
