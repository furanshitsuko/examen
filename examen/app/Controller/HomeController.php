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

}
