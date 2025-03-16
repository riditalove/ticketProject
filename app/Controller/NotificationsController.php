<?php
App::uses('AppController', 'Controller');
/**
 * Notifications Controller
 *
 * @property Notification $Notification
 * @property PaginatorComponent $Paginator
 */
class NotificationsController extends AppController {

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
		$this->Notification->recursive = 0;
		$this->set('notifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Notification->exists($id)) {
			throw new NotFoundException(__('Invalid notification'));
		}
		$options = array('conditions' => array('Notification.' . $this->Notification->primaryKey => $id));
		$this->set('notification', $this->Notification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Notification->create();
			if ($this->Notification->save($this->request->data)) {
				$this->Flash->success('The notification has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The notification could not be saved. Please, try again.');
			}
		}
		$users = $this->Notification->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Notification->exists($id)) {
			throw new NotFoundException(__('Invalid notification'));
		}
		if ($this->request->isPost() || $this->request->isPut()) {
			if ($this->Notification->save($this->request->data)) {
				$this->Flash->success('The notification has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error('The notification could not be saved. Please, try again.');
			}
		} else {
			$options = array('conditions' => array('Notification.' . $this->Notification->primaryKey => $id));
			$this->request->data = $this->Notification->find('first', $options);
		}
		$users = $this->Notification->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Notification->exists($id)) {
			throw new NotFoundException(__('Invalid notification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Notification->delete($id)) {
			$this->Flash->success('The notification has been deleted.');
		} else {
			$this->Flash->error('The notification could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
