<?php
App::uses('Materium', 'Model');

/**
 * Materium Test Case
 *
 */
class MateriumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Materium = ClassRegistry::init('Materium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Materium);

		parent::tearDown();
	}

}
