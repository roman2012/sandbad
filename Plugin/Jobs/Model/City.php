<?php
App::uses('JobsAppModel', 'Jobs.Model');
/**
 * City Model
 *
 * @property Province $Province
 * @property Job $Job
 */
class City extends JobsAppModel {



	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Province' => array(
			'className' => 'Province',
			'foreignKey' => 'province_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
