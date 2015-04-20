<?php
/**
 * FavoriteFixture
 *
 */
class FavoriteFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'favorite';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'i_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'i_user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'i_deka' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'i_id', 'unique' => 1)
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
			'i_id' => 1,
			'i_user_id' => 1,
			'i_deka' => 1,
			'created' => '2015-04-14 06:53:18',
			'modified' => '2015-04-14 06:53:18'
		),
	);

}
