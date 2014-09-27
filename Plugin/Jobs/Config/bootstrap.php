<?php
 CroogoNav::add('sidebar', 'مشالغ', array(
 	'icon' => array('th', 'large'),
 	'title' => __d('jobs', 'کسب و کارهای من'),
 	'url' => array(
 		'admin' => true,
 		'plugin' => 'jobs',
 		'controller' => 'jobs',
 		'action' => 'index',
 	),
 	'weight' => 45,
 	'children' => array(
 		'addjob' => array(
 			'title' => __d('croogo', 'کسب و کار جدید'),
 			'url' => array(
 				'admin' => true,
 				'plugin' => 'jobs',
 				'controller' => 'jobs',
 				'action' => 'add',
 			),
 		),
 		'jobs' => array(
 			'title' => __d('croogo', 'لیست همه کسب و کارها'),
 			'url' => array(
 				'admin' => true,
 				'plugin' => 'jobs',
 				'controller' => 'jobs',
 				'action' => 'index',
 			),
 		),
 	),
 ));

 CroogoNav::add('sidebar', 'اصناف', array(
 	'icon' => array('group', 'large'),
 	'title' => __d('jobs', 'مدیریت محتوا'),
 	'url' => array(
 		'admin' => true,
 		'plugin' => 'jobs',
 		'controller' => 'Guilds',
 		'action' => 'index',
 	),
 	'weight' => 45,
 	'children' => array(
 		'provinces' => array(
 			'title' => __d('jobs', 'استان ها'),
 			'url' => array(
 				'admin' => true,
 				'plugin' => 'jobs',
 				'controller' => 'Provinces',
 				'action' => 'index',
 			),
 		),
 		'cities' => array(
 			'title' => __d('jobs', 'شهرستانها'),
 			'url' => array(
 				'admin' => true,
 				'plugin' => 'jobs',
 				'controller' => 'cities',
 				'action' => 'index',
 			),
 		),
 		'categories' => array(
 			'title' => __d('jobs', 'موضوع'),
 			'url' => array(
 				'admin' => true,
 				'plugin' => 'jobs',
 				'controller' => 'Categories',
 				'action' => 'index',
 			),
 		),
		'guild' => array(
 			'title' => __d('jobs', 'اصناف'),
 			'url' => array(
 				'admin' => true,
 				'plugin' => 'jobs',
 				'controller' => 'Guilds',
 				'action' => 'index',
 			),
 		),
 	),
 ));


 CroogoNav::add('sidebar', 'خروج', array(
 	'icon' => array('fa fa-power-off', 'large'),
 	'title' => __d('jobs', 'خروج'),
 	'url' => array(
 		'admin' => true,
 		'plugin' => 'users',
 		'controller' => 'users',
 		'action' => 'logout',
 	),
 	'weight' => 99,

 ));