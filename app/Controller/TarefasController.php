<?php
App::uses('AppController', 'Controller');
/**
 * Tarefas Controller
 *
 * @property Tarefa $Tarefa
 * @property PaginatorComponent $Paginator
 */
class TarefasController extends AppController {

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
		$this->Tarefa->recursive = 0;
		$this->set('tarefas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tarefa->exists($id)) {
			throw new NotFoundException(__('Invalid tarefa'));
		}
		$options = array('conditions' => array('Tarefa.' . $this->Tarefa->primaryKey => $id));
		$this->set('tarefa', $this->Tarefa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tarefa->create();
			if ($this->Tarefa->save($this->request->data)) {
				$this->Session->setFlash(__('The tarefa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tarefa could not be saved. Please, try again.'));
			}
		}
		$tipostarefas = $this->Tarefa->Tipostarefa->find('list',array('fields'=>'Tipostarefa.titulo'));
		$materias = $this->Tarefa->Materia->find('list',array('fields'=>'Materia.titulo'));
		$this->set(compact('tipostarefas','materias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tarefa->exists($id)) {
			throw new NotFoundException(__('Invalid tarefa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tarefa->save($this->request->data)) {
				$this->Session->setFlash(__('The tarefa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tarefa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tarefa.' . $this->Tarefa->primaryKey => $id));
			$this->request->data = $this->Tarefa->find('first', $options);
		}
		$tipostarefas = $this->Tarefa->Tipostarefa->find('list',array('fields'=>'Tipostarefa.titulo'));
		$materias = $this->Tarefa->Materia->find('list',array('fields'=>'Materia.titulo'));
		$this->set(compact('tipostarefas','materias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tarefa->id = $id;
		if (!$this->Tarefa->exists()) {
			throw new NotFoundException(__('Invalid tarefa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tarefa->delete()) {
			$this->Session->setFlash(__('The tarefa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tarefa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
