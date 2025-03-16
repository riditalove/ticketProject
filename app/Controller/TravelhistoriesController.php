<?php
App::uses('AppController', 'Controller');
/**
 * Travelhistories Controller
 *
 * @property Travelhistory $Travelhistory
 * @property PaginatorComponent $Paginator
 */
class TravelhistoriesController extends AppController {

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
		$this->Travelhistory->recursive = 0;
		$this->set('travelhistories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Travelhistory->exists($id)) {
			throw new NotFoundException(__('Invalid travelhistory'));
		}
		$options = array('conditions' => array('Travelhistory.' . $this->Travelhistory->primaryKey => $id));
		$this->set('travelhistory', $this->Travelhistory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Travelhistory->create();
			if ($this->Travelhistory->save($this->request->data)) {
				$this->Flash->success('The travelhistory has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The travelhistory could not be saved. Please, try again.');
			}
		}
		$travellers = $this->Travelhistory->Traveller->find('list');
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
		if (!$this->Travelhistory->exists($id)) {
			throw new NotFoundException(__('Invalid travelhistory'));
		}
		if ($this->request->isPost() || $this->request->isPut()) {
			if ($this->Travelhistory->save($this->request->data)) {
				$this->Flash->success('The travelhistory has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The travelhistory could not be saved. Please, try again.');
			}
		} else {
			$options = array('conditions' => array('Travelhistory.' . $this->Travelhistory->primaryKey => $id));
			$this->request->data = $this->Travelhistory->find('first', $options);
		}
		$travellers = $this->Travelhistory->Traveller->find('list');
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
		if (!$this->Travelhistory->exists($id)) {
			throw new NotFoundException(__('Invalid travelhistory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Travelhistory->delete($id)) {
			$this->Flash->success('The travelhistory has been deleted.');
		} else {
			$this->Flash->error('The travelhistory could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
