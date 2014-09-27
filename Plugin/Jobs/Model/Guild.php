<?php
App::uses('JobsAppModel', 'Jobs.Model');
/**
 * Guild Model
 *
 */
class Guild extends JobsAppModel {

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
		public $belongsTo = array(
			'Category' => array(
				'className'  => 'Category',
				'foreignKey' => 'category_id',
			)
		);
	

}
