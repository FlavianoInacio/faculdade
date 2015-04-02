<?php
App::uses('AppModel', 'Model');
/**
 * Tipostarefa Model
 *
 * @property Tarefa $Tarefa
 */
class Tipostarefa extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Tarefa' => array(
			'className' => 'Tarefa',
			'foreignKey' => 'tipostarefa_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
