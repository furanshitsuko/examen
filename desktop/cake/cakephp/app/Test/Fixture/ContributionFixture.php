<?php
/**
 * ContributionFixture
 *
 */
class ContributionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true),
		'reward_id' => array('type' => 'integer', 'null' => true),
		'amount' => array('type' => 'float', 'null' => true),
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
			'user_id' => 1,
			'reward_id' => 1,
			'amount' => 1,
			'created' => '2013-11-15 14:36:49',
			'modified' => '2013-11-15 14:36:49'
		),
	);

}
