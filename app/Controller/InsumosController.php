<?php
App::uses('AppController', 'Controller');
/**
 * Insumos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 */
class InsumosController extends AppController {

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
		$this->Insumo->recursive = 0;
		$this->set('insumo', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Insumo->exists($id)) {
			throw new NotFoundException(__('Invalid Insumo'));
		}
		$options = array('conditions' => array('Insumo.' . $this->Insumo->primaryKey => $id));
		$this->set('Insumo', $this->Insumo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Insumo->create($datos = array());
			if ($this->Insumo->save($this->request->data)) {
				//$this->Session->setFlash(__('The usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				//$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
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
		if (!$this->Insumo->exists($id)) {
			throw new NotFoundException(__('Invalid Insumo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Insumo->save($this->request->data)) {
				//$this->Session->setFlash(__('The Insumo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				//$this->Session->setFlash(__('The Insumo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Insumo.' . $this->Insumo->primaryKey => $id));
			$this->request->data = $this->Insumo->find('first', $options);
		}
		//$rols = $this->Insumo->Rol->find('list');
		//$this->set(compact('rols'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Insumo->id = $id;
		if (!$this->Insumo->exists()) {
			throw new NotFoundException(__('Invalid Insumo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Insumo->delete()) {
			//$this->Session->setFlash(__('The Insumo has been deleted.'));
		} else {
			//$this->Session->setFlash(__('The Insumo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * minimo method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function minimo($id = null) {
		if (!$this->Insumo->exists($id)) {
			throw new NotFoundException(__('Invalid Insumo'));
		}
		$options = array('conditions' => array('Insumo.' . $this->Insumo->primaryKey => $id));
		$this->set('Insumo', $this->Insumo->find('first', $options));
	}
}
