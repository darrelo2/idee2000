<?php
class Utilisateur extends AppModel {
	var $name = 'Utilisateur';
	
	 function checkPasswords($data) {
        if ($this->data[$this->name]['password'] == $this->data[$this->name]['password_confirm']) {
            return true;
      }
      elseif ($this->data[$this->name]['password'] && !isset($this->data[$this->name]['password_confirm'])) {
        return true;
      }
        else {
            return false;
        }
    }
	  function identicalFieldValues( $field=array(), $compare_field=null )  
    { 
        foreach( $field as $key => $value ){ 
            $v1 = $value; 
            $v2 = $this->data[$this->name][ $compare_field ];                  
            if($v1 !== $v2) { 
                return FALSE; 
            } else { 
                continue; 
            } 
        } 
        return TRUE; 
    } 
	function checkUsername($data){
	 //$tab = $this->Utilisateur->find('list',array('fields'=>array('username')));
	 $fieldName = $this->data[$this->name]['username'];
	 $tab = $this->findAllByUsername($fieldName);
	  if(!empty($tab)){
		return false;
	  
	  }
	  else{
	  return true;
	  }
	 
	
	}

	var $validate = array(
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Il vous faut un pseudonyme de connexion',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'check' => array(
			'rule' => 'checkUsername',
			'message' => 'Ce pseudonyme est déjà utilisé.'
			),
		),
		'password_confirm' => array(
					'notempty' => array(
						'rule' => array('notempty'),
						'message' => 'Confirmé votre mot de passe est obligatoire',
		//'allowEmpty' => false,
		//'required' => false,
		//'last' => false, // Stop validation after this rule
		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		),
		'identicalFieldValues' => array(
	        'rule' => array('identicalFieldValues', 'passwd' ), 
	        'message' => 'Les mots de passe ne sont pas identiques.' 
		),
		),
		'passwd' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Un mot de passe est obligatoire',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minlength' => array(
				'rule' => array('minlength',7),
				'message' => 'Le mot de passe est trop court.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			/*'check' => array(
			'rule' => 'checkPasswords',
			'message' => 'Les mots de passe ne sont pas identiques.'
      )*/
	  'identicalFieldValues' => array( 
        'rule' => array('identicalFieldValues', 'password_confirm' ), 
        'message' => 'Les mots de passe ne sont pas identiques.' 
                ) 
		),
		'groupe_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'employe_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
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
	
	/*function setNewPassword() 
{ 
    $this->data['Utilisateur']['password'] = Security::hash($this->data['Utilisateur']['passwd'], 'md5', true);
    return TRUE; 
} 
function beforeSave(){ 
    if($this->setNewPassword()){
    return true;
}else{
	return false;
}	
} 

	function hashPasswords($data) {
    if (isset($this->data['Utilisateur']['password'])) {
        $this->data['Utilisateur']['password'] = Security::sethash($this->data['Utilisateur']['password'], '', TRUE);
        return $data;
    }
    return $data;
}*/
	
	function beforeSave() {

	//$this->data[$this->name]["password"]=Security::setHash($this->data[$this->name]["password"],'md5',true);
				
	if (isset($this->data[$this->name]['passwd']) && $this->data[$this->name]['passwd'] <> '')
    {
        $this->data[$this->name]['password'] = Security::hash($this->data[$this->name]['passwd'], '', true);
        unset($this->data[$this->name]['passwd']);
    }   

    if (isset($this->data[$this->name]['password_confirm']))
    {
        unset($this->data[$this->name]['password_confirm']);
    }   

    return true;			
		
	}
}
