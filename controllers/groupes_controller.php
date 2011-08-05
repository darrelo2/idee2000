<?php
class GroupesController extends AppController {

	var $name = 'Groupes';
	var $uses =array('Groupe','Employe');
	var $paginate = array(
	'Groupe'=>array(	
	'limit' => 1,
	'order' => array(
	'Groupe.nom' => 'asc'
	)));

	function index() {
		$this->Groupe->recursive = 0;
		$this->set('groupes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash("Ce groupe n'existe pas", 'message_error');
			$this->redirect(array('action' => 'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		$employes = $this->Employe->find('all',
			 array(
		 "fields"=>array("id","nom","prenom")
		 )
		);
		$this->set('groupe', $this->Groupe->read(null, $id));
		$this->set('employes', $employes);
	}

	function add() {
		if (!empty($this->data)) {
			$this->Groupe->create();
			if ($this->Groupe->save($this->data)) {
				$this->Session->setFlash('Le groupe a été enregistré', 'message_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("Le groupe n'a pas été enregistré. Essayez à nouveau.", 'message_error');
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash("Ce groupe n'existe pas", 'message_error');
			$this->redirect(array('action' => 'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		if (!empty($this->data)) {
			if ($this->Groupe->save($this->data)) {
				$this->Session->setFlash('Le groupe a été enregistré', 'message_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("Le groupe n'a pas été enregistré. Essayez à nouveau.", 'message_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Groupe->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Identifiant invalide', 'message_error');
			$this->redirect(array('action'=>'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		if ($this->Groupe->delete($id)) {
			$this->Session->setFlash('Groupe supprimé', 'message_ok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash("Groupe non supprimé car il y a encore des utilisateurs qui appartiennent à ce groupe ", 'message_error');
		$this->redirect(array('action' => 'index'));
	}
}
