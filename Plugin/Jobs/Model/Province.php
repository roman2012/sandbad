<?php
App::uses('JobsAppModel', 'Jobs.Model');
/**
 * City Model
 *
 * @property Province $Province
 * @property Job $Job
 */
class Province extends JobsAppModel {



	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'City' => array(
			'className' => 'City',
			'foreignKey' => 'province_id',
		)
	);

}
