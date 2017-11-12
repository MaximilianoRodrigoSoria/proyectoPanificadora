<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property Rol $Rol
 */
class Formula extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'formula';

/**
 * Display field
 *
 * @var string
 */
<<<<<<< HEAD
	public $displayField = 'id';
=======
	public $displayField = 'id_formula';
>>>>>>> origin/master

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
<<<<<<< HEAD
		'id' => array(
=======
		'id_formula' => array(
>>>>>>> origin/master
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'descripcion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

}
