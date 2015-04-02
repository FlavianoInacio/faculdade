<?php
App::uses('AppModel', 'Model');
/**
 * Semestre Model
 *
 * @property Materia $Materia
 */
class Semestre extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'semestre_id',
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
