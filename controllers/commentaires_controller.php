<?php
class CommentairesController extends AppController {

	var $name = 'Commentaires';

	function index() {
		$this->Commentaire->recursive = 0;
		$this->set('commentaires', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid commentaire', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('commentaire', $this->Commentaire->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Commentaire->create();
			if ($this->Commentaire->save($this->data)) {
				$this->Session->setFlash(__('The commentaire has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commentaire could not be saved. Please, try again.', true));
			}
		}
		$employes = $this->Commentaire->Employe->find('list');
		$departements = $this->Commentaire->Departement->find('list');
		$utilisateurs = $this->Commentaire->Utilisateur->find('list');
		$groupes = $this->Commentaire->Groupe->find('list');
		$this->set(compact('employes', 'departements', 'utilisateurs', 'groupes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid commentaire', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Commentaire->save($this->data)) {
				$this->Session->setFlash(__('The commentaire has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commentaire could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Commentaire->read(null, $id);
		}
		$employes = $this->Commentaire->Employe->find('list');
		$departements = $this->Commentaire->Departement->find('list');
		$utilisateurs = $this->Commentaire->Utilisateur->find('list');
		$groupes = $this->Commentaire->Groupe->find('list');
		$this->set(compact('employes', 'departements', 'utilisateurs', 'groupes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for commentaire', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Commentaire->delete($id)) {
			$this->Session->setFlash(__('Commentaire deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Commentaire was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
