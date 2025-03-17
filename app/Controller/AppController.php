<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $components = array('Acl', 'Auth', 'Session', 'Flash', 'Cookie', 'Paginator');
    public $perms = null;
    protected $reason_changes = array('1' => 'NO CHANGE', '2' => 'BUYER', '3' => 'FABRIC MILL', '4' => 'FACTORY', '5' => 'INDESORE');
    protected $shipment_modes2 = array('2' => 'AIR', '4' => 'AIR+BOAT', '1' => 'BOAT');
    protected $shipment_modes = array('1' => 'SEA', '2' => 'AIR', '3' => 'SEA + AIR', '4' => 'AIR + SEA', '5' => 'ROAD + SEA', '6' => 'ROAD + AIR');
    protected $payment_terms = array('1' => '60 DAYS FROM ON BOARD DATE OF B/L ISSUE DATE OF AWB OR HWB FOR FULL INVOICE VALUE OF GOODS', '2' => '90 DAYS FROM ON BOARD DATE OF B/L ISSUE DATE OF AWB OR HWB FOR FULL INVOICE VALUE OF GOODS', '3' => '120 DAYS FROM ON BOARD DATE OF B/L ISSUE DATE OF AWB OR HWB FOR FULL INVOICE VALUE OF GOODS', '4' => 'AT SIGHT', '5' => 'TT PAYMENT', '6' => 'TT PAYMENT IN ADVANCE','7'=>'TT PAYMENT IN ADVANCE (PARTIAL) AND BALANCE TT PAYMENT AFTER COPY DOCUMENTS','8'=>'CAD (CASH AGAINST DOCUMENTS)');
    //protected $shipment_modes = array('1' => 'SEA', '2' => 'AIR', '3' => 'SEA + AIR OR AIR + SEA', '4' => 'ROAD + SEA', '5' => 'ROAD + AIR');
    protected $criteria_for = array('1' => 'MANAGER', '2' => 'QA', '3' => 'FACTORY', '4' => 'FACTORY [OVERALL PERCENTAGE]', '5' => 'FACTORY [TOTAL SHIPMENT MODE]');
    protected $payment_bys = array('1' => 'BUYER', '2' => 'FACTORY', '3' => 'FABRIC MILL', '4' => 'INDESORE', '5' => 'FACTORY + INDESORE', '6' => 'FABRIC MILL + INDESORE');
    protected $ch_colors = ['420F32', '9E363D', 'F36C39', 'E7CC1D', '97CA41', '0084B7', '39A6B9', '05699B'];

    public function beforeFilter()
    {
        $this->getSiteSetting();

        if ($this->Auth->loggedIn()) {
            $this->perms = json_decode($this->Auth->user('Role.roles'), true);
            //pr($this->perms);
            $this->set('perms', $this->perms);
            $this->isAuthorized();
            //$this->getSiteNotify();
        }
        $this->set('current_user', $this->Auth->user());
        $this->set('status', array(E_ERROR => '<span class="badge bg-success">Active</span>', PHP_DEBUG => '<span class="badge bg-warning">Inactive</span>', E_PARSE => '<span class="badge bg-danger">Cancelled</span>'));
        $this->set('genders', array(E_ERROR => 'Male', E_WARNING => 'Female', E_PARSE => 'Neuter'));
        $this->set('rounds', array('0' => 'info', '1' => 'warning', '2' => 'danger', '3' => 'success', '4' => 'primary', '5' => 'cyan', '6' => 'megna', '7' => 'secondary', '8' => 'orange', '9' => 'purple', '10' => 'black'));
        $this->set('criteria_for', $this->criteria_for);
        $this->set('ch_colors', $this->ch_colors);
        $this->set('reason_changes', $this->reason_changes);
        $this->set('shipment_modes', $this->shipment_modes);
        $this->set('payment_terms', $this->payment_terms);
        $this->set('payment_bys', $this->payment_bys);
        $this->set('optiontypes', array('A' => 'WASH', 'B' => 'QUALITY', 'C' => 'EMB/PRINT', 'D' => 'MAKING', 'E' => 'MERCH'));
        $this->saveLog();

        $this->set('links', []);
    }


    private function getSiteNotify()
    {
        $this->loadModel('Notification');
        $qam_noti = $this->Notification->find('count', array('conditions' => array('to_two' => $this->Auth->user('id'), 'status' => E_WARNING), 'recursive' => -1));
        $mam_noti = $this->Notification->find('count', array('conditions' => array('to_one' => $this->Auth->user('id'), 'status' => E_WARNING), 'recursive' => -1));
        $this->set(compact('qam_noti', 'mam_noti'));
    }

    protected function saveNotification($qa, $manager, $subject, $type, $id)
    {
        $notification = array();
        $notification['Notification']['from'] = $qa;
        $notification['Notification']['to_one'] = $manager;
        $notification['Notification']['subject'] = $subject;
        $notification['Notification']['type'] = $type;
        $notification['Notification']['typeid'] = $id;
        $notification['Notification']['status'] = E_WARNING;
        ClassRegistry::init('Notification')->save($notification);
    }

    public function po_cancel_Mail($id, $sub, $type)
    {
        $this->loadModel('Preproduction');
        $this->loadModel('User');

        $preproduction = $this->Preproduction->find('first', array('fields' => array('id', 'po_number', 'request_by', 'cancel_approved_by'), 'conditions' => array('Preproduction.id' => $id)));
        $merchandiser = $this->User->find('first', array('conditions' => array('id' => $preproduction['Preproduction']['request_by']), 'fields' => array('name', 'email', 'report_to'), 'recursive' => -1));
        $manager = $this->User->find('first', array('conditions' => array('id' => $merchandiser['User']['report_to']), 'fields' => array('name', 'email'), 'recursive' => -1));

        if ($type == 'cancelled') {
            $subject = $merchandiser['User']['name'] . ' ' . $sub;
            $email_to = $manager['User']['email'];
            $user_name_to = $manager['User']['name'];
            $user_name_by = $merchandiser['User']['name'];
        } else {
            $approvedby = $this->User->find('first', array('conditions' => array('id' => $preproduction['Preproduction']['cancel_approved_by']), 'fields' => array('name', 'email', 'report_to'), 'recursive' => -1));
            $directors = $this->User->find('first', array('conditions' => array('id' =>  $approvedby['User']['report_to']), 'fields' => array('name', 'email'), 'recursive' => -1));
            $subject = $approvedby['User']['name'] . ' ' . $sub;
            $user_name_to = $directors['User']['name'];
            $email_to = $directors['User']['email'];
            $user_name_by = $approvedby['User']['name'];
        }

        //$this->saveNotification($this->Auth->user('id'), $this->Auth->user('report_to'), $subject, $type, $preproduction['Preproduction']['id']);

        if (trim($email_to) != '') {
            $Email = new CakeEmail();
            $Email->config('smtp');
            $Email->viewVars(array('preproduction' => $preproduction, 'user' => $user_name_to, 'merchandiser' => $user_name_by, 'type' => $type, 'web' => COMPANY_WEB));
            $Email->template('po_cancel');
            $Email->emailFormat('html');
            $Email->subject($subject);
            $Email->to($email_to);
            $Email->from(array(COMPANY_EMAIL => COMPANY_EMAIL));
            $Email->send();
        }
    }


    public function sendMail($id, $sub, $type)
    {
        $this->loadModel('Kpiorder');
        $kpiorder = $this->Kpiorder->find('first', array('conditions' => array('Kpiorder.id' => $id)));
        $qa = $this->Kpiorder->User->find('first', array('conditions' => array('id' => $kpiorder['Kpiorder']['qa']), 'fields' => array('name', 'email'), 'recursive' => -1));
        $manager = $this->Kpiorder->User->find('first', array('conditions' => array('id' => $kpiorder['Kpiorder']['manager']), 'fields' => array('name', 'email'), 'recursive' => -1));
        $qa_manager = $this->Kpiorder->User->find('first', array('conditions' => array('id' => $kpiorder['Kpiorder']['qa_manager']), 'fields' => array('name', 'email'), 'recursive' => -1));
        $subject = $qa['User']['name'] . ' ' . $sub;
        $this->saveNotification($kpiorder['Kpiorder']['qa'], $kpiorder['Kpiorder']['manager'], $kpiorder['Kpiorder']['qa_manager'], $subject, $type, $kpiorder['Kpiorder']['id']);

        if (trim($manager['User']['email']) != '') {
            $Email = new CakeEmail();
            $Email->config('smtp');
            $Email->viewVars(array('kpiorder' => $kpiorder, 'user' => $manager, 'qa' => $qa, 'type' => $type, 'web' => COMPANY_WEB));
            $Email->template('order_open');
            $Email->emailFormat('html');
            $Email->subject($subject);
            $Email->to($manager['User']['email']);
            $Email->from(array(COMPANY_EMAIL => COMPANY_EMAIL));
            $Email->send();
        }

        if (trim($qa_manager['User']['email']) != '') {
            $Email = new CakeEmail();
            $Email->config('smtp');
            $Email->viewVars(array('kpiorder' => $kpiorder, 'user' => $qa_manager, 'qa' => $qa, 'type' => $type, 'web' => COMPANY_WEB));
            $Email->template('order_open');
            $Email->emailFormat('html');
            $Email->subject($subject);
            $Email->to($qa_manager['User']['email']);
            $Email->from(array(COMPANY_EMAIL => COMPANY_EMAIL));
            $Email->send();
        }
    }


    private function isAuthorized()
    {
        if (in_array($this->params['action'], $this->Auth->allowedActions)) {
            return true;
        }
        if (!isset($this->perms[Inflector::camelize($this->params['controller']) . "Controller"][$this->params['action']]) || is_numeric($this->perms[Inflector::camelize($this->params['controller']) . "Controller"][$this->params['action']])) {
            //throw new UnauthorizedException(__('You are not authorized to access this page.'));
            //echo $this->redirect(array('controller' => 'pages', 'action' => 'home'));
        } else {
            //echo Router::url(['controller' => $this->params['controller'], 'action' => 'index']);
            return true;
        }
    }

    private function saveLog()
    {
        $log = array();
        $log['Log']['id'] = null;
        $log['Log']['user_id'] = $this->Auth->user('id');
        $log['Log']['ip'] = $_SERVER['REMOTE_ADDR'];
        $log['Log']['port'] = $_SERVER['REMOTE_PORT'];
        $log['Log']['controller'] = $this->params['controller'];
        $log['Log']['action'] = $this->here;

        if ($this->request->isPost() || $this->request->isPut()) {
            $log['Log']['form_data'] = json_encode($this->request->data);
            //pr($log, 1);
        }

        ClassRegistry::init('Log')->save($log);
    }

    private function getSiteSetting()
    {
        if (!defined('COMPANY_NAME')) {
            $conf = ClassRegistry::init('Config')->find('list', array('fields' => array('key', 'value')));
            foreach ($conf as $key => $value) {
                define($key, $value);
            }
        }
    }

    protected function tojson($arrr, $object)
    {
        $arrs = array();
        foreach ($arrr as $arr) {
            $arrs[] = $arr[$object];
        }
        return json_encode($arrs);
    }

    protected function curlSend($url, $data)
    {
        try {
            $curl = curl_init();

            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($curl, CURLOPT_URL, 'https://m.indesore.com/' . $url);
            //curl_setopt($curl, CURLOPT_URL, 'http://localhost/proj/indesore/merchandising/merchandising/' . $url);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_TIMEOUT, 30);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

            $output = curl_exec($curl);

            if ($output === NULL) {
                pr("curl_error:" . curl_error($curl));
                pr("curl_errno:" . curl_errno($curl));
            } else {
                return $output;
            }
            curl_close($curl);
        } catch (Exception $e) {
            pr($e->getCode());
            pr($e->getMessage());
        }
    }
}

//ns1.dns-parking.com
//ns2.dns-parking.com