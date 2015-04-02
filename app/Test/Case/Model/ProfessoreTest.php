<?php
App::uses('Professore', 'Model');

/**
 * Professore Test Case
 *
 */
class ProfessoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.professore',
		'app.materia',
		'app.semestre'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Professore = ClassRegistry::init('Professore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Professore);

		parent::tearDown();
	}

}
