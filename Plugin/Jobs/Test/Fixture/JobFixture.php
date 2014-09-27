<?php
/**
 * JobFixture
 *
 */
class JobFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'guild_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'established_time' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'logo' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tel' => array('type' => 'integer', 'null' => true, 'default' => null),
		'fax' => array('type' => 'integer', 'null' => true, 'default' => null),
		'city_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'x-gmap' => array('type' => 'integer', 'null' => true, 'default' => null),
		'y-gmap' => array('type' => 'integer', 'null' => true, 'default' => null),
		'description' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'category_id' => 1,
			'guild_id' => 1,
			'established_time' => '2014-08-19 14:51:24',
			'logo' => 'Lorem ipsum dolor sit amet',
			'tel' => 1,
			'fax' => 1,
			'city_id' => 1,
			'address' => 'Lorem ipsum dolor sit amet',
			'x-gmap' => 1,
			'y-gmap' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'user_id' => 1
		),
	);

}
