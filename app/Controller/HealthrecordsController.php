<?php
App::uses('AppController', 'Controller');
/**
 * Healthrecords Controller
 *
 * @property Healthrecord $Healthrecord
 * @property PaginatorComponent $Paginator
 */
class HealthrecordsController extends AppController {

	private $checkup_type = array('1' => 'ECG', '2' => 'Xray', '3' => 'EEG', '4' => 'Angiography', '5' => 'Biopsy', '6' => 'CT scan');

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->set('checkup_type', $this->checkup_type);	
	}

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
		$this->Healthrecord->recursive = 0;
		$this->set('healthrecords', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Healthrecord->exists($id)) {
			throw new NotFoundException(__('Invalid healthrecord'));
		}
		$options = array('conditions' => array('Healthrecord.' . $this->Healthrecord->primaryKey => $id));
		$this->set('healthrecord', $this->Healthrecord->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Healthrecord->create();
			if ($this->Healthrecord->save($this->request->data)) {
				$this->Flash->success('The healthrecord has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The healthrecord could not be saved. Please, try again.');
			}
		}
		$travellers = $this->Healthrecord->Traveller->find('list');
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

		if ($this->request->isPost() || $this->request->isPut()) {
			if ($this->Healthrecord->save($this->request->data)) {
				$this->Flash->success('The healthrecord has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The healthrecord could not be saved. Please, try again.');
			}
		} else {
			$options = array('conditions' => array('Healthrecord.' . $this->Healthrecord->primaryKey => $id));
			$this->request->data = $this->Healthrecord->find('first', $options);
		}
		$travellers = $this->Healthrecord->Traveller->find('list');
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
		if (!$this->Healthrecord->exists($id)) {
			throw new NotFoundException(__('Invalid healthrecord'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Healthrecord->delete($id)) {
			$this->Flash->success('The healthrecord has been deleted.');
		} else {
			$this->Flash->error('The healthrecord could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
