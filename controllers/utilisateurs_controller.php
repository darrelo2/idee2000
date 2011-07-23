<?php
class UtilisateursController extends AppController {

	var $name = 'Utilisateurs';

	function admin_index() {
		$this->Utilisateur->recursive = 0;
		$this->set('utilisateurs', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid utilisateur', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('utilisateur', $this->Utilisateur->read(null, $id));
	}

	function admin_add() {
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

	function admin_edit($id = null) {
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

	function admin_delete($id = null) {
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
