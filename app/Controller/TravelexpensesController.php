<?php
App::uses('AppController', 'Controller');
/**
 * Travelexpenses Controller
 *
 * @property Travelexpense $Travelexpense
 * @property PaginatorComponent $Paginator
 */
class TravelexpensesController extends AppController {

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
		$this->Travelexpense->recursive = 0;
		$this->set('travelexpenses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Travelexpense->exists($id)) {
			throw new NotFoundException(__('Invalid travelexpense'));
		}
		$options = array('conditions' => array('Travelexpense.' . $this->Travelexpense->primaryKey => $id));
		$this->set('travelexpense', $this->Travelexpense->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Travelexpense->create();
			if ($this->Travelexpense->save($this->request->data)) {
				$this->Flash->success('The travelexpense has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The travelexpense could not be saved. Please, try again.');
			}
		}
		$travellers = $this->Travelexpense->Traveller->find('list');
		$this->set(compact('travellers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Travelexpense->exists($id)) {
			throw new NotFoundException(__('Invalid travelexpense'));
		}
		if ($this->request->isPost() || $this->request->isPut()) {
			if ($this->Travelexpense->save($this->request->data)) {
				$this->Flash->success('The travelexpense has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The travelexpense could not be saved. Please, try again.');
			}
		} else {
			$options = array('conditions' => array('Travelexpense.' . $this->Travelexpense->primaryKey => $id));
			$this->request->data = $this->Travelexpense->find('first', $options);
		}
		$travellers = $this->Travelexpense->Traveller->find('list');
		$this->set(compact('travellers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Travelexpense->exists($id)) {
			throw new NotFoundException(__('Invalid travelexpense'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Travelexpense->delete($id)) {
			$this->Flash->success('The travelexpense has been deleted.');
		} else {
			$this->Flash->error('The travelexpense could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
