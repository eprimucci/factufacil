<?php
App::uses('AppController', 'Controller');
/**
 * CoursesCustomers Controller
 *
 * @property CoursesCustomer $CoursesCustomer
 */
class CoursesCustomersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CoursesCustomer->recursive = 0;
		$this->set('coursesCustomers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CoursesCustomer->id = $id;
		if (!$this->CoursesCustomer->exists()) {
			throw new NotFoundException(__('Invalid courses customer'));
		}
		$this->set('coursesCustomer', $this->CoursesCustomer->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CoursesCustomer->create();
			if ($this->CoursesCustomer->save($this->request->data)) {
				$this->Session->setFlash(__('The courses customer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courses customer could not be saved. Please, try again.'));
			}
		}
		$courses = $this->CoursesCustomer->Course->find('list');
		$customers = $this->CoursesCustomer->Customer->find('list');
		$this->set(compact('courses', 'customers'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CoursesCustomer->id = $id;
		if (!$this->CoursesCustomer->exists()) {
			throw new NotFoundException(__('Invalid courses customer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CoursesCustomer->save($this->request->data)) {
				$this->Session->setFlash(__('The courses customer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courses customer could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CoursesCustomer->read(null, $id);
		}
		$courses = $this->CoursesCustomer->Course->find('list');
		$customers = $this->CoursesCustomer->Customer->find('list');
		$this->set(compact('courses', 'customers'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->CoursesCustomer->id = $id;
		if (!$this->CoursesCustomer->exists()) {
			throw new NotFoundException(__('Invalid courses customer'));
		}
		if ($this->CoursesCustomer->delete()) {
			$this->Session->setFlash(__('Courses customer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Courses customer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
