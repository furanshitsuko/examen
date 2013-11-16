<?php
App::uses('AppModel', 'Model');
/**
 * Proyecto Model
 *
 */
class Proyecto extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'referencia';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'referencia' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'stock' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
