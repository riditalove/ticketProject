<?php
App::uses('AppController', 'Controller');
/**
 * Sections Controller
 *
 * @property Section $Section
 * @property PaginatorComponent $Paginator
 */
class SectionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Section->recursive = 0;
		$this->set('sections', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Section->exists($id)) {
			throw new NotFoundException(__('Invalid section'));
		}
		$options = array('conditions' => array('Section.' . $this->Section->primaryKey => $id));
		$this->set('section', $this->Section->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Section->create();
			if ($this->Section->save($this->request->data)) {
				$this->Flash->success('The section has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The section could not be saved. Please, try again.');
			}
		}
		$departments = $this->Section->Department->find('list');
		$this->set(compact('departments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Section->exists($id)) {
			throw new NotFoundException(__('Invalid section'));
		}
		if ($this->request->isPost() || $this->request->isPut()) {
			if ($this->Section->save($this->request->data)) {
				$this->Flash->success('The section has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The section could not be saved. Please, try again.');
			}
		} else {
			$options = array('conditions' => array('Section.' . $this->Section->primaryKey => $id));
			$this->request->data = $this->Section->find('first', $options);
		}
		$departments = $this->Section->Department->find('list');
		$this->set(compact('departments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Section->exists($id)) {
			throw new NotFoundException(__('Invalid section'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Section->delete($id)) {
			$this->Flash->success('The section has been deleted.');
		} else {
			$this->Flash->error('The section could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
