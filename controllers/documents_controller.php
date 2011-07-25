<?php
class DocumentsController extends AppController {

	var $name = 'Documents';

	function index() {
		$this->Document->recursive = 0;
		$this->set('documents', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid document', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('document', $this->Document->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Document->create();
			if ($this->Document->save($this->data)) {
				$this->Session->setFlash(__('The document has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.', true));
			}
		}
		$employes = $this->Document->Employe->find('list');
		$this->set(compact('employes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid document', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Document->save($this->data)) {
				$this->Session->setFlash(__('The document has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Document->read(null, $id);
		}
		$employes = $this->Document->Employe->find('list');
		$this->set(compact('employes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for document', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Document->delete($id)) {
			$this->Session->setFlash(__('Document deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Document was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
