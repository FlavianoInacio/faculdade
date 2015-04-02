<?php
App::uses('AppController', 'Controller');
/**
 * Semestres Controller
 *
 * @property Semestre $Semestre
 * @property PaginatorComponent $Paginator
 */
class SemestresController extends AppController {

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
		$this->Semestre->recursive = 0;
		$this->set('semestres', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Semestre->exists($id)) {
			throw new NotFoundException(__('Invalid semestre'));
		}
		$options = array('conditions' => array('Semestre.' . $this->Semestre->primaryKey => $id));
		$this->set('semestre', $this->Semestre->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Semestre->create();
			if ($this->Semestre->save($this->request->data)) {
				$this->Session->setFlash(__('The semestre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The semestre could not be saved. Please, try again.'));
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
		if (!$this->Semestre->exists($id)) {
			throw new NotFoundException(__('Invalid semestre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Semestre->save($this->request->data)) {
				$this->Session->setFlash(__('The semestre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The semestre could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Semestre.' . $this->Semestre->primaryKey => $id));
			$this->request->data = $this->Semestre->find('first', $options);
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
		$this->Semestre->id = $id;
		if (!$this->Semestre->exists()) {
			throw new NotFoundException(__('Invalid semestre'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Semestre->delete()) {
			$this->Session->setFlash(__('The semestre has been deleted.'));
		} else {
			$this->Session->setFlash(__('The semestre could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
