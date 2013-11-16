<?php
App::uses('AppController', 'Controller');
/**
 * Proyectos Controller
 *
 * @property Proyecto $Proyecto
 * @property PaginatorComponent $Paginator
 */
class ProyectosController extends AppController {

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
		$this->Proyecto->recursive = 0;
		$this->set('proyectos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
		$this->set('proyecto', $this->Proyecto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proyecto->create();
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('The proyecto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proyecto could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('The proyecto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proyecto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
			$this->request->data = $this->Proyecto->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proyecto->id = $id;
		if (!$this->Proyecto->exists()) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Proyecto->delete()) {
			$this->Session->setFlash(__('The proyecto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The proyecto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Proyecto->recursive = 0;
		$this->set('proyectos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
		$this->set('proyecto', $this->Proyecto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Proyecto->create();
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('The proyecto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proyecto could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('The proyecto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proyecto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
			$this->request->data = $this->Proyecto->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Proyecto->id = $id;
		if (!$this->Proyecto->exists()) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Proyecto->delete()) {
			$this->Session->setFlash(__('The proyecto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The proyecto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
