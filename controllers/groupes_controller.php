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
			$this->Session->setFlash(__("Ce groupe n'existe pas", true));
			$this->redirect(array('action' => 'index'));
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
				$this->Session->setFlash(__('Le groupe a été enregistré', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__("Le groupe n'a pas été enregistré. Essayez à nouveau.", true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__("Ce groupe n'existe pas", true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Groupe->save($this->data)) {
				$this->Session->setFlash(__('Le groupe a été enregistré', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__("Le groupe n'a pas été enregistré. Essayez à nouveau.", true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Groupe->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Identifiant invalide', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Groupe->delete($id)) {
			$this->Session->setFlash(__('Groupe supprimé', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__("Groupe non supprimé car il y a encore des utilisateurs qui appartiennent à ce groupe ", true));
		$this->redirect(array('action' => 'index'));
	}
}
