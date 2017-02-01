<?php 

use \Alexander\Math;

class CommonTest extends PHPUnit_Framework_TestCase {

	public function testHello(){
		$test = new Math();
		$this->assertEquals(1,$test->get());
	}
}