<?php
App::uses('AppController', 'Controller');
/**
 * Companies Controller
 *
 * @property Company $Company
 * @property PaginatorComponent $Paginator
 */
class CompaniesController extends AppController {

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
		$this->Company->recursive = 0;
		$this->set('companies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
		$this->set('company', $this->Company->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Company->create();
			if ($this->Company->save($this->request->data)) {
				$this->Flash->success('The company has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The company could not be saved. Please, try again.');
			}
		}
		$companytypes = $this->Company->Companytype->find('list');
		$companynatures = $this->Company->Companynature->find('list');
		$this->set(compact('companytypes', 'companynatures'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		if ($this->request->isPost() || $this->request->isPut()) {
			if ($this->Company->save($this->request->data)) {
				$this->Flash->success('The company has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The company could not be saved. Please, try again.');
			}
		} else {
			$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
			$this->request->data = $this->Company->find('first', $options);
		}
		$companytypes = $this->Company->Companytype->find('list');
		$companynatures = $this->Company->Companynature->find('list');
		$this->set(compact('companytypes', 'companynatures'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Company->delete($id)) {
			$this->Flash->success('The company has been deleted.');
		} else {
			$this->Flash->error('The company could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
