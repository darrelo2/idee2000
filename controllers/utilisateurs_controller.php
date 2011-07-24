<?php
class UtilisateursController extends AppController {

	var $name = 'Utilisateurs';
	
	function beforeFilter(){
		parent::beforeFilter();
	}
    /*
    * Login
    * @param    -
    * @return	-
    **/
    function login(){
        // Vérifie que le compte est activé (basé sur l'userscope)
        if($this->action == 'login' && !empty($this->data['Utilisateur']['pseudo'])){
            $conditions = array('pseudo' => $this->data['Utilisateur']['pseudo'], 'actif <>' => 1);
            if($this->Utilisateur->find('count', array('conditions' => $conditions))){
                $this->Session->setFlash(__('Votre compte n\'a pas été activé',true), 'default', array(), 'auth');
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
			$this->Session->setFlash(__('Invalid utilisateur', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('utilisateur', $this->Utilisateur->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Utilisateur->create();
			if ($this->Utilisateur->save($this->data)) {
				$this->Session->setFlash(__('The utilisateur has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The utilisateur could not be saved. Please, try again.', true));
			}
		}
		$groupes = $this->Utilisateur->Groupe->find('list');
		$employes = $this->Utilisateur->Employe->find('list');
		$departements = $this->Utilisateur->Departement->find('list');
		$this->set(compact('groupes', 'employes', 'departements'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid utilisateur', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Utilisateur->save($this->data)) {
				$this->Session->setFlash(__('The utilisateur has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The utilisateur could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Utilisateur->read(null, $id);
		}
		$groupes = $this->Utilisateur->Groupe->find('list');
		$employes = $this->Utilisateur->Employe->find('list');
		$departements = $this->Utilisateur->Departement->find('list');
		$this->set(compact('groupes', 'employes', 'departements'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for utilisateur', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Utilisateur->delete($id)) {
			$this->Session->setFlash(__('Utilisateur deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Utilisateur was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
