<?php
App::uses('AppController', 'Controller');
/**
 * Travelexpenses Controller
 *
 * @property Travelexpense $Travelexpense
 * @property PaginatorComponent $Paginator
 */
class TravelexpensesController extends AppController
{

	private $travel_expense = array('1' => 'Flights', '2' => 'Accommodation', '3' => 'Transportation', '4' => 'Meals & Dining', '5' => 'Business Expenses', '6' => 'Miscellaneous');

	private $payment_method = array('1' => 'Cash', '2' => 'Cheque', '3' => 'Bank Transfer', '4' => 'Credit Card', '5' => 'Debit Card', '6' => 'Mobile Wallet', '7' => 'Online Payment', '8' => 'Others');

	private $currency = array('1' => 'BDT', '2' => 'USD', '3' => 'EUR', '4' => 'INR', '5' => 'JPY', '6' => 'CNR', '7' => 'CAD', '8' => 'DKK');


	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->set('travel_expense', $this->travel_expense);
		$this->set('payment_method', $this->payment_method);
		$this->set('currency', $this->currency);
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
	public function index()
	{
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
	public function view($id = null)
	{
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
	public function add()
	{
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
	public function edit($id = null)
	{
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
	public function delete($id = null)
	{
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
