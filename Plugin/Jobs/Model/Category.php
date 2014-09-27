<?php
App::uses('JobsAppModel', 'Jobs.Model');
/**
 * Category Model
 *
 */
class Category extends JobsAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);


	/**
	 * hasMany associations
	 *
	 * @var array
	 */
		public $hasMany = array(
			'Guild' => array(
				'className'  => 'Guild',
				'foreignKey' => 'category_id',
			)
		);
	
}
