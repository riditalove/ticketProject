<?php

App::uses('AppController', 'Controller');


/**
 * Users Controller
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Uploader', 'Cookie', 'Simplexlsx');
    private $religion = array('1' => 'Islam', '2' => 'Hinduism', '3' => 'Christianity', '4' => 'Catholicism', '5' => 'Agnosticism', '6' => 'Buddhism', '7' => 'Atheism', '8' => 'Anglicanism', '9' => 'Sikhism', '10' => 'Seventh-Day Adventists', '11' => 'Mormonism', '12' => 'Judaism');
    private $nationality = array('1' => 'Afghan', '2' => 'Albanian', '3' => 'Algerian', '4' => 'American', '5' => 'Andorran', '6' => 'Angolan', '7' => 'Antiguans', '8' => 'Argentinean', '9' => 'Armenian', '10' => 'Australian', '11' => 'Austrian', '12' => 'Azerbaijani', '13' => 'Bahamian', '14' => 'Bahraini', '15' => 'Bangladeshi', '16' => 'Barbadian', '17' => 'Barbudans', '18' => 'Batswana', '19' => 'Belarusian', '20' => 'Belgian', '21' => 'Belizean', '22' => 'Beninese', '23' => 'Bhutanese', '24' => 'Bolivian', '25' => 'Bosnian', '26' => 'Brazilian', '27' => 'British', '28' => 'Bruneian', '29' => 'Bulgarian', '30' => 'Burkinabe', '31' => 'Burmese', '32' => 'Burundian', '33' => 'Cambodian', '34' => 'Cameroonian', '35' => 'Canadian', '36' => 'Cape Verdean', '37' => 'Central African', '38' => 'Chadian', '39' => 'Chilean', '40' => 'Chinese', '41' => 'Colombian', '42' => 'Comoran', '43' => 'Congolese', '44' => 'Congolese', '45' => 'Costa Rican', '46' => 'Croatian', '47' => 'Cuban', '48' => 'Cypriot', '49' => 'Czech', '50' => 'Danish', '51' => 'Djibouti', '52' => 'Dominican', '53' => 'Dominican', '54' => 'Dutch', '55' => 'Dutchman', '56' => 'Dutchwoman', '57' => 'East Timorese', '58' => 'Ecuadorean', '59' => 'Egyptian', '60' => 'Emirian', '61' => 'Equatorial Guinean', '62' => 'Eritrean', '63' => 'Estonian', '64' => 'Ethiopian', '65' => 'Fijian', '66' => 'Filipino', '67' => 'Finnish', '68' => 'French', '69' => 'Gabonese', '70' => 'Gambian', '71' => 'Georgian', '72' => 'German', '73' => 'Ghanaian', '74' => 'Greek', '75' => 'Grenadian', '76' => 'Guatemalan', '77' => 'Guinea-Bissauan', '78' => 'Guinean', '79' => 'Guyanese', '80' => 'Haitian', '81' => 'Herzegovinian', '82' => 'Honduran', '83' => 'Hungarian', '84' => 'I-Kiribati', '85' => 'Icelander', '86' => 'Indian', '87' => 'Indonesian', '88' => 'Iranian', '89' => 'Iraqi', '90' => 'Irish', '91' => 'Irish', '92' => 'Israeli', '93' => 'Italian', '94' => 'Ivorian', '95' => 'Jamaican', '96' => 'Japanese', '97' => 'Jordanian', '98' => 'Kazakhstani', '99' => 'Kenyan', '100' => 'Kittian and Nevisian', '101' => 'Kuwaiti', '102' => 'Kyrgyz', '103' => 'Laotian', '104' => 'Latvian', '105' => 'Lebanese', '106' => 'Liberian', '107' => 'Libyan', '108' => 'Liechtensteiner', '109' => 'Lithuanian', '110' => 'Luxembourger', '111' => 'Macedonian', '112' => 'Malagasy', '113' => 'Malawian', '114' => 'Malaysian', '115' => 'Maldivan', '116' => 'Malian', '117' => 'Maltese', '118' => 'Marshallese', '119' => 'Mauritanian', '120' => 'Mauritian', '121' => 'Mexican', '122' => 'Micronesian', '123' => 'Moldovan', '124' => 'Monacan', '125' => 'Mongolian', '126' => 'Moroccan', '127' => 'Mosotho', '128' => 'Motswana', '129' => 'Mozambican', '130' => 'Namibian', '131' => 'Nauruan', '132' => 'Nepalese', '133' => 'Netherlander', '134' => 'New Zealander', '135' => 'Ni-Vanuatu', '136' => 'Nicaraguan', '137' => 'Nigerian', '138' => 'Nigerien', '139' => 'North Korean', '140' => 'Northern Irish', '141' => 'Norwegian', '142' => 'Omani', '143' => 'Pakistani', '144' => 'Palauan', '145' => 'Panamanian', '146' => 'Papua New Guinean', '147' => 'Paraguayan', '148' => 'Peruvian', '149' => 'Polish', '150' => 'Portuguese', '151' => 'Qatari', '152' => 'Romanian', '153' => 'Russian', '154' => 'Rwandan', '155' => 'Saint Lucian', '156' => 'Salvadoran', '157' => 'Samoan', '158' => 'San Marinese', '159' => 'Sao Tomean', '160' => 'Saudi', '161' => 'Scottish', '162' => 'Senegalese', '163' => 'Serbian', '164' => 'Seychellois', '165' => 'Sierra Leonean', '166' => 'Singaporean', '167' => 'Slovakian', '168' => 'Slovenian', '169' => 'Solomon Islander', '170' => 'Somali', '171' => 'South African', '172' => 'South Korean', '173' => 'Spanish', '174' => 'Sri Lankan', '175' => 'Sudanese', '176' => 'Surinamer', '177' => 'Swazi', '178' => 'Swedish', '179' => 'Swiss', '180' => 'Syrian', '181' => 'Taiwanese', '182' => 'Tajik', '183' => 'Tanzanian', '184' => 'Thai', '185' => 'Togolese', '186' => 'Tongan', '187' => 'Trinidadian or Tobagonian', '188' => 'Tunisian', '189' => 'Turkish', '190' => 'Tuvaluan', '191' => 'Ugandan', '192' => 'Ukrainian', '193' => 'Uruguayan', '194' => 'Uzbekistani', '195' => 'Venezuelan', '196' => 'Vietnamese', '197' => 'Welsh', '198' => 'Welsh', '199' => 'Yemenite', '200' => 'Zambian', '201' => 'Zimbabwean');
    private $blood_group = array('1' => 'A+ve', '2' => 'B+ve', '3' => 'AB+ve', '4' => 'O+ve', '5' => 'A-ve', '6' => 'B-ve', '7' => 'AB-ve', '8' => 'O-ve');
    private $marital_status = array('1' => 'Married', '2' => 'Living common law', '3' => 'Widowed', '4' => 'Separated', '5' => 'Divorced', '6' => 'Single');

    public function beforeFilter()
    {
        $this->Auth->allow(array('login', 'fp', 'dashboard', 'ajax_birthday_sms', 'ajax_ses_new'));

        parent::beforeFilter();
        $this->set('marital_status', $this->marital_status);
        $this->set('blood_group', $this->blood_group);
        $this->set('religion', $this->religion);
        $this->set('nationality', $this->nationality);
    }

    /**
     * index method
     * Generated by Abdul Jalil
     * @return void
     */
    public function index()
    {
        $this->User->recursive = 0;
        $conditions = array();
        if (!isset($this->request->data['Src']['company_id'])) {
            $this->request->data['Src']['company_id'] = $this->Auth->user('company_id');
        }
        if (!empty($this->request->data['Src']['company_id'])) {
            $conditions[] = array("User.company_id" => $this->request->data['Src']['company_id']);
        }
        if (!empty($this->request->data['Src']['department_id'])) {
            $conditions[] = array("User.department_id" => $this->request->data['Src']['department_id']);
        }
        if (!empty($this->request->data['Src']['role_id'])) {
            $conditions[] = array("User.role_id" => $this->request->data['Src']['role_id']);
        }
        if (!empty($this->request->data['Src']['name'])) {
            $conditions[] = array("User.name LIKE '%" . $this->request->data['Src']['name'] . "%'");
        }
        if (!empty($this->request->data['Src']['phone'])) {
            $conditions[] = array("User.phone LIKE '%" . $this->request->data['Src']['phone'] . "'");
        }
        if (!empty($this->request->data['Src']['email'])) {
            $conditions[] = array("User.email LIKE '%" . $this->request->data['Src']['email'] . "'");
        }
        if (isset($this->request->data['Src']['status']) && $this->request->data['Src']['status'] != NULL) {
            $conditions[] = array("User.status" => $this->request->data['Src']['status']);
        }
        $this->Paginator->settings = array('conditions' => $conditions, 'order' => array('User.department_id' => 'ASC'));
        $this->set('users', $this->Paginator->paginate());

        $roles = $this->User->Role->find('list', array('conditions' => array('status' => E_ERROR), 'order' => array('title' => 'ASC')));
        $companies = $this->User->Company->find('list', array('conditions' => array('status' => E_ERROR, 'id IN(' . $this->Auth->user('companies') . ')'), 'order' => array('name' => 'ASC')));
        $this->set(compact('roles', 'companies'));
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
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }

        $this->set('user', $this->User->find('first', array('conditions' => array('User.' . $this->User->primaryKey => $id), 'recursive' => 0)));
        $this->set('users', $this->User->find('list', array('conditions' => array('status' => E_ERROR))));
        $this->set('useraccounts', $this->User->Useraccount->find('all', array('conditions' => array('Useraccount.user_id' => $id), 'recursive' => 0)));
        $this->set('usercompanies', $this->User->Usercompany->find('all', array('conditions' => array('Usercompany.user_id' => $id), 'recursive' => 0)));
        $this->set('usereducations', $this->User->Usereducation->find('all', array('conditions' => array('Usereducation.user_id' => $id), 'recursive' => 0)));
        $this->set('usercards', $this->User->Usercard->find('all', array('conditions' => array('Usercard.user_id' => $id), 'recursive' => 0)));
        $this->set('usertrainings', $this->User->Usertraining->find('all', array('conditions' => array('Usertraining.user_id' => $id), 'recursive' => 0)));
        $this->set('userexperiences', $this->User->Userexperience->find('all', array('conditions' => array('Userexperience.user_id' => $id), 'recursive' => 0)));
        $this->set('userfamilies', $this->User->Userfamily->find('all', array('conditions' => array('Userfamily.user_id' => $id), 'recursive' => 0)));
        $this->set('userfiles', $this->User->Userfile->find('all', array('conditions' => array('Userfile.user_id' => $id), 'recursive' => 0)));
        $this->set('usermedicals', $this->User->Usermedical->find('all', array('conditions' => array('Usermedical.user_id' => $id), 'recursive' => 0)));
        $this->set('usernominees', $this->User->Usernominee->find('all', array('conditions' => array('Usernominee.user_id' => $id), 'recursive' => 0)));
        $this->set('usertransfers', $this->User->Usertransfer->find('all', array('conditions' => array('Usertransfer.user_id' => $id), 'recursive' => 0)));
    }


    public function add()
    {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success('The User has been saved.');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error('The User could not be saved. Please, try again.');
            }
        }
        $companies = $this->User->Company->find('list', array('conditions' => array('status' => E_ERROR), 'order' => array('name' => 'ASC')));
        $roles = $this->User->Role->find('list', array('fields'=>array('id','title'),'conditions' => array('status' => E_ERROR), 'order' => array('title' => 'ASC')));
        $this->set(compact('roles','companies'));
    }

    public function edit($id = null)
    {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid User'));
        }
        if ($this->request->isPost() || $this->request->isPut()) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success('The User has been saved.');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error('The User could not be saved. Please, try again.');
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $companies = $this->User->Company->find('list', array('conditions' => array('status' => E_ERROR), 'order' => array('name' => 'ASC')));
        $roles = $this->User->Role->find('list', array('fields'=>array('id','title'),'conditions' => array('status' => E_ERROR), 'order' => array('title' => 'ASC')));
        $this->set(compact('roles','companies'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit_company($id = null)
    {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }

        if ($this->Auth->user('role_id') != HR && $this->Auth->user('role_id') != ADMIN) {
            return $this->redirect(array('action' => 'my_profile'));
        }

        if ($this->request->isPost() || $this->request->isPut()) {
            //$this->request->data['User']['companies'][$this->request->data['User']['company_id'] - 1] = $this->request->data['User']['company_id'];
            $this->request->data['User']['companies'] = implode(',', $this->request->data['User']['companies']);
            $this->request->data['User']['edit_by'] = $this->Auth->user('id');
            //pr($this->request->data, 1);
            if ($this->User->save($this->request->data, FALSE)) {

                $data = $this->encode($this->request->data);
                $this->curlSend('users/ajax_edit', array('_t_' => time(), 'd' => $data));

                $this->Flash->success('The user has been updated.');
                return $this->redirect(array('action' => 'edit_company', $id));
            } else {
                $this->Flash->error('The user could not be updated. Please, try again.');
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id), 'recursive' => -1);
            $this->request->data = $this->User->find('first', $options);
        }
        $users = $this->User->find('list', array('conditions' => array('status' => E_ERROR), 'order' => array('name' => 'ASC')));
        $companies = $this->User->Company->find('list', array('conditions' => array('status' => E_ERROR), 'order' => array('name' => 'ASC')));
        $departments = $this->User->Department->find('list', array('conditions' => array('status' => E_ERROR), 'order' => array('name' => 'ASC')));
        $designations = $this->User->Designation->find('list', array('conditions' => array('status' => E_ERROR), 'order' => array('name' => 'ASC')));
        $this->set(compact('companies', 'departments', 'sections', 'designations', 'users'));
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
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            if (is_file($this->Uploader->uploadDir('u', $id))) {
                unlink($this->Uploader->uploadDir('u', $id));
            }
            if (is_file($this->Uploader->uploadDir('id', $id))) {
                unlink($this->Uploader->uploadDir('id', $id));
            }

            $data = $this->encode($id . '|' . time());
            $this->curlSend('users/ajax_delete', array('_t_' => time(), 'd' => $data));

            $this->Flash->success('The user has been deleted.');
        } else {
            $this->Flash->error('The user could not be deleted. Please, try again.');
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function dashboard()
    {
        $qaslists = $this->User->find('list', array('fields' => array('id', 'id'), 'conditions' => array('status' => E_ERROR, 'id IN(' . KPI_QA . '0)'), 'order' => array('name' => 'ASC')));
        if (in_array($this->Auth->user('id'), $qaslists)) {
            return $this->redirect(array('controller' => 'users', 'action' => 'index'));
        }
        return $this->redirect(array('controller' => 'users', 'action' => 'index'));

        if (!$this->Auth->loggedIn()) {
            return $this->redirect(array('action' => 'login'));
        }
        if (is_numeric($this->perms["UsersController"]["dashboard"])) {
            return $this->redirect(array('action' => 'my_dashboard'));
        }
        $this->set('companies', $this->User->Company->find('list', array('conditions' => array('status' => E_ERROR, 'id IN(' . $this->Auth->user('companies') . ')'), 'order' => array('name' => 'ASC'))));

        if (empty($this->request->data['Src']['company_id'])) {
            $this->request->data['Src']['company_id'] = $this->Auth->user('company_id');
        }
        if (empty($this->request->data['Src']['date'])) {
            $this->request->data['Src']['date'] = date('Y-m-d');
            //Configure::write('debug', 2);
        }

        $totusers = $this->User->find('list', array('conditions' => array('company_id' => $this->request->data['Src']['company_id'], 'status' => E_ERROR), 'recursive' => -1));
    }

    //Lgin
    public function login()
    {
        $this->layout = 'login';

        if ($this->Auth->loggedIn()) {
            return $this->redirect(array('controller' => 'users', 'action' => 'index'));
        } else {
            $cookie = $this->Cookie->read('remember_me_cookie');
            if ($cookie !== null) {
                $this->request->data['User'] = $cookie;
                if ($this->Auth->login()) {
                    return $this->redirect(array('controller' => 'users', 'action' => 'index'));
                }
            }
        }

        if ($this->request->is('post')) {
            //pr($this->request->data, 1);
            if ($this->Auth->login()) {
                if ($this->Auth->user('status') == E_ERROR) {
                    // write the cookie
                    if (isset($this->request->data['User']['rememberme'])) {
                        $this->Cookie->write('remember_me_cookie', $this->request->data['User'], true, (12 * 60 * 60));
                    }

                    $login = array();
                    $login['Login']['user_id'] = $this->Auth->user('id');
                    $login['Login']['ip'] = $_SERVER['REMOTE_ADDR'];
                    $login['Login']['useragent'] = $_SERVER['HTTP_USER_AGENT'];
                    $login['Login']['port'] = $_SERVER['REMOTE_PORT'];
                    $login['Login']['login'] = date('Y-m-d H:i:s');
                    ClassRegistry::init('Login')->save($login);

                    $this->Flash->success('Welcome ' . $this->Auth->user('name'));
                    return $this->redirect(array('controller' => 'users', 'action' => 'index'));
                } else {
                    $this->Flash->error(__('Your account is inactive.'));
                    $this->logout(1);
                }
            } else {
                $this->Flash->error('Your username/password combination was incorrect.');
            }
        }
    }

    public function logout($inact = null)
    {
        $this->Cookie->delete('remember_me_cookie');

        $this->loadModel('Login');
        $login = $this->Login->find('first', array('conditions' => array('user_id' => $this->Auth->user('id'), 'logout IS NULL'), 'order' => array('login' => 'DESC'), 'recursive' => -1));
        $login['Login']['logout'] = date('Y-m-d H:i:s');
        $this->Login->save($login);

        $this->Session->destroy();

        if ($inact) {
            $this->Flash->error('Your account is inactive.');
        }

        return $this->redirect($this->Auth->logout());
    }

    public function group_access()
    {
    }

    public function cp()
    {
        $this->User->id = $this->Auth->user('id');
        if (!$this->User->exists()) {
            throw new NotFoundException('Invalid user');
        }

        if ($this->request->isPost() || $this->request->isPut()) {
            $user = $this->User->find('first', array('conditions' => array("User.id" => $this->Auth->user('id')), 'recursive' => -1));
            if ($user['User']['password'] != $this->request->data['User']['current_password']) {
                $this->Flash->error('Current Password is not correct.');
            } else if ($this->request->data['User']['password'] != $this->request->data['User']['actpass']) {
                $this->Flash->error('Password and Confirm Password is not same.');
            } else {
                $this->request->data['User']['id'] = $this->Auth->user('id');
                if ($this->User->save($this->request->data)) {
                    $this->Flash->success('Password has been changed successfully.');
                    return $this->redirect(array('action' => 'cp'));
                } else {
                    $this->Flash->error('Password could not be changed. Please, try again.');
                }
            }
        } else {
            $this->request->data = $this->User->read();
        }
    }

    public function fp()
    {
        $this->layout = 'public';
        if ($this->request->is('post')) {
            $data = $this->request->data['User']['username'];

            $user = $this->User->find('first', array('recursive' => -1, 'conditions' => array("BINARY username='" . $data . "'")));
            if (empty($user['User']['id'])) {
                $this->Flash->error('Incorrect Email');
                return;
            }

            if ($user['User']['id']) {
                if ($this->sendMail($data, 'Password Retrieve', 'fp')) {
                    $this->Flash->success('Please check your mail for reset your password');
                    $this->redirect(array('action' => 'login'));
                } else {
                    $this->Flash->error('Please try again.');
                }
            }
        }
    }

    /**
     * check username exist by ajax
     *
     * @throws NotFoundException
     * @param string $username
     * @return void
     */
    public function ajax_checkuser()
    {
        $this->autoRender = FALSE;

        $conditions = ["username" => $this->request->data('username')];
        if ($this->request->data('uid')) {
            $conditions[] = ["id <> " . $this->request->data('uid')];
        }

        $user = $this->User->find('first', array('conditions' => $conditions, 'fields' => array('id'), 'recursive' => -1));
        if (count($user) > 0) {
            echo 'Please use another username';
        } else {
            echo false;
        }
    }

    /**
     * check username exist by ajax
     *
     * @throws NotFoundException
     * @param string $username
     * @return void
     */
    public function ajax_getuser_by_company()
    {
        $this->layout = 'ajax';

        $users = null;
        if ($this->request->data('report_to') == E_ERROR) {
            $users = $this->User->find('list', array('conditions' => array('report_to' => $this->Auth->user('id'), 'company_id' => $this->request->data('company_id'), 'status' => E_ERROR), 'order' => array('name' => 'ASC'), 'recursive' => -1));
        } else {
            if ($this->request->data('is_own') == E_ERROR) {
                $users = $this->User->find('list', array('conditions' => array('company_id' => $this->request->data('company_id'), 'id <> ' . $this->Auth->user('id'), 'status' => E_ERROR), 'order' => array('name' => 'ASC'), 'recursive' => -1));
            } else {
                $users = $this->User->find('list', array('conditions' => array('company_id' => $this->request->data('company_id'), 'status' => E_ERROR), 'order' => array('name' => 'ASC'), 'recursive' => -1));
            }
        }

        $this->set('users', $users);
        $this->set('model', $this->request->data('model'));
        $this->set('label', $this->request->data('label'));
        $this->set('user_id', $this->request->data('user_id'));
        $this->set('required', $this->request->data('required'));
    }

    public function ajax_getview_by_user()
    {
        $this->layout = 'ajax';

        $users = $this->User->find('first', array('conditions' => array('User.id' => $this->request->data('user_id')), 'recursive' => 0));
        $this->set('user', $users);
    }

    /**
     * check getname exist by ajax
     *
     * @throws NotFoundException
     * @param string $user_id
     * @return void
     */
    public function ajax_getname()
    {
        $this->autoRender = FALSE;

        $user = $this->User->find('first', array('conditions' => array("User.id" => $this->request->data('user_id')), 'fields' => array('name'), 'recursive' => -1));
        if (count($user) > 0) {
            echo $user['User']['name'];
        } else {
            echo false;
        }
    }

    public function ajax_ses_new()
    {
        echo $this->request->data('user');
        die();
    }

    public function go_parcel()
    {
        $this->autoRender = FALSE;

        $user = $this->User->find('first', array('conditions' => array("User.id" => $this->Auth->user('id')), 'fields' => array('username', 'password'), 'recursive' => -1));
        $data = $this->encode($user['User']['username'] . '~' . $user['User']['password']);

        try {
            $curl = curl_init();

            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($curl, CURLOPT_URL, 'https://m.indesore.com/users/me_parcel');
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_TIMEOUT, 30);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, array('imperse' => $data));

            $output = curl_exec($curl);

            if ($output === NULL || $output === '') {
                echo "<pre>curl_error:";
                print_r(curl_error($curl));
                echo "</pre><pre>curl_errno:";
                print_r(curl_errno($curl));
                echo "</pre>";
            } else {
                //pr($output, 1);
                header('Location: https://m.indesore.com/users/set_parcel/' . $output);
                die();
            }
            curl_close($curl);
        } catch (Exception $e) {
            echo "<pre>";
            print_r($e->getCode());
            echo "</pre><pre>";
            print_r($e->getMessage());
            echo "</pre>";
        }

        die();
    }
}
