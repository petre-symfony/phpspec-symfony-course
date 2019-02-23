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
		$this->genus = $genus;
		$this->isCarnivorous = $isCarnivorous;
	}

  public static function growValociraptor($argument1) {
    throw new \BadMethodCallException("Mismatch between the number of arguments of the factory method and constructor");
  }

  public function getLength():int {
    return $this->length;
  }

  public function setLength(int $length) {
    $this->length = $length;
  }

  public function getDescription(): string {
    return sprintf(
      "The %s %scarnivorous dinosaur is %d meters long",
	    $this->genus,
	    $this->isCarnivorous ? '' : 'non-',
		    $this->length
    );
  }
}
