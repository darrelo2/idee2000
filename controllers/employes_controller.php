<?php
class EmployesController extends AppController {

	var $name = 'Employes';

	function index() {
		$this->Employe->recursive = 0;
		$this->set('employes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid employe', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('employe', $this->Employe->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Employe->create();
			if ($this->Employe->save($this->data)) {
				$this->Session->setFlash(__('The employe has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employe could not be saved. Please, try again.', true));
			}
		}
		$departements = $this->Employe->Departement->find('list');
		$this->set(compact('departements'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid employe', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Employe->save($this->data)) {
				$this->Session->setFlash(__('The employe has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employe could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Employe->read(null, $id);
		}
		$departements = $this->Employe->Departement->find('list');
		$this->set(compact('departements'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for employe', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Employe->delete($id)) {
			$this->Session->setFlash(__('Employe deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Employe was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
