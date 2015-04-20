<?php
/**
 * TbLawdatumFixture
 *
 */
class TbLawdatumFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'i_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'i_no' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'i_subno' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'c_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'c_desc' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'c_comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'i_catlaw' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'i_lawno' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'i_year' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'c_ref_law' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'c_status' => array('type' => 'string', 'null' => true, 'default' => 'Y', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'c_tmp_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'c_search' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'i_no' => 1,
			'i_subno' => 1,
			'c_name' => 'Lorem ipsum dolor sit amet',
			'c_desc' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'c_comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'i_catlaw' => 1,
			'i_lawno' => 1,
			'i_year' => 1,
			'c_ref_law' => 'Lorem ipsum dolor sit amet',
			'c_status' => 'Lorem ipsum dolor sit ame',
			'c_tmp_name' => 'Lorem ipsum dolor sit amet',
			'c_search' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
