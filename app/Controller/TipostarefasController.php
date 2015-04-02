<?php
App::uses('AppController', 'Controller');
/**
 * Tipostarefas Controller
 *
 * @property Tipostarefa $Tipostarefa
 * @property PaginatorComponent $Paginator
 */
class TipostarefasController extends AppController {

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
		$this->Tipostarefa->recursive = 0;
		$this->set('tipostarefas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tipostarefa->exists($id)) {
			throw new NotFoundException(__('Invalid tipostarefa'));
		}
		$options = array('conditions' => array('Tipostarefa.' . $this->Tipostarefa->primaryKey => $id));
		$this->set('tipostarefa', $this->Tipostarefa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipostarefa->create();
			if ($this->Tipostarefa->save($this->request->data)) {
				$this->Session->setFlash(__('The tipostarefa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipostarefa could not be saved. Please, try again.'));
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
		if (!$this->Tipostarefa->exists($id)) {
			throw new NotFoundException(__('Invalid tipostarefa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tipostarefa->save($this->request->data)) {
				$this->Session->setFlash(__('The tipostarefa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipostarefa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tipostarefa.' . $this->Tipostarefa->primaryKey => $id));
			$this->request->data = $this->Tipostarefa->find('first', $options);
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
		$this->Tipostarefa->id = $id;
		if (!$this->Tipostarefa->exists()) {
			throw new NotFoundException(__('Invalid tipostarefa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tipostarefa->delete()) {
			$this->Session->setFlash(__('The tipostarefa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipostarefa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
