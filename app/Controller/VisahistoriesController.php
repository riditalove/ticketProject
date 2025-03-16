<?php
App::uses('AppController', 'Controller');
/**
 * Visahistories Controller
 *
 * @property Visahistory $Visahistory
 * @property PaginatorComponent $Paginator
 */
class VisahistoriesController extends AppController {

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
		$this->Visahistory->recursive = 0;
		$this->set('visahistories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Visahistory->exists($id)) {
			throw new NotFoundException(__('Invalid visahistory'));
		}
		$options = array('conditions' => array('Visahistory.' . $this->Visahistory->primaryKey => $id));
		$this->set('visahistory', $this->Visahistory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Visahistory->create();
			if ($this->Visahistory->save($this->request->data)) {
				$this->Flash->success('The visahistory has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The visahistory could not be saved. Please, try again.');
			}
		}
		$travellers = $this->Visahistory->Traveller->find('list');
		$countries = $this->Visahistory->Country->find('list');
		$this->set(compact('travellers', 'countries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Visahistory->exists($id)) {
			throw new NotFoundException(__('Invalid visahistory'));
		}
		if ($this->request->isPost() || $this->request->isPut()) {
			if ($this->Visahistory->save($this->request->data)) {
				$this->Flash->success('The visahistory has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The visahistory could not be saved. Please, try again.');
			}
		} else {
			$options = array('conditions' => array('Visahistory.' . $this->Visahistory->primaryKey => $id));
			$this->request->data = $this->Visahistory->find('first', $options);
		}
		$travellers = $this->Visahistory->Traveller->find('list');
		$countries = $this->Visahistory->Country->find('list');
		$this->set(compact('travellers', 'countries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Visahistory->exists($id)) {
			throw new NotFoundException(__('Invalid visahistory'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Visahistory->delete($id)) {
			$this->Flash->success('The visahistory has been deleted.');
		} else {
			$this->Flash->error('The visahistory could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
