<?php
App::uses('AppController', 'Controller');
/**
 * Travellers Controller
 *
 * @property Traveller $Traveller
 * @property PaginatorComponent $Paginator
 */
class TravellersController extends AppController {

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
		$this->Traveller->recursive = 0;
		$this->set('travellers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Traveller->exists($id)) {
			throw new NotFoundException(__('Invalid traveller'));
		}
		$options = array('conditions' => array('Traveller.' . $this->Traveller->primaryKey => $id));
		$this->set('traveller', $this->Traveller->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Traveller->create();
			if ($this->Traveller->save($this->request->data)) {
				$this->Flash->success('The traveller has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The traveller could not be saved. Please, try again.');
			}
		}
		$designations = $this->Traveller->Designation->find('list');
		$this->set(compact('designations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Traveller->exists($id)) {
			throw new NotFoundException(__('Invalid traveller'));
		}
		if ($this->request->isPost() || $this->request->isPut()) {
			if ($this->Traveller->save($this->request->data)) {
				$this->Flash->success('The traveller has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The traveller could not be saved. Please, try again.');
			}
		} else {
			$options = array('conditions' => array('Traveller.' . $this->Traveller->primaryKey => $id));
			$this->request->data = $this->Traveller->find('first', $options);
		}
		$designations = $this->Traveller->Designation->find('list');
		$this->set(compact('designations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Traveller->exists($id)) {
			throw new NotFoundException(__('Invalid traveller'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Traveller->delete($id)) {
			$this->Flash->success('The traveller has been deleted.');
		} else {
			$this->Flash->error('The traveller could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
