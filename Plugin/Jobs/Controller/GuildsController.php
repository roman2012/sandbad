<?php
App::uses('JobsAppController', 'Jobs.Controller');
/**
 * Guilds Controller
 *
 * @property Guild $Guild
 * @property PaginatorComponent $Paginator
 */
class GuildsController extends JobsAppController {



/**
 * afterConstruct
 */
	public function afterConstruct() {
		parent::afterConstruct();
		$this->_setupAclComponent();
	}

/**
 * beforeFilter
 *
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Security->unlockedActions[] = 'admin_toggle';
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
		$this->Guild->recursive = 0;
		$this->set('guilds', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Guild->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid guild'));
		}
		$options = array('conditions' => array('Guild.' . $this->Guild->primaryKey => $id));
		$this->set('guild', $this->Guild->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Guild->create();
			if ($this->Guild->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The guild has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The guild could not be saved. Please, try again.'), 'default', array('class' => 'error'));
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
		if (!$this->Guild->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid guild'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Guild->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'The guild has been saved'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The guild could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('Guild.' . $this->Guild->primaryKey => $id));
			$this->request->data = $this->Guild->find('first', $options);
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
		$this->Guild->id = $id;
		if (!$this->Guild->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid guild'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Guild->delete()) {
			$this->Session->setFlash(__d('croogo', 'Guild deleted'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Guild was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Guild->recursive = 0;
		$this->set('guilds', $this->paginate());
		$count = $this->Guild->find('count');
		$this->set('count', $count);

	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Guild->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid guild'));
		}
		$options = array('conditions' => array('Guild.' . $this->Guild->primaryKey => $id));
		$this->set('guild', $this->Guild->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Guild->create();
			if ($this->Guild->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'صنف جدید ایجاد شد.'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The guild could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		}else{
			$categories = $this->Guild->Category->find('list');
			$this->set(compact('categories'));
			
		}
	}

/**
 * Toggle Link status
 *
 * @param $id string Link id
 * @param $status integer Current Link status
 * @return void
 */
	public function admin_toggle($id = null, $status = null) {		
		$this->Croogo->fieldToggle($this->Guild, $id, $status,'show');
	}



/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Guild->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid guild'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Guild->save($this->request->data)) {
				$this->Session->setFlash(__d('croogo', 'صنف مورد نظر ویرایش شد.'), 'default', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__d('croogo', 'The guild could not be saved. Please, try again.'), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('Guild.' . $this->Guild->primaryKey => $id));
			$this->request->data = $this->Guild->find('first', $options);
			$categories = $this->Guild->Category->find('list');
			$this->set(compact('categories'));
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
		$this->Guild->id = $id;
		if (!$this->Guild->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid guild'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Guild->delete()) {
		$this->Session->setFlash(__d('croogo', 'صنف مورد نظر حذف شد.'), 'default', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', 'Guild was not deleted'), 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}}
