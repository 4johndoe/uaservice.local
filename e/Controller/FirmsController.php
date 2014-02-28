<?php
App::uses('AppController', 'Controller');
/**
 * Firms Controller
 *
 * @property Firm $Firm
 * @property PaginatorComponent $Paginator
 */
class FirmsController extends AppController {

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
		$this->Firm->recursive = 0;
		$this->set('firms', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Firm->exists($id)) {
			throw new NotFoundException(__('Invalid firm'));
		}
		$options = array('conditions' => array('Firm.' . $this->Firm->primaryKey => $id));
		$this->set('firm', $this->Firm->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Firm->create();
			if ($this->Firm->save($this->request->data)) {
				$this->Session->setFlash(__('The firm has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The firm could not be saved. Please, try again.'));
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
		if (!$this->Firm->exists($id)) {
			throw new NotFoundException(__('Invalid firm'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Firm->save($this->request->data)) {
				$this->Session->setFlash(__('The firm has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The firm could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Firm.' . $this->Firm->primaryKey => $id));
			$this->request->data = $this->Firm->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function delete($id = null) {
	// 	$this->Firm->id = $id;
	// 	if (!$this->Firm->exists()) {
	// 		throw new NotFoundException(__('Invalid firm'));
	// 	}
	// 	$this->request->onlyAllow('post', 'delete');
	// 	if ($this->Firm->delete()) {
	// 		$this->Session->setFlash(__('The firm has been deleted.'));
	// 	} else {
	// 		$this->Session->setFlash(__('The firm could not be deleted. Please, try again.'));
	// 	}
	// 	return $this->redirect(array('action' => 'index'));
	// }
}
