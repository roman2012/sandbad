<?php
App::uses('JobsAppController', 'Jobs.Controller');
/**
 * Provinces Controller
 *
 * @property Province $Province
 * @property PaginatorComponent $Paginator
 */
class ProvincesController extends JobsAppController {

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
		$this->Province->recursive = 0;
		$this->set('provinces', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Province->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid province'));
		}
		$options = array('conditions' => array('Province.' . $this->Province->primaryKey => $id));
		$this->set('province', $this->Province->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Province->create();
			if ($this->Province->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The province has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The province could not be saved. Please, try again.'), 'default', array('class' => 'error'));
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
		if (!$this->Province->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid province'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Province->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'استان مورد نظر ویرایش شد'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The province could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('Province.' . $this->Province->primaryKey => $id));
			$this->request->data = $this->Province->find('first', $options);
		}
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
		$this->Province->id = $id;
		if (!$this->Province->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid province'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Province->delete()) {
			$this->Session->setFlash(__d('croogo', 'Province deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Province was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Province->recursive = 1;
		$this->set('provinces', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Province->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid province'));
		}
		$options = array('conditions' => array('Province.' . $this->Province->primaryKey => $id));
		$this->set('province', $this->Province->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Province->create();
			if ($this->Province->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'استان جدید ذخیره شد.'), 'default', array('class' => 'success'));
				$this->redirect(array('plugin'=>'jobs', 'controller' => 'Provinces', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The province could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Province->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid province'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Province->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'استان مورد نظر ویرایش شد'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The province could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('Province.' . $this->Province->primaryKey => $id));
			$this->request->data = $this->Province->find('first', $options);
		}
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
		$this->Province->id = $id;
		if (!$this->Province->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid province'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Province->delete()) {
			$this->Session->setFlash(__d('croogo', 'استان مورد نظر حذف شد.'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Province was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}}
