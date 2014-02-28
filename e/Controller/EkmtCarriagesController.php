<?php
App::uses('AppController', 'Controller');
/**
 * EkmtCarriages Controller
 *
 * @property EkmtCarriage $EkmtCarriage
 * @property PaginatorComponent $Paginator
 */
class EkmtCarriagesController extends AppController {

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
		$this->EkmtCarriage->recursive = 0;
		$this->set('ekmtCarriages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EkmtCarriage->exists($id)) {
			throw new NotFoundException(__('Invalid ekmt carriage'));
		}
		$options = array('conditions' => array('EkmtCarriage.' . $this->EkmtCarriage->primaryKey => $id));
		$this->set('ekmtCarriage', $this->EkmtCarriage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EkmtCarriage->create();
			if ($this->EkmtCarriage->save($this->request->data)) {
				$this->Session->setFlash(__('The ekmt carriage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ekmt carriage could not be saved. Please, try again.'));
			}
		}
		$lics = $this->EkmtCarriage->Lic->find('list');
		$this->set(compact('lics'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EkmtCarriage->exists($id)) {
			throw new NotFoundException(__('Invalid ekmt carriage'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EkmtCarriage->save($this->request->data)) {
				$this->Session->setFlash(__('The ekmt carriage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ekmt carriage could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EkmtCarriage.' . $this->EkmtCarriage->primaryKey => $id));
			$this->request->data = $this->EkmtCarriage->find('first', $options);
		}
		$lics = $this->EkmtCarriage->Lic->find('list');
		$this->set(compact('lics'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EkmtCarriage->id = $id;
		if (!$this->EkmtCarriage->exists()) {
			throw new NotFoundException(__('Invalid ekmt carriage'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EkmtCarriage->delete()) {
			$this->Session->setFlash(__('The ekmt carriage has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ekmt carriage could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
