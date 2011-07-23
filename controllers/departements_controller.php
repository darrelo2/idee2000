<?php
class DepartementsController extends AppController {

	var $name = 'Departements';

	function admin_index() {
		$this->Departement->recursive = 0;
		$this->set('departements', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid departement', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('departement', $this->Departement->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Departement->create();
			if ($this->Departement->save($this->data)) {
				$this->Session->setFlash(__('The departement has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The departement could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid departement', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Departement->save($this->data)) {
				$this->Session->setFlash(__('The departement has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The departement could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Departement->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for departement', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Departement->delete($id)) {
			$this->Session->setFlash(__('Departement deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Departement was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
