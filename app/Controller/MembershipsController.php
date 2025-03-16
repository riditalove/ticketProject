<?php
App::uses('AppController', 'Controller');
/**
 * Memberships Controller
 *
 * @property Membership $Membership
 * @property PaginatorComponent $Paginator
 */
class MembershipsController extends AppController {

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
		$this->Membership->recursive = 0;
		$this->set('memberships', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Membership->exists($id)) {
			throw new NotFoundException(__('Invalid membership'));
		}
		$options = array('conditions' => array('Membership.' . $this->Membership->primaryKey => $id));
		$this->set('membership', $this->Membership->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Membership->create();
			if ($this->Membership->save($this->request->data)) {
				$this->Flash->success('The membership has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The membership could not be saved. Please, try again.');
			}
		}
		$travellers = $this->Membership->Traveller->find('list');
		$countries = $this->Membership->Country->find('list');
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
		if (!$this->Membership->exists($id)) {
			throw new NotFoundException(__('Invalid membership'));
		}
		if ($this->request->isPost() || $this->request->isPut()) {
			if ($this->Membership->save($this->request->data)) {
				$this->Flash->success('The membership has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The membership could not be saved. Please, try again.');
			}
		} else {
			$options = array('conditions' => array('Membership.' . $this->Membership->primaryKey => $id));
			$this->request->data = $this->Membership->find('first', $options);
		}
		$travellers = $this->Membership->Traveller->find('list');
		$countries = $this->Membership->Country->find('list');
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
		if (!$this->Membership->exists($id)) {
			throw new NotFoundException(__('Invalid membership'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Membership->delete($id)) {
			$this->Flash->success('The membership has been deleted.');
		} else {
			$this->Flash->error('The membership could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
