<?php
App::uses('JobsAppController', 'Jobs.Controller');
/**
 * Jobs Controller
 *
 * @property Job $Job
 * @property PaginatorComponent $Paginator
 */
class JobsController extends JobsAppController {


/**
 * beforeFilter
 *
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Security->unlockedActions[] = 'admin_change_category';
	}



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
		$this->Job->recursive = 0;
		$this->set('jobs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid job'));
		}
		$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
		$this->set('job', $this->Job->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Job->create();
			if ($this->Job->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The job has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The job could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$categories = $this->Job->Category->find('list');
		$guilds = $this->Job->Guild->find('list');
		$cities = $this->Job->City->find('list');
		$users = $this->Job->User->find('list');
		$this->set(compact('categories', 'guilds', 'cities', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid job'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Job->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The job has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The job could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
			$this->request->data = $this->Job->find('first', $options);
		}
		$categories = $this->Job->Category->find('list');
		$guilds = $this->Job->Guild->find('list');
		$cities = $this->Job->City->find('list');
		$users = $this->Job->User->find('list');
		$this->set(compact('categories', 'guilds', 'cities', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Job->id = $id;
		if (!$this->Job->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid job'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Job->delete()) {
			$this->Session->setFlash(__d('croogo', 'Job deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Job was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Job->recursive = 0;
		$this->set('jobs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid job'));
		}
		$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
		$this->set('job', $this->Job->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Job->create();
			if ($this->Job->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The job has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The job could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
		$categories = $this->Job->Category->find('list');
		$guilds     = $this->Job->Guild->find('list');
		$cities     = $this->Job->City->find('list');
		// $provinces  = $this->Job->City->Province->find('list');
		$users      = $this->Job->User->find('list');
		$this->set(compact('categories', 'guilds', 'cities', 'users','provinces'));
	}

/**
 * admin_change_category method
 *
 * @return void
 */
	public function admin_change_category(){
		$this->layout 	= 'ajax';
		$categories = $this->request->data['Job']['categories'];
		$guilds = $this->Job->Guild->find('all', array(
			'conditions' => array('Guild.Category_id' => $categories),
			'recursive' => -1
			));
		$this->set('guilds',$guilds);
	}





/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid job'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Job->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The job has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The job could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
			$this->request->data = $this->Job->find('first', $options);
		}
		$categories = $this->Job->Category->find('list');
		$guilds = $this->Job->Guild->find('list');
		$cities = $this->Job->City->find('list');
		$users = $this->Job->User->find('list');
		$this->set(compact('categories', 'guilds', 'cities', 'users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Job->id = $id;
		if (!$this->Job->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid job'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Job->delete()) {
			$this->Session->setFlash(__d('croogo', 'Job deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Job was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}}
