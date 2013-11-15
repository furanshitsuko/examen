<?php
/**
 * ProyectoFixture
 *
 */
class ProyectoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'referencia' => array('type' => 'integer', 'null' => true),
		'descripcion' => array('type' => 'string', 'null' => false),
		'precio' => array('type' => 'float', 'null' => false),
		'stock' => array('type' => 'integer', 'null' => false),
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
			'referencia' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'precio' => 1,
			'stock' => 1
		),
	);

}
