<?php

namespace App\Factory;

use App\Entity\Dinosaur;

class DinosaurFactory {
  public function growVelociraptor(int $length): Dinosaur {
	  $dinosaur = new Dinosaur('velociraptor', true);
	  $dinosaur->setLength(5);

	  return $dinosaur;
  }
}
