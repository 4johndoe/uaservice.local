<?php
App::uses('AppController', 'Controller');
/**
 * Lics Controller
 *
 * @property Lic $Lic
 * @property PaginatorComponent $Paginator
 */
class LicsController extends AppController {

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
		$this->Lic->recursive = 0;
		$this->set('lics', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lic->exists($id)) {
			throw new NotFoundException(__('Invalid lic'));
		}
		$options = array('conditions' => array('Lic.' . $this->Lic->primaryKey => $id));
		$this->set('lic', $this->Lic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lic->create();
			if ($this->Lic->save($this->request->data)) {
				$this->Session->setFlash(__('The lic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lic could not be saved. Please, try again.'));
			}
		}
		$firms = $this->Lic->Firm->find('list');
		$this->set(compact('firms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lic->exists($id)) {
			throw new NotFoundException(__('Invalid lic'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lic->save($this->request->data)) {
				$this->Session->setFlash(__('The lic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lic.' . $this->Lic->primaryKey => $id));
			$this->request->data = $this->Lic->find('first', $options);
		}
		$firms = $this->Lic->Firm->find('list');
		$this->set(compact('firms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lic->id = $id;
		if (!$this->Lic->exists()) {
			throw new NotFoundException(__('Invalid lic'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lic->delete()) {
			$this->Session->setFlash(__('The lic has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lic could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
