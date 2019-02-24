<?php

namespace App\Entity;

use phpDocumentor\Reflection\Types\Static_;

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

  public static function growValociraptor(int $length): self {
    $dinosaur = new static('velociraptor', true);
    $dinosaur->setLength(5);

    return $dinosaur;
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

  public function getGenus(): string {
    return $this->genus;
  }

  public function isCarnivorous():bool {
    return $this->isCarnivorous;
  }

  public function hasSameDietAs(Dinosaur $dinosaur) {
    return $dinosaur->isCarnivorous() === $this->isCarnivorous();
  }
}
