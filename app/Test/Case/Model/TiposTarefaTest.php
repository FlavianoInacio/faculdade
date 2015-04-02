<?php
App::uses('Tipostarefa', 'Model');

/**
 * Tipostarefa Test Case
 *
 */
class TipostarefaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipostarefa',
		'app.tarefa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tipostarefa = ClassRegistry::init('Tipostarefa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tipostarefa);

		parent::tearDown();
	}

}
