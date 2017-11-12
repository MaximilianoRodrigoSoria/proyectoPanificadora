<?php
App::uses('AppController', 'Controller');
/**
 * Formulas Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 */
class FormulasController extends AppController {

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
		$this->Formula->recursive = 0;
		$this->set('formula', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id_formula = null) {
		if (!$this->Formula->exists($id_formula)) {
			throw new NotFoundException(__('Invalid Formula'));
		}
		$options = array('conditions' => array('Formula.' . $this->Formula->primaryKey => $id_formula));
		$this->set('Formula', $this->Formula->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
<<<<<<< HEAD
			$this->Formula->create($datos=array());
=======
			$this->Formula->create();
>>>>>>> origin/master
			if ($this->Formula->save($this->request->data)) {
				//$this->Session->setFlash(__('The Formula has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				//$this->Session->setFlash(__('The Formula could not be saved. Please, try again.'));
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
	public function edit($id_formula = null) {
		if (!$this->Formula->exists($id_formula)) {
			throw new NotFoundException(__('Invalid Formula'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Formula->save($this->request->data)) {
				//$this->Session->setFlash(__('The Formula has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				//$this->Session->setFlash(__('The Formula could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Formula.' . $this->Formula->primaryKey => $id_formula));
			$this->request->data = $this->Formula->find('first', $options);
		}
		//$rols = $this->Formula->Rol->find('list');
		//$this->set(compact('rols'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
<<<<<<< HEAD
	public function delete($id = null) {
		$this->Formula->id = $id;
=======
	public function delete($id_formula = null) {
		$this->Formula->id_formula = $id_formula;
>>>>>>> origin/master
		if (!$this->Formula->exists()) {
			throw new NotFoundException(__('Invalid Formula'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Formula->delete()) {
			//$this->Session->setFlash(__('The Formula has been deleted.'));
		} else {
			//$this->Session->setFlash(__('The Formula could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
