<?php

namespace App\Entity;
use App\Exception\DinosaursAreRunningRampantException;
use App\Exception\NotABuffetException;

class Enclosure {
	/** @var Dinosaur[] */
	private $dinosaurs = [];

	/** @var Security[] */
	private $securities=[];

  public function __construct(bool $withBasicSecurity=false) {
    if($withBasicSecurity){
    	$this->addSecurity(new Security('Fency', true, $this));
    }
  }

  public function getDinosaurs():array {
    return $this->dinosaurs;
  }

  public function addDinosaur(Dinosaur $dinosaur) {
  	if(!$this->isSecurityActive()){
  		throw new DinosaursAreRunningRampantException('Are you crazy?!?');
	  }
  	if(!$this->canAddDinosaur($dinosaur)){
  		throw new NotABuffetException();
	  }
    $this->dinosaurs[] = $dinosaur;
  }

	private function canAddDinosaur(Dinosaur $dinosaur):bool {
    return count($this->dinosaurs) === 0
	    || $dinosaur->hasSameDietAs($this->dinosaurs[0]);
	}

	private function isSecurityActive(): bool {
  	foreach ($this->securities as $security){
  		if ($security->getIsActive()){
  			return true;
		  }
	  }

  	return false;
	}

	public function addSecurity(Security $security){
    $this->securities[] = $security;
	}

}
