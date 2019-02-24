<?php

namespace App\Factory;

use App\Entity\Dinosaur;

class DinosaurFactory {
  public function growVelociraptor(int $length): Dinosaur {

	  return $this->createDinosaur('velociraptor', true, $length);
  }

  private function createDinosaur(
    string $genus,
    bool $isCarnivorous,
    int $length
  ) : Dinosaur{
	  $dinosaur = new Dinosaur($genus, true);
	  $dinosaur->setLength($length);

	  return $dinosaur;
  }
}
