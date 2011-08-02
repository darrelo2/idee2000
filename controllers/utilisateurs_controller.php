<?php
class UtilisateursController extends AppController {

	var $name = 'Utilisateurs';
	
	function beforeFilter(){
		$this->Auth->authenticate = ClassRegistry::init('Utilisateur');
		//$this->Auth->autoRedirect = false;
		parent::beforeFilter();
		$this->Auth->Allow("*");
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
		$this->set('utilisateurs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__("Cet utilisateur n'existe pas", true));
			$this->redirect(array('action' => 'index'));
		}
		$employes = $this->Utilisateur->Employe->find('all',
			 array(
		 "fields"=>array("id","nom","prenom")
		 )
		);
		$this->set('utilisateur', $this->Utilisateur->read(null, $id));
		$this->set('employes', $employes);
	}

	function add() {
		if (!empty($this->data)) {
			$this->Utilisateur->create();
			if ($this->Utilisateur->save($this->data)) {
				$this->Session->setFlash(__("L'Utilisateur a été enregistré", true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__("L'Utilisateur n'a pas été enregistré. Essayez à nouveau.", true));
			}
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

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__("Cet utilisateur n'existe pas", true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Utilisateur->save($this->data)) {
				$this->Session->setFlash(__('Utilisateur enregistré', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__("L'utilisateur n'a pas pu être enregistré. Certaines données sont erronées.", true));
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
			$this->Session->setFlash(__('Identifiant invalide', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Utilisateur->delete($id)) {
			$this->Session->setFlash(__('Utilisateur supprimé', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Utilisateur non supprimé', true));
		$this->redirect(array('action' => 'index'));
	}
}
