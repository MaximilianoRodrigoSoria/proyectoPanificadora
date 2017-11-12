<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 */
class ProductosController extends AppController {

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
		$this->Producto->recursive = 0;
		$this->set('productos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id_producto = null) {
		if (!$this->Productos->exists($id_producto)) {
			throw new NotFoundException(__('Invalid Producto'));
		}
		$options = array('conditions' => array('Productos.' . $this->Productos->primaryKey => $id_producto));
		$this->set('Producto', $this->Productos->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Productos->create();
			if ($this->Productos->save($this->request->data)) {
				//$this->Session->setFlash(__('The Producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				//$this->Session->setFlash(__('The Producto could not be saved. Please, try again.'));
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
	public function edit($id_producto = null) {
		if (!$this->Productos->exists($id_producto)) {
			throw new NotFoundException(__('Invalid Producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Productos->save($this->request->data)) {
				//$this->Session->setFlash(__('The Producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				//$this->Session->setFlash(__('The Producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Productos->primaryKey => $id_producto));
			$this->request->data = $this->Productos->find('first', $options);
		}
		//$rols = $this->Producto->Rol->find('list');
		//$this->set(compact('rols'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id_producto = null) {
		$this->Productos->id_producto = $id_producto;
		if (!$this->Productos->exists()) {
			throw new NotFoundException(__('Invalid Producto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Productos->delete()) {
			//$this->Session->setFlash(__('The Producto has been deleted.'));
		} else {
			//$this->Session->setFlash(__('The Producto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
