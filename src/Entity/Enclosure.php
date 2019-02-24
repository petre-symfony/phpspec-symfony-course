<?php

namespace App\Entity;

class Enclosure {
	/** @var Dinosaur[] */
	private $dinosaurs = [];

  public function getDinosaurs():array {
    return $this->dinosaurs;
  }
}
