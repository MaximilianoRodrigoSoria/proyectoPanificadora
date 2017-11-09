<?php
App::uses('AppController', 'Controller');
/**
 * Rols Controller
 *
 * @property Rol $Rol
 * @property PaginatorComponent $Paginator
 */
class RolsController extends AppController {

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
		$this->Rol->recursive = 0;
		$this->set('rols', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rol->exists($id)) {
			throw new NotFoundException(__('Invalid rol'));
		}
		$options = array('conditions' => array('Rol.' . $this->Rol->primaryKey => $id));
		$this->set('rol', $this->Rol->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rol->create();
			if ($this->Rol->save($this->request->data)) {
				//$this->Session->setFlash(__('The rol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				//$this->Session->setFlash(__('The rol could not be saved. Please, try again.'));
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
		if (!$this->Rol->exists($id)) {
			throw new NotFoundException(__('Invalid rol'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rol->save($this->request->data)) {
				//$this->Session->setFlash(__('The rol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rol could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rol.' . $this->Rol->primaryKey => $id));
			$this->request->data = $this->Rol->find('first', $options);
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
		$this->Rol->id = $id;
		if (!$this->Rol->exists()) {
			throw new NotFoundException(__('Invalid rol'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Rol->delete()) {
			//$this->Session->setFlash(__('The rol has been deleted.'));
		} else {
			//$this->Session->setFlash(__('The rol could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
