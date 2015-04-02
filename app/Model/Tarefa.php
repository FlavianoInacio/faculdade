<?php
App::uses('AppModel', 'Model');
/**
 * Tarefa Model
 *
 * @property Tipostarefa $Tipostarefa
 */
class Tarefa extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tipostarefa_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Tipostarefa' => array(
			'className' => 'Tipostarefa',
			'foreignKey' => 'tipostarefa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
