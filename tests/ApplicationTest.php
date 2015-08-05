<?php

namespace Raffle;

use PHPUnit_Framework_TestCase;

class ApplicationTest extends PHPUnit_Framework_TestCase
{
	public function testEntrantsCanBeAdded()
	{
		$entrant = new Entrant();
		$entrant->setName("Chris");

		$application = new Application();
		$application->addEntrant($entrant);

		$this->assertEquals("Chris", $application->getEntrant()->getName());
	}
}