<?php

namespace App\Entity;

class Dinosaur {
	private $length=0;
	/**
	 * @var string
	 */
	private $genus;
	/**
	 * @var bool
	 */
	private $isCarnivorous;

	public function __construct(string $genus='Unknown', bool $isCarnivorous=false) {
    // TODO: write logic here
		$this->genus = $genus;
		$this->isCarnivorous = $isCarnivorous;
	}

  public function getLength():int {
    return $this->length;
  }

  public function setLength(int $length) {
    $this->length = $length;
  }

  public function getDescription(): string {
    return 'The Unknown non-carnivorous dinosaur is 0 meters long';
  }
}
