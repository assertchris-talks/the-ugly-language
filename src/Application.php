<?php

namespace Raffle;

class Application
{
	protected $entrants = [];

	public function addEntrant(Entrant $entrant)
	{
		$this->entrants[] = $entrant;
	}

	public function getEntrant()
	{
		$index = rand(0, count($this->entrants) - 1);

		return $this->entrants[$index];
	}
}
