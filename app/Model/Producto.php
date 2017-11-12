<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property Rol $Rol
 */
class Producto extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'productos';

/**
 * Display field
 *
 * @var string
 */
<<<<<<< HEAD
	public $displayField = 'id';
=======
	public $displayField = 'id_producto';
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
		'id_producto' => array(
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

		'nombre' => array(
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

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Formula' => array(
			'className' => 'Formula',
			'foreignKey' => 'id_formula',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
