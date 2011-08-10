<?php
class UtilisateursController extends AppController {

	var $name = 'Utilisateurs';
	var $uses = array('Utilisateur','Employe','Departement');
	var $paginate = array(
	'Utilisateur' => array (
	'limit' => 10,
	'order' => array(
	'Utilisateur.username' => 'asc'		    
			    
	),
	'Employe' => array (
	'limit' => 10,
	'order' => array(
	'Employe.nom' => 'asc'
	
	))));
	
	function beforeFilter(){
		$this->Auth->authenticate = ClassRegistry::init('Utilisateur');
		//$this->Auth->autoRedirect = false;
		parent::beforeFilter();
		//$this->Auth->Allow("*");
	}
	
	function convertPasswords()
	{
		if(!empty( $this->data['Utilisateur']['passwd'] ) ){
			$this->data['Utilisateur']['password'] = $this->Auth->password($this->data['Utilisateur']['passwd'] );
		}
		if(!empty( $this->data['Utilisateur']['password_confirm'] ) ){
			$this->data['Utilisateur']['password_confirm'] = $this->Auth->password( $this->data['Utilisateur']['password_confirm'] );
		}
	}
		//Affiche la liste des employés pour la selection 
	function list_employe() {
		$departements=$this->Departement->find('list',
			array(
			  'fields'=>array('id','nom')
			)			       
		);
	$this->set(compact('departements'));
	// Nettoyage de la saisie
	App::import('Sanitize');
	 $Sanitizer =& new Sanitize();
	 $Sanitizer->clean(&$this->params['named']);
	 // Utilisons le deuxième argument de la méthode Paginate
	// pour fournir un tableau de conditions que nous construirons
	 // dans notre modèle à l’aide de la méthode createStatement
	 $employes = $this->Paginate('Employe', $this->Employe->createStatement($this->params['named']));
	
		$this->set(compact('employes'));
	}
			//Renvoi le formulaire d'upload après selection d'un employé
	function uploader($id = null) {
		if (!$id) {
			$this->Session->setFlash("Cet employé n'existe pas ", 'message_error');
			$this->redirect(array('action' => 'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}

		$this->set('employe', $this->Employe->read(null,$id));
	}
	
/* Vérifie si la connexion à reussit
* Mets à jour l'heure et la date de la dernière connexion
* Si l'utilisateur à cliqué sur le champ "se souvenir de moi"
* On enregistre le nom et le mot de passe dans un Cookie
**/
    function login(){
        
	if ($this->Auth->user()) {
		if (!empty($this->data['Utilisateur']['remember'])) {
			$cookie = array();
			$cookie['username'] = $this->data['Utilisateur']['username'];
			$cookie['password'] = $this->data['Utilisateur']['password'];
			$this->Cookie->write('Auth.Utilisateur', $cookie, true, '+2 weeks');
			unset($this->data['Utilisateur']['remember']);
		}
			$this->Utilisateur->create();
			if( !(empty($this->data)) ){
			$this->Utilisateur->id = $this->Auth->user('id');
			$this->Utilisateur->saveField('lastvisitDate', date('Y-m-d H:i:s') );
				}
			$this->redirect($this->Auth->redirect());
		}
		if (empty($this->data)) {
			$cookie = $this->Cookie->read('Auth.Utilisateur');
			if (!is_null($cookie)) {
				if ($this->Auth->login($cookie)) {
					//  Efface le message auth, seulement si nous l'utilisons
					$this->Session->delete('Message.auth');
					$this->redirect($this->Auth->redirect());
				}
			}
		}
        $this->set('title_for_layout', "Page d'authentification");
        $this->layout = "login";
    }

    /*
    * Logout
    * @param    -
    * @return	-
    **/
    function logout(){
        $this->Session->delete('acl_utilisateur');
	$this->redirect($this->Auth->logout());
    }
	

	function index() {
		$this->Utilisateur->recursive = 0;
		$this->set('utilisateurs', $this->paginate('Utilisateur'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash("Cet utilisateur n'existe pas", 'message_error');
			$this->redirect(array('action' => 'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		$employes = $this->Utilisateur->Employe->find('all',
			 array(
		 "fields"=>array("id","nom","prenom")
		 )
		);
		$this->set('utilisateur', $this->Utilisateur->read(null, $id));
		$this->set('employes', $employes);
	}

	function add($id=null) {
		if (!$id) {
			$this->Session->setFlash("Cet employé n'existe pas ", 'message_error');
			$this->redirect($this->referer());
			$this->cakeError('error404', array(array('url' => $this->action)));
		}

		$this->set('employe', $this->Employe->read(null,$id));
		if (!empty($this->data)) {
			$this->Utilisateur->create();
			if ($this->Utilisateur->save($this->data)) {
				$this->Session->setFlash("L'Utilisateur a été enregistré", 'message_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("L'Utilisateur n'a pas été enregistré. Essayez à nouveau.", 'message_error');
			}
		}
		$groupes = $this->Utilisateur->Groupe->find('list',
			array(
				"Recursive"=>-2,
				"fields"=>array("id","nom"),
		
			));
		$this->set('employe', $this->Employe->read(null,$id));
		$this->set(compact('groupes', 'employes'));
	
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash("Cet utilisateur n'existe pas", 'message_error');
			$this->redirect(array('action' => 'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		if (!empty($this->data)) {
			if ($this->Utilisateur->save($this->data)) {
				$this->Session->setFlash('Utilisateur enregistré', 'message_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("L'utilisateur n'a pas pu être enregistré. Certaines données sont erronées.", 'message_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Utilisateur->read(null, $id);
		}
		$groupes = $this->Utilisateur->Groupe->find('list',
			array(
				"Recursive"=>-2,
				"fields"=>array("id","nom"),
		
			));
		$employes = $this->Utilisateur->Employe->find('list',
			array(
				"Recursive"=>-2,
				"fields"=>array("id","nom"),
		
			));
		$this->set(compact('groupes', 'employes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Identifiant invalide', 'message_error');
			$this->redirect(array('action'=>'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		if ($this->Utilisateur->delete($id)) {
			$this->Session->setFlash('Utilisateur supprimé', 'message_ok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Utilisateur non supprimé', 'message_error');
		$this->redirect(array('action' => 'index'));
	}
}
