<?php
App::uses('AppController', 'Controller');
/**
 * Home Controller
 *
 * @property Home $Home
 * @property PaginatorComponent $Paginator
 */
class HomeController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

  public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('index');
  }

  public function index() {
    
  }
  public function view($id = null) {
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$this->set('project', $this->Project->find('first', $options));
	}
	public function admin_view($id = null) {
		if (!$this->Project->exists($id)) {
			throw new NotFoundException(__('Invalid project'));
		}
		$options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id));
		$this->set('project', $this->Project->find('first', $options));
	}

}
