<?php
/**
 * ProjectFixture
 *
 */
class ProjectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => true),
		'user_id' => array('type' => 'integer', 'null' => true),
		'name' => array('type' => 'string', 'null' => true),
		'short_description' => array('type' => 'string', 'null' => true),
		'long_description' => array('type' => 'text', 'null' => true),
		'start_date' => array('type' => 'datetime', 'null' => true),
		'end_date' => array('type' => 'datetime', 'null' => true),
		'is_active' => array('type' => 'text', 'null' => true),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'category_id' => 1,
			'user_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'short_description' => 'Lorem ipsum dolor sit amet',
			'long_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'start_date' => '2013-11-15 14:40:25',
			'end_date' => '2013-11-15 14:40:25',
			'is_active' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2013-11-15 14:40:25',
			'modified' => '2013-11-15 14:40:25'
		),
	);

}
