<?php

namespace Raffle;

use PHPUnit_Framework_TestCase;

class EntrantTest extends PHPUnit_Framework_TestCase
{
	public function testThatTheNameIsSettableAndGettable()
	{
		$entrant = new Entrant();
		$entrant->setName("Chris");

		$this->assertEquals("Chris", $entrant->getName());
	}
}