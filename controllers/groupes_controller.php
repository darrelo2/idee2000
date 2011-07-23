<?php
class GroupesController extends AppController {

	var $name = 'Groupes';

	function admin_index() {
		$this->Groupe->recursive = 0;
		$this->set('groupes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid groupe', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('groupe', $this->Groupe->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Groupe->create();
			if ($this->Groupe->save($this->data)) {
				$this->Session->setFlash(__('The groupe has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The groupe could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid groupe', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Groupe->save($this->data)) {
				$this->Session->setFlash(__('The groupe has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The groupe could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Groupe->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for groupe', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Groupe->delete($id)) {
			$this->Session->setFlash(__('Groupe deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Groupe was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
